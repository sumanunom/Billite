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
 * Class Mdl_Invoice_Tax_Rates
 */
class Mdl_Invoice_Tax_Rates extends Response_Model
{
    public $table = 'ip_invoice_tax_rates';
    public $primary_key = 'ip_invoice_tax_rates.invoice_tax_rate_id';

    public function default_select()
    {
        $this->db->select('ip_tax_rates.tax_rate_name AS invoice_tax_rate_name');
        $this->db->select('ip_tax_rates.tax_rate_percent AS invoice_tax_rate_percent');
        $this->db->select('ip_invoice_tax_rates.*');
    }

    public function default_join()
    {
        $this->db->join('ip_tax_rates', 'ip_tax_rates.tax_rate_id = ip_invoice_tax_rates.tax_rate_id');
    }

    /**
     * @param null $id
     * @param null $db_array
     * @return void
     */
    public function save($id = null, $db_array = null)
    {

         $this->db->select('*');
         $this->db->from('ip_invoice_tax_rates');
         $this->db->where('invoice_id', $this->input->post('invoice_id'));
         $query =$this->db->get()->result();
         
         if($query)
         {
            foreach($query as $q)
            {
                $id = $q->invoice_tax_rate_id;
            }
         }
        
        parent::save($id, $db_array);

        $this->load->model('invoices/mdl_invoice_amounts');

        if (isset($db_array['invoice_id'])) {
            $invoice_id = $db_array['invoice_id'];
        } else {
            $invoice_id = $this->input->post('invoice_id');
        }

        if ($invoice_id) {
            $this->mdl_invoice_amounts->calculate_invoice_taxes($invoice_id);
            $this->mdl_invoice_amounts->calculate($invoice_id);
        }

    }
        
    public function item_tax_rate($invoice_id)
    {
       $query = $this->db->query("SELECT *
                FROM ip_tax_rates AS A
                INNER JOIN ip_invoice_items AS B ON B.item_tax_rate_id = A.tax_rate_id
                WHERE B.invoice_id = $invoice_id");
                $query = $query->result();
                return $query;

    }

    /**
     * @return array
     */
    public function validation_rules()
    {
        return array(
            'invoice_id' => array(
                'field' => 'invoice_id',
                'label' => trans('invoice'),
                'rules' => 'required'
            ),
            'tax_rate_id' => array(
                'field' => 'tax_rate_id',
                'label' => trans('tax_rate'),
                'rules' => 'required'
            ),
            'include_item_tax' => array(
                'field' => 'include_item_tax',
                'label' => trans('tax_rate_placement'),
                'rules' => 'required'
            )
        );
    }

}
