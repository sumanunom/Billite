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
 * Class Tax_Rates
 */
class Tax_Rates extends Admin_Controller
{
    /**
     * Tax_Rates constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_tax_rates');
        $this->load->model('New_model');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        $this->mdl_tax_rates->paginate(site_url('tax_rates/index'), $page);
        $tax_rates = $this->mdl_tax_rates->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->set('tax_rates', $tax_rates);
        $this->layout->buffer('content', 'tax_rates/index',$data);
        $this->layout->render();
    }

    /**
     * @param null $id
     */
    public function form($id = null)
    {
        if ($this->input->post('btn_cancel')) {
            redirect('tax_rates');
        }

        if ($this->mdl_tax_rates->run_validation()) {
            $this->mdl_tax_rates->form_values['tax_rate_percent'] = standardize_amount($this->mdl_tax_rates->form_values['tax_rate_percent']);

            // We need to use the correct decimal point for sql IPT-310
            $db_array = $this->mdl_tax_rates->db_array();
            $db_array['tax_rate_percent'] = standardize_amount($this->input->post('tax_rate_percent'));

            $this->mdl_tax_rates->save($id, $db_array);

            redirect('tax_rates');
        }

        if ($id and !$this->input->post('btn_submit')) {
            if (!$this->mdl_tax_rates->prep_form($id)) {
                show_404();
            }
        }

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'tax_rates/form',$data);
        $this->layout->render();
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->mdl_tax_rates->delete($id);
        redirect('tax_rates');
    }

}
