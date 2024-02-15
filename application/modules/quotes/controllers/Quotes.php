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
class Quotes extends Admin_Controller
{
    /**
     * Quotes constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_quotes');
        $this->load->model('New_model');
    }

    public function index()
    {
        // Display all quotes by default
        redirect('quotes/status/all');
    }

    /**
     * @param string $status
     * @param int $page
     */
    public function status($status = 'all', $page = 0)
    {
        // Determine which group of quotes to load
        switch ($status) {
            case 'draft':
                $this->mdl_quotes->is_draft();
                break;
            case 'sent':
                $this->mdl_quotes->is_sent();
                break;
            case 'viewed':
                $this->mdl_quotes->is_viewed();
                break;
            case 'approved':
                $this->mdl_quotes->is_approved();
                break;
            case 'rejected':
                $this->mdl_quotes->is_rejected();
                break;
            case 'canceled':
                $this->mdl_quotes->is_canceled();
                break;
        }

        $this->mdl_quotes->paginate(site_url('quotes/status/' . $status), $page);
        $quotes = $this->mdl_quotes->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->set(
            array(
                'quotes' => $quotes,
                'status' => $status,
                'filter_display' => true,
                'filter_placeholder' => trans('filter_quotes'),
                'filter_method' => 'filter_quotes',
                'quote_statuses' => $this->mdl_quotes->statuses()
            )
        );

        $this->layout->buffer('content', 'quotes/index',$data);
        $this->layout->render();
    }

    /**
     * @param $quote_id
     */
public function view($quote_id)
{
    $this->load->helper('custom_values');
    $this->load->model('mdl_quote_items');
    $this->load->model('tax_rates/mdl_tax_rates');
    $this->load->model('units/mdl_units');
    $this->load->model('mdl_quote_tax_rates');
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
                array('content', 'quotes/view')
            )
        );

        $this->layout->render();
    }

    /**
     * @param $quote_id
     */
    public function delete($quote_id)
    {
        // Delete the quote
        $this->mdl_quotes->delete($quote_id);

        // Redirect to quote index
        redirect('quotes/index');
    }

    /**
     * @param $quote_id
     * @param bool $stream
     * @param null $quote_template
     */
    public function generate_pdf($quote_id, $stream = true, $quote_template = null)
    {
        $this->load->helper('pdf');

        if (get_setting('mark_quotes_sent_pdf') == 1) {
            $this->mdl_quotes->generate_quote_number_if_applicable($quote_id);
            $this->mdl_quotes->mark_sent($quote_id);
        }

        generate_quote_pdf($quote_id, $stream, $quote_template);
    }

    /**
     * @param $quote_id
     * @param $quote_tax_rate_id
     */
    public function delete_quote_tax($quote_id, $quote_tax_rate_id)
    {
        $this->load->model('mdl_quote_tax_rates');
        $this->mdl_quote_tax_rates->delete($quote_tax_rate_id);

        $this->load->model('mdl_quote_amounts');
        $this->mdl_quote_amounts->calculate($quote_id);

        redirect('quotes/view/' . $quote_id);
    }

    public function recalculate_all_quotes()
    {
        $this->db->select('quote_id');
        $quote_ids = $this->db->get('ip_quotes')->result();

        $this->load->model('mdl_quote_amounts');

        foreach ($quote_ids as $quote_id) {
            $this->mdl_quote_amounts->calculate($quote_id->quote_id);
        }
    }

}
