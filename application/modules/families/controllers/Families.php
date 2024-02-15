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
 * Class Families
 */
class Families extends Admin_Controller
{
    /**
     * Families constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_families');
        $this->load->model('New_model');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->mdl_families->paginate(site_url('families/index'), $page);
        $families = $this->mdl_families->result();

        $this->layout->set('families', $families);
        $this->layout->buffer('content', 'families/index',$data);
        $this->layout->render();
    }

    /**
     * @param null $id
     */
    public function form($id = null)
    {
        if ($this->input->post('btn_cancel')) {
            redirect('families');
        }

        if ($this->input->post('is_update') == 0 && $this->input->post('family_name') != '') {
            $check = $this->db->get_where('ip_families', array('family_name' => $this->input->post('family_name')))->result();

            if (!empty($check)) {
                $this->session->set_flashdata('alert_error', trans('family_already_exists'));
                redirect('families/form');
            }
        }

        if ($this->mdl_families->run_validation()) {
            $this->mdl_families->save($id);
            redirect('families');
        }

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_families->prep_form($id)) {
                show_404();
            }

            $this->mdl_families->set_form_value('is_update', true);
        }

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'families/form',$data);
        $this->layout->render();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->mdl_families->delete($id);
        redirect('families');
    }

}
