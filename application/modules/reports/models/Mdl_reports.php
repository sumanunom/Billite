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
 * Class Mdl_Reports
 */
class Mdl_Reports extends CI_Model
{
    /**
     * @param null $from_date
     * @param null $to_date
     * @return mixed
     */

    public function sales_this_month($from_date = null, $to_date = null)
    {
        $this->db->select('client_name, client_surname, CONCAT(client_name," ", client_surname) AS client_namesurname');

        if ($from_date and $to_date) {

            $from_date = ($from_date);
            $to_date = ($to_date);

            $this->db->select("
            (
                SELECT COUNT(*) FROM ip_invoices
                    WHERE ip_invoices.client_id = ip_clients.client_id 
                        AND invoice_date_created >= " . $this->db->escape($from_date) . "
                        AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ) AS invoice_count");

            $this->db->select("
            (
                SELECT invoice_number FROM ip_invoices
                    WHERE ip_invoices.client_id = ip_clients.client_id 
                        AND invoice_date_created >= " . $this->db->escape($from_date) . "
                        AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ) AS invoice_id");

            $this->db->select("
            (
                SELECT invoice_date_created FROM ip_invoices
                    WHERE ip_invoices.client_id = ip_clients.client_id 
                        AND invoice_date_created >= " . $this->db->escape($from_date) . "
                        AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ) AS invoice_date");

            $this->db->select("
            (
                SELECT invoice_status_id FROM ip_invoices
                    WHERE ip_invoices.client_id = ip_clients.client_id 
                        AND invoice_date_created >= " . $this->db->escape($from_date) . "
                        AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ) AS status");

            $this->db->select("
            (
                SELECT SUM(invoice_tax_total) FROM ip_invoice_amounts
                    WHERE ip_invoice_amounts.invoice_id IN
                    (
                        SELECT invoice_id FROM ip_invoices
                            WHERE ip_invoices.client_id = ip_clients.client_id
                                AND invoice_date_created >= " . $this->db->escape($from_date) . "
                                AND invoice_date_created <= " . $this->db->escape($to_date) . "
                    )
            ) AS total_tax");

            $this->db->select("
            (
                SELECT SUM(invoice_total) FROM ip_invoice_amounts
                    WHERE ip_invoice_amounts.invoice_id IN
                    (
                        SELECT invoice_id FROM ip_invoices
                            WHERE ip_invoices.client_id = ip_clients.client_id
                                AND invoice_date_created >= " . $this->db->escape($from_date) . "
                                AND invoice_date_created <= " . $this->db->escape($to_date) . "
                    )
            ) AS total_billed");

            $this->db->where('
                client_id IN
                (
                    SELECT client_id FROM ip_invoices
                        WHERE invoice_date_created >=' . $this->db->escape($from_date) . '
                            AND invoice_date_created <= ' . $this->db->escape($to_date) . '
                )');

        } else {

            $this->db->select('
            (
                SELECT COUNT(*) FROM ip_invoices
                    WHERE ip_invoices.client_id = ip_clients.client_id
            ) AS invoice_count');

            $this->db->select('
            (
                SELECT SUM(invoice_tax_total) FROM ip_invoice_amounts 
                    WHERE ip_invoice_amounts.invoice_id IN
                    (
                        SELECT invoice_id FROM ip_invoices
                            WHERE ip_invoices.client_id = ip_clients.client_id
                    )
            ) AS total_tax');

            $this->db->select('
            (
                SELECT SUM(invoice_total) FROM ip_invoice_amounts 
                    WHERE ip_invoice_amounts.invoice_id IN
                    (
                        SELECT invoice_id FROM ip_invoices
                            WHERE ip_invoices.client_id = ip_clients.client_id
                    )
            ) AS total_billed');

            $this->db->where('client_id IN (SELECT client_id FROM ip_invoices)');

        }

        $this->db->order_by('client_namesurname');

        return $this->db->get('ip_clients')->result();
    }


    // -------------------------------- Sales by client -----------------------------

    public function custom_year($from_date = null, $to_date = null)
{
     if ($from_date !='' &&  $to_date != '') {

            $from_date = date_to_mysql($from_date);
            $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT COUNT(ip_invoices.client_id) AS invoice_count, SUM(ip_invoice_amounts.invoice_tax_total) AS total_tax,  SUM(ip_invoice_amounts.invoice_total) AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE (ip_invoices.client_id = ip_clients.client_id) 
            AND invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            group by ip_clients.client_id ");
         }
        $query = $query->result_array();
        return $query;
}

public function invo_sub_total(){
    $query = $this->db->query(" SELECT COUNT(ip_invoices.client_id) AS invoice_count, SUM(ip_invoice_amounts.invoice_tax_total) AS total_tax,  SUM(ip_invoice_amounts.invoice_total) AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE (ip_invoices.client_id = ip_clients.client_id) AND year(invoice_date_created)=year(now())
            group by ip_clients.client_id 

            ");
    $query = $query->result_array();
    return $query;
}

    public function financial_sales_by_client($from_date = null, $to_date = null)
{
     if ($from_date !='' &&  $to_date != '') {

            // $from_date = date_to_mysql($from_date);
            // $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT COUNT(ip_invoices.client_id) AS invoice_count, SUM(ip_invoice_amounts.invoice_tax_total) AS total_tax,  SUM(ip_invoice_amounts.invoice_total) AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE (ip_invoices.client_id = ip_clients.client_id) 
            AND invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            group by ip_clients.client_id ");
         }
        $query = $query->result_array();
        return $query;
}

// -------------------------------- Sales by date -----------------------------

  public function sale_custom_year($from_date = null, $to_date = null)
{
     if ($from_date !='' &&  $to_date != '') {

            $from_date = date_to_mysql($from_date);
            $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax,  ip_invoice_amounts.invoice_total AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE  
            invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            group by ip_clients.client_id ");
         }
        $query = $query->result_array();
        return $query;
}

public function sales_date_month(){
    $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax,  ip_invoice_amounts.invoice_total AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE year(invoice_date_created)=year(now()) AND month(invoice_date_created)=month(now())
            group by ip_clients.client_id 

            ");
    $query = $query->result_array();
    return $query;
}


public function sales_date_year(){
    $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax,  ip_invoice_amounts.invoice_total AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE year(invoice_date_created)=year(now())
            group by ip_clients.client_id 

            ");
    $query = $query->result_array();
    return $query;
}

  public function financial_sales_by_date($from_date = null, $to_date = null)
{
     if ($from_date !='' &&  $to_date != '') {

            // $from_date = date_to_mysql($from_date);
            // $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax,  ip_invoice_amounts.invoice_total AS total_billed, ip_invoice_amounts.invoice_amount_id, ip_clients.client_name, ip_invoices.invoice_number,ip_invoices.invoice_id, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE  
            invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            group by ip_clients.client_id ");
         }
        $query = $query->result_array();
        return $query;
}

//---------------------------------- Payment History --------------------------------------

    /**
     * @param null $from_date
     * @param null $to_date
     * @return mixed
     */
    public function payment_history($from_date = null, $to_date = null)
    {
        $this->load->model('payments/mdl_payments');

        if ($from_date == '' &&  $to_date == '') {
            $from_date = ($from_date);
            $to_date = ($to_date);

            $this->mdl_payments->where('payment_date >=', $from_date);
            $this->mdl_payments->where('payment_date <=', $to_date);
        }

        return $this->mdl_payments->get()->result();
    }

    public function payment_history_month($from_date = null, $to_date = null)
    {
        $this->load->model('payments/mdl_payments');

        if ($from_date and $to_date) {
            $from_date = ($from_date);
            $to_date = ($to_date);

            $this->mdl_payments->where('payment_date >=', $from_date);
            $this->mdl_payments->where('payment_date <=', $to_date);
        }

        return $this->mdl_payments->get()->result();
    }

    public function payment_history_year($from_date = null, $to_date = null)
    {
        $this->load->model('payments/mdl_payments');

        if ($from_date and $to_date) {
            $from_date = ($from_date);
            $to_date = ($to_date);

            $this->mdl_payments->where('payment_date >=', $from_date);
            $this->mdl_payments->where('payment_date <=', $to_date);
        }

        return $this->mdl_payments->get()->result();
    }

        public function financial_payment_year($from_date = null, $to_date = null)
    {
        $this->load->model('payments/mdl_payments');

        if ($from_date == '' &&  $to_date == '') {
            $from_date = ($from_date);
            $to_date = ($to_date);

            $this->mdl_payments->where('payment_date >=', $from_date);
            $this->mdl_payments->where('payment_date <=', $to_date);
        }

        return $this->mdl_payments->get()->result();
    }

    /**
     * @return mixed
     */

    // ------------------------------------ Invoice aging -----------------------------------------

    public function invo_aging()
    {
         $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_balance AS invo_balance, ip_invoice_amounts.invoice_total AS total_billed,ip_invoice_amounts.invoice_paid AS total_paid, ip_clients.client_name, ip_invoices.invoice_number, ip_invoices.invoice_status_id AS status, ip_invoices.invoice_date_created AS invoice_date, ip_invoices.invoice_date_due AS due_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE ip_invoice_amounts.invoice_balance > 0
            ORDER By ip_invoices.invoice_date_created DESC
            ");
    $query = $query->result_array();
    return $query;
    }

    // ------------------------------------ Tax summary -----------------------------------------

    public function tax_summary_month()
    {
         $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax, ip_invoice_amounts.invoice_total AS total_billed, ip_clients.client_name, ip_clients.client_state, ip_invoices.invoice_number, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE year(invoice_date_created)=year(now()) AND month(invoice_date_created)=month(now())
            ORDER By ip_invoices.invoice_date_created DESC
            ");
    $query = $query->result_array();
    return $query;
    }

     public function tax_summary_year()
    {
         $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax, ip_invoice_amounts.invoice_total AS total_billed, ip_clients.client_name, ip_clients.client_state, ip_invoices.invoice_number, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE year(invoice_date_created)=year(now())
            ORDER By ip_invoices.invoice_date_created DESC
            ");
    $query = $query->result_array();
    return $query;
    }

 public function user_state($user_id)
    {
         $query = $this->db->query(" SELECT user_state
            FROM ip_users
            WHERE user_id = $user_id
            ");
    $query = $query->result_array();
    return $query;
    }

     public function tax_summary($from_date = null, $to_date = null)
{
     if ($from_date != '' &&  $to_date != '') {

            $from_date = date_to_mysql($from_date);
            $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax, ip_invoice_amounts.invoice_total AS total_billed, ip_clients.client_name, ip_clients.client_state, ip_invoices.invoice_number, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ORDER By ip_invoices.invoice_date_created DESC
            ");
         }
        $query = $query->result_array();
        return $query;
}

     public function financial_tax_summary($from_date = null, $to_date = null)
{
     if ($from_date != '' &&  $to_date != '') {

            // $from_date = date_to_mysql($from_date);
            // $to_date = date_to_mysql($to_date);

     $query = $this->db->query(" SELECT ip_invoice_amounts.invoice_tax_total AS total_tax, ip_invoice_amounts.invoice_total AS total_billed, ip_clients.client_name, ip_clients.client_state, ip_invoices.invoice_number, ip_invoices.invoice_date_created AS invoice_date
            FROM ip_invoice_amounts
            Inner join ip_invoices ON ip_invoices.invoice_id = ip_invoice_amounts.invoice_id
            Inner join ip_clients ON ip_invoices.client_id = ip_clients.client_id
            WHERE invoice_date_created >= " . $this->db->escape($from_date) . "
            AND invoice_date_created <= " . $this->db->escape($to_date) . "
            ORDER By ip_invoices.invoice_date_created DESC
            ");
         }
        $query = $query->result_array();
        return $query;
}


}
