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
 * Class Custom_Fields
 */
class Custom_Fields extends Admin_Controller
{
    /**
     * Custom_Fields constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_custom_fields');
        $this->load->model('New_model');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        $this->mdl_custom_fields->paginate(site_url('custom_fields/index'), $page);
        $custom_fields = $this->mdl_custom_fields->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->load->model('custom_values/mdl_custom_values');
        $this->layout->set('custom_fields', $custom_fields);
        $this->layout->set('custom_tables', $this->mdl_custom_fields->custom_tables());
        $this->layout->set('custom_value_fields', $this->mdl_custom_values->custom_value_fields());
        $this->layout->buffer('content', 'custom_fields/index',$data);
        $this->layout->render();
    }

    /**
     * @param null $id
     */
    public function form($id = null)
    {
        if ($this->input->post('btn_cancel')) {
            redirect('custom_fields');
        }

        if ($this->mdl_custom_fields->run_validation()) {
            $this->mdl_custom_fields->save($id);
            redirect('custom_fields');
        }

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_custom_fields->prep_form($id)) {
                show_404();
            }
        }

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();


        $this->load->model('mdl_client_custom');
        $this->load->model('mdl_invoice_custom');
        $this->load->model('mdl_payment_custom');
        $this->load->model('mdl_quote_custom');
        $this->load->model('mdl_user_custom');

        $this->layout->set('custom_field_tables', $this->mdl_custom_fields->custom_tables());
        $this->layout->set('custom_field_types', $this->mdl_custom_fields->custom_types());
        $this->layout->buffer('content', 'custom_fields/form',$data);
        $this->layout->render();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->mdl_custom_fields->delete($id);
        redirect('custom_fields');
    }

}
