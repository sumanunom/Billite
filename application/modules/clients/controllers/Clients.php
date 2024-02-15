
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Billite
 *
 * @author      Axiom Consulting
 * @copyright   Copyright (c) 2022 Billite.in
 * @license     https://billite.in/license.txt
 * @link        https://billite.in
 */

/**
 * Class Clients
 */
class Clients extends Admin_Controller
{
    /**
     * Clients constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_clients');
        $this->load->model('mdl_clients_paid');
        $this->load->model('New_model');
    }

    public function index()
    {
        // Display active clients by default
        redirect('clients/status/active');
    }

    /**
     * @param string $status
     * @param int $page
     */
    public function status($status = 'active', $page = 0)
    {
        if (is_numeric(array_search($status, array('active', 'inactive', 'unpaid')))) {
            $function = 'is_' . $status;
            $this->mdl_clients->$function();
        }

        $this->mdl_clients->with_total_balance()->paginate(site_url('clients/status/' . $status), $page);
        $clients = $this->mdl_clients->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $total = $this->mdl_clients_paid->invoice_total();

        $this->layout->set(
            array(
                'records' => $clients,
                'filter_display' => true,
                'filter_placeholder' => trans('filter_clients'),
                'filter_method' => 'filter_clients',
                'total_billed' => $total,
            )
        );  

        $this->layout->buffer('content', 'clients/index',$data);
        $this->layout->render();
    }

    /**
     * @param null $id
     */
    public function form($id = null)
    {
        if ($this->input->post('btn_cancel')) {
            redirect('clients');
        }
        
        $new_client = false;
        
        // Set validation rule based on is_update
        if ($this->input->post('is_update') == 0 && $this->input->post('client_name') != '') {
            $check = $this->db->get_where('ip_clients', array(
                'client_name' => $this->input->post('client_name'),
                'client_surname' => $this->input->post('client_surname')
            ))->result();

            if (!empty($check)) {
                $this->session->set_flashdata('alert_error', trans('client_already_exists'));
                redirect('clients/form');
            } else {
                $new_client = true;
            }
        }
        
        if ($this->mdl_clients->run_validation()) {
            $id = $this->mdl_clients->save($id);
            
            if ($new_client) {
                $this->load->model('user_clients/mdl_user_clients');
                $this->mdl_user_clients->get_users_all_clients();
            }
            
            $this->load->model('custom_fields/mdl_client_custom');
            $result = $this->mdl_client_custom->save_custom($id, $this->input->post('custom'));

            if ($result !== true) {
                $this->session->set_flashdata('alert_error', $result);
                $this->session->set_flashdata('alert_success', null);
                redirect('clients/form/' . $id);
                return;
            } else {
                redirect('clients/view/' . $id);
            }
        }

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_clients->prep_form($id)) {
                show_404();
            }

            $this->load->model('custom_fields/mdl_client_custom');
            $this->mdl_clients->set_form_value('is_update', true);

            $client_custom = $this->mdl_client_custom->where('client_id', $id)->get();

            if ($client_custom->num_rows()) {
                $client_custom = $client_custom->row();

                unset($client_custom->client_id, $client_custom->client_custom_id);

                foreach ($client_custom as $key => $val) {
                    $this->mdl_clients->set_form_value('custom[' . $key . ']', $val);
                }
            }
        } elseif ($this->input->post('btn_submit')) {
            if ($this->input->post('custom')) {
                foreach ($this->input->post('custom') as $key => $val) {
                    $this->mdl_clients->set_form_value('custom[' . $key . ']', $val);
                }
            }
        }

        $this->load->model('custom_fields/mdl_custom_fields');
        $this->load->model('custom_values/mdl_custom_values');
        $this->load->model('custom_fields/mdl_client_custom');

        $custom_fields = $this->mdl_custom_fields->by_table('ip_client_custom')->get()->result();
        $custom_values = [];
        foreach ($custom_fields as $custom_field) {
            if (in_array($custom_field->custom_field_type, $this->mdl_custom_values->custom_value_fields())) {
                $values = $this->mdl_custom_values->get_by_fid($custom_field->custom_field_id)->result();
                $custom_values[$custom_field->custom_field_id] = $values;
            }
        }

        $fields = $this->mdl_client_custom->get_by_clid($id);

        foreach ($custom_fields as $cfield) {
            foreach ($fields as $fvalue) {
                if ($fvalue->client_custom_fieldid == $cfield->custom_field_id) {
                    // TODO: Hackish, may need a better optimization
                    $this->mdl_clients->set_form_value(
                        'custom[' . $cfield->custom_field_id . ']',
                        $fvalue->client_custom_fieldvalue
                    );
                    break;
                }
            }
        }

        $this->load->helper('country');
        $this->load->helper('custom_values');

        $this->layout->set(
            array(
                'custom_fields' => $custom_fields,
                'custom_values' => $custom_values,
                'countries' => get_country_list(trans('cldr')),
                'selected_country' => $this->mdl_clients->form_value('client_country') ?: get_setting('default_country'),
                'selected_state' => $this->mdl_clients->form_value('client_state') ?: null,
                'languages' => get_available_languages(),
            )
        );

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'clients/form',$data);
        $this->layout->render();
    }

    /**
     * @param int $client_id
     */
    public function view($client_id)
    {
        $this->load->model('clients/mdl_client_notes');
        $this->load->model('invoices/mdl_invoices');
        $this->load->model('quotes/mdl_quotes');
        $this->load->model('payments/mdl_payments');
        $this->load->model('custom_fields/mdl_custom_fields');
        $this->load->model('custom_fields/mdl_client_custom');
        $this->load->model('New_model');

        $client = $this->mdl_clients
            ->with_total()
            ->with_total_balance()
            ->with_total_paid()
            ->where('ip_clients.client_id', $client_id)
            ->get()->row();

            $no_of_invoice = $this->mdl_clients->no_of_invoice($client_id);
            
    // ------------------------------------ Client Billing Overview ---------------------------------

        $next_year = date("Y")+1;
        $current_year = date("Y");
        $previous_year = date("Y")-1;

        $month = date('m');

        if($month <= 3)
        {
        
           $pre_year = $previous_year.'-'.'04'.'-01';
           $current_start = $pre_year;

           $curr_year = $current_year.'-'.'03'.'-31';
           $current_end = $curr_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';
        }

        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $client_billing_paid = $this->mdl_clients->client_billing_paid($current_year_start, $current_year_end, $client_id);

        $c_paid = array();  
        foreach ($client_billing_paid as $cp)
        {    
          $c_paid[] = $cp['total_paid'];           
        }
        $client_billing_paid = $c_paid;

        $c_paid = array_sum($c_paid);

        $client_billing = $this->mdl_clients->client_billing($current_year_start, $current_year_end, $client_id);

        $c_total = array();  
        foreach ($client_billing as $cp)
        {    
          $c_total[] = $cp['all_total'];           
        }
        $client_billing = $c_total;

        $c_total = array_sum($c_total);


        $custom_fields = $this->mdl_client_custom->get_by_client($client_id)->result();

        $this->mdl_client_custom->prep_form($client_id);

        if (!$client) {
            show_404();
        }

        $this->layout->set(
            array(
                'client' => $client,
                'client_notes' => $this->mdl_client_notes->where('client_id', $client_id)->get()->result(),
                'invoices' => $this->mdl_invoices->by_client($client_id)->limit(20)->get()->result(),
                'quotes' => $this->mdl_quotes->by_client($client_id)->limit(20)->get()->result(),
                'payments' => $this->mdl_payments->by_client($client_id)->limit(20)->get()->result(),
                'custom_fields' => $custom_fields,
                'quote_statuses' => $this->mdl_quotes->statuses(),
                'invoice_statuses' => $this->mdl_invoices->statuses(),

                'no_of_invo' => $no_of_invoice,

                'client_paid' => $client_billing_paid,
                'client_total' => $client_billing,

                'c_name' => $this->New_model->get_client_name(),
                'i_num' => $this->New_model->get_invoice_num(),
                'q_num' => $this->New_model->get_quote_num()
            )
        );

        $this->layout->buffer(
            array(
                array(
                    'invoice_table',
                    'invoices/partial_invoice_table'
                ),
                array(
                    'quote_table',
                    'quotes/partial_quote_table'
                ),
                array(
                    'payment_table',
                    'payments/partial_payment_table'
                ),
                array(
                    'partial_notes',
                    'clients/partial_notes'
                ),
                array(
                    'content',
                    'clients/new_view'
                )
            )
        );

        $this->layout->render();
    }

    /**
     * @param int $client_id
     */
    public function delete($client_id)
    {
        $this->mdl_clients->delete($client_id);
        redirect('clients');
    }

}
