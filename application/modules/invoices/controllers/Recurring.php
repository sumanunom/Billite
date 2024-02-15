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
 * Class Recurring
 */
class Recurring extends Admin_Controller
{
    /**
     * Recurring constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_invoices_recurring');
        $this->load->model('New_model');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        $this->mdl_invoices_recurring->paginate(site_url('invoices/recurring'), $page);
        $recurring_invoices = $this->mdl_invoices_recurring->result();

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->set('recur_frequencies', $this->mdl_invoices_recurring->recur_frequencies);
        $this->layout->set('recurring_invoices', $recurring_invoices);
        $this->layout->buffer('content', 'invoices/index_recurring',$data);
        $this->layout->render();
    }

    /**
     * @param $invoice_recurring_id
     */
    public function stop($invoice_recurring_id)
    {
        $this->mdl_invoices_recurring->stop($invoice_recurring_id);
        redirect('invoices/recurring/index');
    }

    /**
     * @param $invoice_recurring_id
     */
    public function delete($invoice_recurring_id)
    {
        $this->mdl_invoices_recurring->delete($invoice_recurring_id);
        redirect('invoices/recurring/index');
    }

}
