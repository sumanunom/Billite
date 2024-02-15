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
 * Class Mdl_Clients
 */
class Mdl_Clients extends Response_Model
{
    public $table = 'ip_clients';
    public $primary_key = 'ip_clients.client_id';
    public $date_created_field = 'client_date_created';
    public $date_modified_field = 'client_date_modified';

    public function default_select()
    {
        $this->db->select(
            'SQL_CALC_FOUND_ROWS ' . $this->table . '.*, ' .
            'CONCAT(' . $this->table . '.client_name, " ", ' . $this->table . '.client_surname) as client_fullname'
            , false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_clients.client_name');
    }

    public function validation_rules()
    {
        return array(
            'client_name' => array(
                'field' => 'client_name',
                'label' => trans('client_name'),
                'rules' => 'required'
            ),
            'client_surname' => array(
                'field' => 'client_surname',
                'label' => trans('client_surname')
            ),
            'client_active' => array(
                'field' => 'client_active'
            ),
            'client_language' => array(
                'field' => 'client_language',
                'label' => trans('language'),
            ),
            'client_address_1' => array(
                'field' => 'client_address_1'
            ),
            'client_address_2' => array(
                'field' => 'client_address_2'
            ),
            'client_city' => array(
                'field' => 'client_city'
            ),
            'client_state' => array(
                'field' => 'client_state'
            ),
            'client_zip' => array(
                'field' => 'client_zip'
            ),
            'client_country' => array(
                'field' => 'client_country'
            ),
            'client_phone' => array(
                'field' => 'client_phone'
            ),
            'client_fax' => array(
                'field' => 'client_fax'
            ),
            'client_mobile' => array(
                'field' => 'client_mobile'
            ),
            'client_email' => array(
                'field' => 'client_email'
            ),
            'client_web' => array(
                'field' => 'client_web'
            ),
            'client_vat_id' => array(
                'field' => 'client_vat_id'
            ),
            'client_tax_code' => array(
                'field' => 'client_tax_code'
            ),

             'currency' => array(
                'field' => 'currency',
            ),

            'client_gender' => array(
                'field' => 'client_gender'
            ),
        );
    }

    /**
     * @param int $amount
     * @return mixed
     */
    function get_latest($amount = 10)
    {
        return $this->mdl_clients
            ->where('client_active', 1)
            ->order_by('client_id', 'DESC')
            ->limit($amount)
            ->get()
            ->result();
    }

    /**
     * @param $input
     * @return string
     */
    function fix_avs($input)
    {
        if ($input != "") {
            if (preg_match('/(\d{3})\.(\d{4})\.(\d{4})\.(\d{2})/', $input, $matches)) {
                return $matches[1] . $matches[2] . $matches[3] . $matches[4];
            } else if (preg_match('/^\d{13}$/', $input)) {
                return $input;
            }
        }

        return "";
    }

    function convert_date($input)
    {
        $this->load->helper('date_helper');

        if ($input == '') {
            return '';
        }

        return date_to_mysql($input);
    }

    public function db_array()
    {
        $db_array = parent::db_array();

        if (!isset($db_array['client_active'])) {
            $db_array['client_active'] = 0;
        }

        return $db_array;
    }

    /**
     * @param int $id
     */
    public function delete($id)
    {
        parent::delete($id);

        $this->load->helper('orphan');
        delete_orphans();
    }

    /**
     * Returns client_id of existing client
     *
     * @param $client_name
     * @return int|null
     */
    public function client_lookup($client_name)
    {
        $client = $this->mdl_clients->where('client_name', $client_name)->get();

        if ($client->num_rows()) {
            $client_id = $client->row()->client_id;
        } else {
            $db_array = array(
                'client_name' => $client_name
            );

            $client_id = parent::save(null, $db_array);
        }

        return $client_id;
    }

    public function with_total()
    {
        $this->filter_select('IFnull((SELECT SUM(invoice_total) FROM ip_invoice_amounts WHERE invoice_id IN (SELECT invoice_id FROM ip_invoices WHERE ip_invoices.client_id = ip_clients.client_id)), 0) AS client_invoice_total', false);
        return $this;
    }

    public function with_total_paid()
    {
        $this->filter_select('IFnull((SELECT SUM(invoice_paid) FROM ip_invoice_amounts WHERE invoice_id IN (SELECT invoice_id FROM ip_invoices WHERE ip_invoices.client_id = ip_clients.client_id)), 0) AS client_invoice_paid', false);
        return $this;
    }

    public function with_total_balance()
    {
        $this->filter_select('IFnull((SELECT SUM(invoice_balance) FROM ip_invoice_amounts WHERE invoice_id IN (SELECT invoice_id FROM ip_invoices WHERE ip_invoices.client_id = ip_clients.client_id)), 0) AS client_invoice_balance', false);
        return $this;
    }

public function client_billing_paid($current_year, $next_year, $client_id)
{
    $query = $this->db->query("SELECT SUM(invoice_paid) AS total_paid, MONTHNAME(invoice_date_created) AS month
    FROM ip_invoice_amounts 
    INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id 
    INNER JOIN ip_clients ON ip_invoices.client_id = ip_clients.client_id 
    WHERE invoice_date_created BETWEEN '$current_year' AND '$next_year' AND (ip_invoice_amounts.invoice_id = ip_invoices.invoice_id ) AND 
    (ip_invoices.invoice_status_id > 1) AND (ip_clients.client_id = $client_id)
    group by year(invoice_date_created),month(invoice_date_created)
    order by year(invoice_date_created),month(invoice_date_created);
    ");
    $query = $query->result_array();
    return $query;
}

public function client_billing($current_year, $next_year, $client_id)
{
    $query = $this->db->query("SELECT SUM(invoice_total) AS all_total, MONTHNAME(invoice_date_created) AS month
    FROM ip_invoice_amounts 
    INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id 
    INNER JOIN ip_clients ON ip_invoices.client_id = ip_clients.client_id 
    WHERE invoice_date_created BETWEEN '$current_year' AND '$next_year' AND (ip_invoices.invoice_status_id > 1) AND (ip_clients.client_id = $client_id)
    group by year(invoice_date_created),month(invoice_date_created)
    order by year(invoice_date_created),month(invoice_date_created);
    ");
    $query = $query->result_array();
    return $query;
}

    public function no_of_invoice($client_id)
    {
        $this->db->select(' COUNT(B.client_id) AS Numofinvoice');
        $this->db->from('ip_clients As A');
        $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
        $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
        $array = array('A.client_id' => $client_id , 'B.invoice_status_id >' => 1);
        $this->db->where($array);   
        return  $this->db->get()->result();
    }

    public function is_inactive()
    {
        $this->filter_where('client_active', 0);
        return $this;
    }

    public function is_unpaid()
    {
        $this->db->select('client_id');
        $this->db->get('ip_clients');

        $this->db->join('ip_invoices AS C', 'ip_clients.client_id = C.client_id', 'INNER');
        $this->db->join('ip_invoice_amounts AS B', 'B.invoice_id = C.invoice_id', 'INNER');

        $query = $this->db->where('B.invoice_balance>',0);
        return $query;
    }
    
    /**
     * @param $user_id
     * @return $this
     */
    public function get_not_assigned_to_user($user_id)
    {
        $this->load->model('user_clients/mdl_user_clients');
        $clients = $this->mdl_user_clients->select('ip_user_clients.client_id')
            ->assigned_to($user_id)->get()->result();

        $assigned_clients = [];
        foreach ($clients as $client) {
            $assigned_clients[] = $client->client_id;
        }

        if (count($assigned_clients) > 0) {
            $this->where_not_in('ip_clients.client_id', $assigned_clients);
        }

        $this->is_active();
        return $this->get()->result();
    }

    public function is_active()
    {
        $this->filter_where('client_active', 1);
        return $this;
    }

}
