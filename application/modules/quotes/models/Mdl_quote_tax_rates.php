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
 * Class Mdl_Quote_Tax_Rates
 */
class Mdl_Quote_Tax_Rates extends Response_Model
{
    public $table = 'ip_quote_tax_rates';
    public $primary_key = 'ip_quote_tax_rates.quote_tax_rate_id';

    public function default_select()
    {
        $this->db->select('ip_tax_rates.tax_rate_name AS quote_tax_rate_name');
        $this->db->select('ip_tax_rates.tax_rate_percent AS quote_tax_rate_percent');
        $this->db->select('ip_quote_tax_rates.*');
    }

    public function default_join()
    {
        $this->db->join('ip_tax_rates', 'ip_tax_rates.tax_rate_id = ip_quote_tax_rates.tax_rate_id');
    }

    /**
     * @param null $id
     * @param null $db_array
     * @return void
     */
    public function save($id = null, $db_array = null)
    {
        
         $this->db->select('*');
         $this->db->from('ip_quote_tax_rates');
         $this->db->where('quote_id', $this->input->post('quote_id'));
         $query =$this->db->get()->result();
         
         if($query)
         {
            foreach($query as $q)
            {
                $id = $q->quote_tax_rate_id;
            }
         }
         
        parent::save($id, $db_array);

        $this->load->model('quotes/mdl_quote_amounts');

        $quote_id = $this->input->post('quote_id');

        if ($quote_id) {
            $this->mdl_quote_amounts->calculate($quote_id);
        }
    }

    public function item_tax_rate($quote_id)
    {
       $query = $this->db->query("SELECT *
                FROM ip_tax_rates AS A
                INNER JOIN ip_quote_items AS B ON B.item_tax_rate_id = A.tax_rate_id
                WHERE B.quote_id = $quote_id");
                $query = $query->result();
                return $query;

    }
    
    /**
     * @return array
     * @return void
     */
    public function validation_rules()
    {
        return array(
            'quote_id' => array(
                'field' => 'quote_id',
                'label' => trans('quote'),
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
