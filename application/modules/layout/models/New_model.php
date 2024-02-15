<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class New_model extends CI_Model{

   public function __construct()
    {
        parent::__construct();
    } 

   
public function get_client_name(){
    $this->db->select('*');
    $this->db->from('ip_clients');
    return $this->db->get()->result();
}

public function get_invoice_num(){
    $this->db->select('*');
    $this->db->from('ip_invoices');
    return $this->db->get()->result();
}

public function get_quote_num(){
    $this->db->select('*');
    $this->db->from('ip_quotes');
    return $this->db->get()->result();
}

    public function modes()
{
    $query = $this->db->query(" SELECT setting_value FROM ip_settings WHERE setting_key = 'site_mode' ");
    $query = $query->result_array();
    return $query;
}

}