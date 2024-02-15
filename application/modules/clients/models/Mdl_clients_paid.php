<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_Clients_paid extends CI_Model{

   public function __construct()
    {
        parent::__construct();
        
    } 

    public function invoice_total()
    {
    $this->db->select('SUM(A.invoice_total) AS total, C.client_id AS c_id');
    $this->db->from('ip_invoice_amounts AS A');
    $this->db->join('ip_invoices AS B', 'A.invoice_id = B.invoice_id');
    $this->db->join('ip_clients AS C', 'B.client_id = C.client_id ');
    $this->db->where('B.invoice_status_id >', 1 );  
    $this->db->group_by('C.client_id');
    return  $this->db->get()->result();
    }
}