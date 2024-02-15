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
 * Class Guest
 */
class Guest extends Guest_Controller
{
    public function index()
    {
        $this->load->model('quotes/mdl_quotes');
        $this->load->model('invoices/mdl_invoices');

        $this->layout->set(
            array(
                'overdue_invoices' => $this->mdl_invoices->is_overdue()->where_in('ip_invoices.client_id', $this->user_clients)->get()->result(),
                'open_quotes' => $this->mdl_quotes->guest_visible()->where_in('ip_quotes.client_id', $this->user_clients)->get()->result(),
                'open_invoices' => $this->mdl_invoices->guest_visible()->where_in('ip_invoices.client_id', $this->user_clients)->get()->result()
            )
        );

        $this->layout->buffer('content', 'guest/index');
        $this->layout->render('layout_guest');
    }

}
