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
 * Class Mdl_Payment_Methods
 */
class Mdl_Payment_Methods extends Response_Model
{
    public $table = 'ip_payment_methods';
    public $primary_key = 'ip_payment_methods.payment_method_id';

    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS *', false);
    }

    public function order_by()
    {
        $this->db->order_by('ip_payment_methods.payment_method_name');
    }

    /**
     * @return array
     */
    public function validation_rules()
    {
        return array(
            'payment_method_name' => array(
                'field' => 'payment_method_name',
                'label' => trans('payment_method'),
                'rules' => 'required'
            )
        );
    }

}
