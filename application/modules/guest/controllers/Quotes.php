<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Billite
 *
 * @author		Axiom Consulting
 * @copyright	Copyright (c) 2022 Billite.in
 * @license		https://billite.in/license.txt
 * @link		https://billite.in
 */

/**
 * Class Quotes
 */
class Quotes extends Guest_Controller
{
    /**
     * Quotes constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('quotes/mdl_quotes');
    }

    public function index()
    {
        // Display open quotes by default
        redirect('guest/quotes/status/open');
    }

    /**
     * @param string $status
     * @param int $page
     */
    public function status($status = 'open', $page = 0)
    {
        redirect_to_set();

        // Determine which group of quotes to load
        switch ($status) {
            case 'approved':
                $this->mdl_quotes
                    ->is_approved()
                    ->where_in('ip_quotes.client_id', $this->user_clients);
                break;
            case 'rejected':
                $this->mdl_quotes
                    ->is_rejected()
                    ->where_in('ip_quotes.client_id', $this->user_clients);
                $this->layout->set('show_invoice_column', true);
                break;
            default:
                $this->mdl_quotes
                    ->guest_visible()
                    ->where_in('ip_quotes.client_id', $this->user_clients);
                break;
        }

        $this->mdl_quotes->paginate(site_url('guest/quotes/status/' . $status), $page);
        $quotes = $this->mdl_quotes->result();

        $this->layout->set('quotes', $quotes);
        $this->layout->set('status', $status);
        $this->layout->buffer('content', 'guest/quotes_index');
        $this->layout->render('layout_guest');
    }

    /**
     * @param $quote_id
     */
    public function view($quote_id)
    {
        redirect_to_set();

        $this->load->model('quotes/mdl_quote_items');
        $this->load->model('quotes/mdl_quote_tax_rates');

        $quote = $this->mdl_quotes->guest_visible()
            ->where('ip_quotes.quote_id', $quote_id)
            ->where_in('ip_quotes.client_id', $this->user_clients)
            ->get()->row();

        if (!$quote) {
            show_404();
        }

        $this->mdl_quotes->mark_viewed($quote->quote_id);

        $this->layout->set(
            array(
                'quote' => $quote,
                'items' => $this->mdl_quote_items
                    ->where('quote_id', $quote_id)
                    ->get()->result(),
                'quote_tax_rates' => $this->mdl_quote_tax_rates
                    ->where('quote_id', $quote_id)
                    ->get()->result(),
                'quote_id' => $quote_id
            )
        );

        $this->layout->buffer('content', 'guest/quotes_view');
        $this->layout->render('layout_guest');
    }

    /**
     * @param $quote_id
     * @param bool $stream
     * @param null $quote_template
     */
    public function generate_pdf($quote_id, $stream = true, $quote_template = null)
    {
        $this->load->helper('pdf');

        $this->mdl_quotes->mark_viewed($quote_id);

        $quote = $this->mdl_quotes->guest_visible()
            ->where('ip_quotes.quote_id', $quote_id)
            ->where_in('ip_quotes.client_id', $this->user_clients)
            ->get()->row();

        if (!$quote) {
            show_404();
        } else {
            generate_quote_pdf($quote_id, $stream, $quote_template);
        }
    }

    /**
     * @param $quote_id
     */
    public function approve($quote_id)
    {
        $this->load->model('quotes/mdl_quotes');
        $this->load->helper('mailer');

        $this->mdl_quotes->approve_quote_by_id($quote_id);
        email_quote_status($quote_id, "approved");

        redirect_to('guest/quotes');
    }

    /**
     * @param $quote_id
     */
    public function reject($quote_id)
    {
        $this->load->model('quotes/mdl_quotes');
        $this->load->helper('mailer');

        $this->mdl_quotes->reject_quote_by_id($quote_id);
        email_quote_status($quote_id, "rejected");

        redirect_to('guest/quotes');
    }

    // --------------------------- Model ------------------------------
    public function guest_create_quote()
    {
        $this->load->module('layout');
        $this->load->model('invoice_groups/mdl_invoice_groups');
        $this->load->model('tax_rates/mdl_tax_rates');
        $this->load->model('clients/mdl_clients');
        $this->load->model('guest/mdl_guest');

        $data = [
            'invoice_groups' => $this->mdl_invoice_groups->get()->result(),
            'tax_rates' => $this->mdl_tax_rates->get()->result(),
            'client' => $this->mdl_clients->get_by_id($this->input->post('client_id')),
            'clients' => $this->mdl_guest->guest_user(),
        ];

        $this->layout->load_view('guest/create_quote', $data);
        
    }

    public function create()
    {
        $this->load->model('quotes/mdl_quotes');

        if ($this->mdl_quotes->run_validation()) {
            $quote_id = $this->mdl_quotes->create();

            $response = [
                'success' => 1,
                'quote_id' => $quote_id,
            ];
        } else {
            $this->load->helper('json_error');
            $response = [
                'success' => 0,
                'validation_errors' => json_errors(),
            ];
        }

        echo json_encode($response);
    }

    // -----------------------------------------------------------------------------

    public function quote_view($quote_id)
{
    $this->load->helper('custom_values');
    $this->load->model('quotes/mdl_quote_items');
    $this->load->model('tax_rates/mdl_tax_rates');
    $this->load->model('units/mdl_units');
    $this->load->model('quotes/mdl_quote_tax_rates');
    $this->load->model('custom_fields/mdl_custom_fields');
    $this->load->model('custom_values/mdl_custom_values');
    $this->load->model('custom_fields/mdl_quote_custom');
    $this->load->model('New_model');

// ------------ Ip Setting Category seprate each comma into array ---------------

$setting =  $this->mdl_quotes->category_value();

$se_val = '';
foreach($setting as $val)
{
    $se_val = $val['new_col'];
}
$string = $se_val; 
$cat_name = implode(", ", preg_split("/[\s]+/", $string)); 

// ------------ Ip Setting End ---------------

        $fields = $this->mdl_quote_custom->by_id($quote_id)->get()->result();
        $this->db->reset_query();

        $quote_custom = $this->mdl_quote_custom->where('quote_id', $quote_id)->get();

        if ($quote_custom->num_rows()) {
            $quote_custom = $quote_custom->row();

            unset($quote_custom->quote_id, $quote_custom->quote_custom_id);

            foreach ($quote_custom as $key => $val) {
                $this->mdl_quotes->set_form_value('custom[' . $key . ']', $val);
            }
        }

        $quote = $this->mdl_quotes->get_by_id($quote_id);


        if (!$quote) {
            show_404();
        }

        $custom_fields = $this->mdl_custom_fields->by_table('ip_quote_custom')->get()->result();
        $custom_values = [];
        foreach ($custom_fields as $custom_field) {
            if (in_array($custom_field->custom_field_type, $this->mdl_custom_values->custom_value_fields())) {
                $values = $this->mdl_custom_values->get_by_fid($custom_field->custom_field_id)->result();
                $custom_values[$custom_field->custom_field_id] = $values;
            }
        }

        foreach ($custom_fields as $cfield) {
            foreach ($fields as $fvalue) {
                if ($fvalue->quote_custom_fieldid == $cfield->custom_field_id) {
                    // TODO: Hackish, may need a better optimization
                    $this->mdl_quotes->set_form_value(
                        'custom[' . $cfield->custom_field_id . ']',
                        $fvalue->quote_custom_fieldvalue
                    );
                    break;
                }
            }
        }

        $this->layout->set(
            array(
                'quote' => $quote,
                'items' => $this->mdl_quote_items->where('quote_id', $quote_id)->get()->result(),
                'quote_id' => $quote_id,
                'tax_rates' => $this->mdl_tax_rates->get()->result(),
                'units' => $this->mdl_units->get()->result(),
                'quote_tax_rates' => $this->mdl_quote_tax_rates->where('quote_id', $quote_id)->get()->result(),
                'c_name' => $this->New_model->get_client_name(),
                'i_num' => $this->New_model->get_invoice_num(),
                'q_num' => $this->New_model->get_quote_num(),
                
                'setting_report' =>  $cat_name,
                // 'setting_report' => $category,

                'custom_fields' => $custom_fields,
                'custom_values' => $custom_values,
                'custom_js_vars' => array(
                    'currency_symbol' => get_setting('currency_symbol'),
                    'currency_symbol_placement' => get_setting('currency_symbol_placement'),
                    'decimal_point' => get_setting('decimal_point')
                ),
                'quote_statuses' => $this->mdl_quotes->statuses()
            )
        );

        $this->layout->buffer(
            array(
                array('modal_delete_quote', 'quotes/modal_delete_quote'),
                array('modal_add_quote_tax', 'quotes/modal_add_quote_tax'),
                array('modal_quote_to_invoice', 'quotes/modal_quote_to_invoice'),
                array('modal_copy_quote', 'quotes/modal_copy_quote'),
                array('modal_change_client', 'quotes/modal_change_client'),
                array('content', 'guest/quotes_edit')
            )
        );

        $this->layout->render('layout_guest');
    }

    public function save()
    {
        $this->load->model('quotes/mdl_quote_items');
        $this->load->model('quotes/mdl_quotes');
        $this->load->model('units/mdl_units');

        $quote_id = $this->input->post('quote_id');
        $this->mdl_quotes->set_id($quote_id);

        if ($this->mdl_quotes->run_validation('validation_rules_save_quote')) {
            $items = json_decode($this->input->post('items'));

            foreach ($items as $item) {
                if ($item->item_name) {
                    $item->item_quantity = ($item->item_quantity ? standardize_amount($item->item_quantity) : floatval(0));
                    $item->item_price = ($item->item_price ? standardize_amount($item->item_price) : floatval(0));
                    $item->item_discount_amount = ($item->item_discount_amount) ? standardize_amount($item->item_discount_amount) : null;
                    $item->item_product_id = ($item->item_product_id ? $item->item_product_id : null);
                    //$item->item_product_unit_id = ($item->item_product_unit_id ? $item->item_product_unit_id : null);
                   //$item->item_product_unit = $this->mdl_units->get_name($item->item_product_unit_id, $item->item_quantity);
                    $item->item_category = ($item->item_category ? $item->item_category : null);
                    $item_id = ($item->item_id) ?: null;
                    unset($item->item_id);

                    $this->mdl_quote_items->save($item_id, $item);
                }
            }

            if ($this->input->post('quote_discount_amount') === '') {
                $quote_discount_amount = floatval(0);
            } else {
                $quote_discount_amount = $this->input->post('quote_discount_amount');
            }

            if ($this->input->post('quote_discount_percent') === '') {
                $quote_discount_percent = floatval(0);
            } else {
                $quote_discount_percent = $this->input->post('quote_discount_percent');
            }

            // Generate new quote number if needed
            $quote_number = $this->input->post('quote_number');
            $quote_status_id = $this->input->post('quote_status_id');
            
            $currenttime = date("Y-m-d ");
            if($quote_status_id == '4'){
                $quote_status_approved = $currenttime;
            }else{
                $quote_status_approved = '';
            }
            if (empty($quote_number) && $quote_status_id != 1) {
                $quote_group_id = $this->mdl_quotes->get_invoice_group_id($quote_id);
                $quote_number = $this->mdl_quotes->get_quote_number($quote_group_id);
            }
            $db_array = [
                'quote_number' => $quote_number,
                'quote_date_created' => date_to_mysql($this->input->post('quote_date_created')),
                'quote_date_expires' => date_to_mysql($this->input->post('quote_date_expires')),
                'quote_status_id' => $quote_status_id,
                'quote_password' => $this->input->post('quote_password'),
                'notes' => $this->input->post('notes'),
                'quote_discount_amount' => standardize_amount($quote_discount_amount),
                'quote_discount_percent' => standardize_amount($quote_discount_percent),
                'quote_status_approved' => $quote_status_approved,
                
            ];

            $this->mdl_quotes->save($quote_id, $db_array);

            // $currenttime = date("Y-m-d ");
            // $this->mdl_quotes->approve($currenttime);

            // Recalculate for discounts
            $this->load->model('quotes/mdl_quote_amounts');
            $this->mdl_quote_amounts->calculate($quote_id);

            $response = [
                'success' => 1,
            ];
        } else {
            $this->load->helper('json_error');
            $response = [
                'success' => 0,
                'validation_errors' => json_errors(),
            ];
        }


        // Save all custom fields
        if ($this->input->post('custom')) {
            $db_array = [];

            $values = [];
            foreach ($this->input->post('custom') as $custom) {
                if (preg_match("/^(.*)\[\]$/i", $custom['name'], $matches)) {
                    $values[$matches[1]][] = $custom['value'];
                } else {
                    $values[$custom['name']] = $custom['value'];
                }
            }

            foreach ($values as $key => $value) {
                preg_match("/^custom\[(.*?)\](?:\[\]|)$/", $key, $matches);
                if ($matches) {
                    $db_array[$matches[1]] = $value;
                }
            }
            $this->load->model('custom_fields/mdl_quote_custom');
            $result = $this->mdl_quote_custom->save_custom($quote_id, $db_array);
            if ($result !== true) {
                $response = [
                    'success' => 0,
                    'validation_errors' => $result,
                ];

                echo json_encode($response);
                exit;
            }
        }

        echo json_encode($response);
    }

    public function quote_delete_item($quote_id)
    {
        $success = 0;
        $item_id = $this->input->post('item_id');

        // Only continue if the invoice exists or no item id was provided
        if ($this->mdl_quotes->get_by_id($quote_id) || empty($item_id)) {

            // Delete invoice item
            $this->load->model('quotes/mdl_quote_items');
            $item = $this->mdl_quote_items->delete($item_id);

            // Check if deletion was successful
            if ($item) {
                $success = 1;
            }

        }

        // Return the response
        echo json_encode([
            'success' => $success,
        ]);
    }

}
