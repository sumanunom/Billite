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
 * Class Email_Templates
 */
class Email_Templates extends Admin_Controller
{
    /**
     * Email_Templates constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_email_templates');
        $this->load->model('New_model');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        $this->mdl_email_templates->paginate(site_url('email_templates/index'), $page);
        $email_templates = $this->mdl_email_templates->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->set('email_templates', $email_templates);
        $this->layout->buffer('content', 'email_templates/index',$data);
        $this->layout->render();
    }

    /**
     * @param null $id
     */
    public function form($id = null)
    {
        if ($this->input->post('btn_cancel')) {
            redirect('email_templates');
        }

        if ($this->input->post('is_update') == 0 && $this->input->post('email_template_title') != '') {
            $check = $this->db->get_where('ip_email_templates', array('email_template_title' => $this->input->post('email_template_title')))->result();
            if (!empty($check)) {
                $this->session->set_flashdata('alert_error', trans('email_template_already_exists'));
                redirect('email_templates/form');
            }
        }

        if ($this->mdl_email_templates->run_validation()) {
            $this->mdl_email_templates->save($id);
            redirect('email_templates');
        }

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_email_templates->prep_form($id)) {
                show_404();
            }
            $this->mdl_email_templates->set_form_value('is_update', true);
        }

        $this->load->model('custom_fields/mdl_custom_fields');
        $this->load->model('invoices/mdl_templates');

        foreach (array_keys($this->mdl_custom_fields->custom_tables()) as $table) {
            $custom_fields[$table] = $this->mdl_custom_fields->by_table($table)->get()->result();
        }

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->set('custom_fields', $custom_fields);
        $this->layout->set('invoice_templates', $this->mdl_templates->get_invoice_templates());
        $this->layout->set('quote_templates', $this->mdl_templates->get_quote_templates());
        $this->layout->set('selected_pdf_template', $this->mdl_email_templates->form_value('email_template_pdf_template'));
        $this->layout->buffer('content', 'email_templates/form',$data);
        $this->layout->render();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->mdl_email_templates->delete($id);
        redirect('email_templates');
    }

}
