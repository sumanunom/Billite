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
 * Class Invoices
 */
class Invoices extends Guest_Controller
{
    /**
     * Invoices constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('invoices/mdl_invoices');
    }

    public function index()
    {
        // Display open invoices by default
        redirect('guest/invoices/status/open');
    }

    /**
     * @param string $status
     * @param int $page
     */    

    public function status($status = 'open', $page = 0)
    {
        // Determine which group of invoices to load
        switch ($status) {
            case 'paid':
                $this->mdl_invoices->is_paid()->where_in('ip_invoices.client_id', $this->user_clients);
                break;
            default:
                $this->mdl_invoices->guest_visible()->where_in('ip_invoices.client_id', $this->user_clients);
                break;

        }

        $this->mdl_invoices->paginate(site_url('guest/invoices/status/' . $status), $page);
        $invoices = $this->mdl_invoices->result();

        $this->layout->set(
            array(
                'invoices' => $invoices,
                'status' => $status
            )
        );

        $this->layout->buffer('content', 'guest/invoices_index');
        $this->layout->render('layout_guest');
    }

    /**
     * @param $invoice_id
     */
    public function view($invoice_id)
    {
        $this->load->model('invoices/mdl_items');
        $this->load->model('invoices/mdl_invoice_tax_rates');

        $invoice = $this->mdl_invoices->where('ip_invoices.invoice_id', $invoice_id)->where_in('ip_invoices.client_id', $this->user_clients)->get()->row();

        if (!$invoice) {
            show_404();
        }

        $this->mdl_invoices->mark_viewed($invoice->invoice_id);

        $this->layout->set(
            array(
                'invoice' => $invoice,
                'items' => $this->mdl_items->where('invoice_id', $invoice_id)->get()->result(),
                'invoice_tax_rates' => $this->mdl_invoice_tax_rates->where('invoice_id', $invoice_id)->get()->result(),
                'invoice_id' => $invoice_id
            )
        );

        $this->layout->buffer(
            array(
                array('content', 'guest/invoices_view')
            )
        );

        $this->layout->render('layout_guest');
    }

    /**
     * @param $invoice_id
     * @param bool $stream
     * @param null $invoice_template
     */
    public function generate_pdf($invoice_id, $stream = true, $invoice_template = null)
    {
        $this->load->helper('pdf');

        $invoice = $this->mdl_invoices->guest_visible()->where('ip_invoices.invoice_id', $invoice_id)
            ->where_in('ip_invoices.client_id', $this->user_clients)
            ->get()->row();

        if (!$invoice) {
            show_404();
        }

        $this->mdl_invoices->mark_viewed($invoice_id);

        generate_invoice_pdf($invoice_id, $stream, $invoice_template, true);
    }

    /**
     * @param $invoice_id
     * @param bool $stream
     * @param null $invoice_template
     */
    public function generate_sumex_pdf($invoice_id, $stream = true, $invoice_template = null)
    {
        $this->load->helper('pdf');

        $invoice = $this->mdl_invoices->guest_visible()->where('ip_invoices.invoice_id', $invoice_id)
            ->where_in('ip_invoices.client_id', $this->user_clients)
            ->get()->row();

        if (!$invoice) {
            show_404();
        }

        $this->mdl_invoices->mark_viewed($invoice_id);

        generate_invoice_sumex($invoice_id);
    }

    // -------------------------- Create Invoice -----------------------------

    public function guest_create_invoice()
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

        $this->layout->load_view('guest/create_invoice', $data);
    }

    public function create()
    {
        $this->load->model('invoices/mdl_invoices');

        if ($this->mdl_invoices->run_validation()) {
            $invoice_id = $this->mdl_invoices->create();

            $response = [
                'success' => 1,
                'invoice_id' => $invoice_id,
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

    // -------------------------------------------- Invoice Edit -------------------------------------------

    public function invoice_view($invoice_id)
    {
        $this->load->model(
            [
                'invoices/mdl_items',
                'tax_rates/mdl_tax_rates',
                'payment_methods/mdl_payment_methods',
                'invoices/mdl_invoice_tax_rates',
                'custom_fields/mdl_custom_fields',
            ]
        );

// ------------ Ip Setting Category seprate each comma into array ---------------

$setting =  $this->mdl_invoices->category_value();

$se_val = '';
foreach($setting as $val)
{
    $se_val = $val['new_col'];
}
$string = $se_val; 
$cat_name = implode(", ", preg_split("/[\s]+/", $string)); 

// ------------ Ip Setting End ---------------

        $this->load->helper("custom_values");
        $this->load->helper("client");
        $this->load->model('units/mdl_units');
        // $this->load->module('payments');
        $this->load->model('New_model');

        $this->load->model('custom_values/mdl_custom_values');
        $this->load->model('custom_fields/mdl_invoice_custom');

        $this->db->reset_query();

        /*$invoice_custom = $this->mdl_invoice_custom->where('invoice_id', $invoice_id)->get();

        if ($invoice_custom->num_rows()) {
            $invoice_custom = $invoice_custom->row();

            unset($invoice_custom->invoice_id, $invoice_custom->invoice_custom_id);

            foreach ($invoice_custom as $key => $val) {
                $this->mdl_invoices->set_form_value('custom[' . $key . ']', $val);
            }
        }*/

        $fields = $this->mdl_invoice_custom->by_id($invoice_id)->get()->result();
        $invoice = $this->mdl_invoices->get_by_id($invoice_id);

        if (!$invoice) {
            show_404();
        }

        $custom_fields = $this->mdl_custom_fields->by_table('ip_invoice_custom')->get()->result();
        $custom_values = [];
        foreach ($custom_fields as $custom_field) {
            if (in_array($custom_field->custom_field_type, $this->mdl_custom_values->custom_value_fields())) {
                $values = $this->mdl_custom_values->get_by_fid($custom_field->custom_field_id)->result();
                $custom_values[$custom_field->custom_field_id] = $values;
            }
        }

        foreach ($custom_fields as $cfield) {
            foreach ($fields as $fvalue) {
                if ($fvalue->invoice_custom_fieldid == $cfield->custom_field_id) {
                    // TODO: Hackish, may need a better optimization
                    $this->mdl_invoices->set_form_value(
                        'custom[' . $cfield->custom_field_id . ']',
                        $fvalue->invoice_custom_fieldvalue
                    );
                    break;
                }
            }
        }

        // Check whether there are payment custom fields
        $payment_cf = $this->mdl_custom_fields->by_table('ip_payment_custom')->get();
        $payment_cf_exist = ($payment_cf->num_rows() > 0) ? "yes" : "no";

        $this->layout->set(
           array(
                'invoice' => $invoice,
                'items' => $this->mdl_items->where('invoice_id', $invoice_id)->get()->result(),
                'invoice_id' => $invoice_id,
                'tax_rates' => $this->mdl_tax_rates->get()->result(),
                'invoice_tax_rates' => $this->mdl_invoice_tax_rates->where('invoice_id', $invoice_id)->get()->result(),
                'units' => $this->mdl_units->get()->result(),
                'payment_methods' => $this->mdl_payment_methods->get()->result(),

                'c_name' => $this->New_model->get_client_name(),
                'i_num' => $this->New_model->get_invoice_num(),
                'q_num' => $this->New_model->get_quote_num(),

                'setting_report' =>  $cat_name,
                // 'setting_report' => $category,

                'custom_fields' => $custom_fields,
                'custom_values' => $custom_values,
                'custom_js_vars' => [
                    'currency_symbol' => get_setting('currency_symbol'),
                    'currency_symbol_placement' => get_setting('currency_symbol_placement'),
                    'decimal_point' => get_setting('decimal_point'),

                    
                ],
                'invoice_statuses' => $this->mdl_invoices->statuses(),
                'payment_cf_exist' => $payment_cf_exist,
           )
        );

                $this->layout->buffer(
                [
                    ['modal_delete_invoice', 'invoices/modal_delete_invoice'],
                    ['modal_add_invoice_tax', 'invoices/modal_add_invoice_tax'],
                    // ['modal_add_payment', 'payments/modal_add_payment'],
                    ['content', 'guest/invoices_edit'],
                ]
            );

        $this->layout->render('layout_guest');
}

    // ----------------------------------------- save edit quote -----------------------------------------
    public function save()
    {
        $this->load->model('invoices/mdl_items');
        $this->load->model('invoices/mdl_invoices');
        $this->load->model('units/mdl_units');
        $this->load->model('invoices/mdl_invoice_sumex');

        $invoice_id = $this->input->post('invoice_id');

        $this->mdl_invoices->set_id($invoice_id);

        if ($this->mdl_invoices->run_validation('validation_rules_save_invoice')) {
            $items = json_decode($this->input->post('items'));

            foreach ($items as $item) {
                // Check if an item has either a quantity + price or name or description
                if (!empty($item->item_name)) {
                    $item->item_quantity = ($item->item_quantity ? standardize_amount($item->item_quantity) : floatval(0));
                    $item->item_price = ($item->item_price ? standardize_amount($item->item_price) : floatval(0));
                    $item->item_discount_amount = ($item->item_discount_amount) ? standardize_amount($item->item_discount_amount) : null;
                    $item->item_product_id = ($item->item_product_id ? $item->item_product_id : null);
                    if (property_exists($item, 'item_date')) {
                        $item->item_date = ($item->item_date ? date_to_mysql($item->item_date) : null);
                    }
                    // $item->item_product_unit_id = ($item->item_product_unit_id ? $item->item_product_unit_id : null);
                    // $item->item_product_unit = $this->mdl_units->get_name($item->item_product_unit_id, $item->item_quantity);

                    $item->item_category = ($item->item_category ? $item->item_category : null);
                    
                    $item_id = ($item->item_id) ?: null;
                    unset($item->item_id);

                    if (!$item->item_task_id) {
                        unset($item->item_task_id);
                    } else {
                        $this->load->model('tasks/mdl_tasks');
                        $this->mdl_tasks->update_status(4, $item->item_task_id);
                    }

                    $this->mdl_items->save($item_id, $item);
                } elseif (empty($item->item_name) && (!empty($item->item_quantity) || !empty($item->item_price))) {
                    // Throw an error message and use the form validation for that
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules('item_name', trans('item'), 'required');
                    $this->form_validation->run();

                    $response = [
                        'success' => 0,
                        'validation_errors' => [
                            'item_name' => form_error('item_name', '', ''),
                        ],
                    ];

                    echo json_encode($response);
                    exit;
                }
            }

            $invoice_status = $this->input->post('invoice_status_id');

            if ($this->input->post('invoice_discount_amount') === '') {
                $invoice_discount_amount = floatval(0);
            } else {
                $invoice_discount_amount = $this->input->post('invoice_discount_amount');
            }

            if ($this->input->post('invoice_discount_percent') === '') {
                $invoice_discount_percent = floatval(0);
            } else {
                $invoice_discount_percent = $this->input->post('invoice_discount_percent');
            }

            // Generate new invoice number if needed
            $invoice_number = $this->input->post('invoice_number');

            if (empty($invoice_number) && $invoice_status != 1) {
                $invoice_group_id = $this->mdl_invoices->get_invoice_group_id($invoice_id);
                $invoice_number = $this->mdl_invoices->get_invoice_number($invoice_group_id);
            }

            $db_array = [
                'invoice_number' => $invoice_number,
                'invoice_terms' => $this->input->post('invoice_terms'),
                'invoice_date_created' => date_to_mysql($this->input->post('invoice_date_created')),
                'invoice_date_due' => date_to_mysql($this->input->post('invoice_date_due')),
                'invoice_password' => $this->input->post('invoice_password'),
                'invoice_status_id' => $invoice_status,
                'payment_method' => $this->input->post('payment_method'),
                'invoice_discount_amount' => standardize_amount($invoice_discount_amount),
                'invoice_discount_percent' => standardize_amount($invoice_discount_percent),
            ];

            // check if status changed to sent, the feature is enabled and settings is set to sent
            if ($this->config->item('disable_read_only') === false) {
                if ($invoice_status == get_setting('read_only_toggle')) {
                    $db_array['is_read_only'] = 1;
                }
            }

            $this->mdl_invoices->save($invoice_id, $db_array);
            $sumexInvoice = $this->mdl_invoices->where('sumex_invoice', $invoice_id)->get()->num_rows();

            if ($sumexInvoice >= 1) {
                $sumex_array = [
                    'sumex_invoice' => $invoice_id,
                    'sumex_reason' => $this->input->post('invoice_sumex_reason'),
                    'sumex_diagnosis' => $this->input->post('invoice_sumex_diagnosis'),
                    'sumex_treatmentstart' => date_to_mysql($this->input->post('invoice_sumex_treatmentstart')),
                    'sumex_treatmentend' => date_to_mysql($this->input->post('invoice_sumex_treatmentend')),
                    'sumex_casedate' => date_to_mysql($this->input->post('invoice_sumex_casedate')),
                    'sumex_casenumber' => $this->input->post('invoice_sumex_casenumber'),
                    'sumex_observations' => $this->input->post('invoice_sumex_observations'),
                ];
                $this->mdl_invoice_sumex->save($invoice_id, $sumex_array);
            }

            // Recalculate for discounts
            $this->load->model('invoices/mdl_invoice_amounts');
            $this->mdl_invoice_amounts->calculate($invoice_id);

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


            $this->load->model('custom_fields/mdl_invoice_custom');
            $result = $this->mdl_invoice_custom->save_custom($invoice_id, $db_array);
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

    public function invo_delete_item($invoice_id)
    {
        $success = 0;
        $item_id = $this->input->post('item_id');

        // Only continue if the invoice exists or no item id was provided
        if ($this->mdl_invoices->get_by_id($invoice_id) || empty($item_id)) {

            // Delete invoice item
            $this->load->model('invoices/mdl_items');
            $item = $this->mdl_items->delete($item_id);

            // Check if deletion was successful
            if ($item) {

                $success = 1;

                // Mark task as complete from invoiced
                if (isset($item->item_task_id) && $item->item_task_id) {
                    $this->load->model('tasks/mdl_tasks');
                    $this->mdl_tasks->update_status(3, $item->item_task_id);
                }
            }

        }

        // Return the response
        echo json_encode([
            'success' => $success
        ]);
    }

}
