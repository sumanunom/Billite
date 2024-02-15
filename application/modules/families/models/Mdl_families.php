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
 * Class Mdl_Families
 */
class Mdl_Families extends Response_Model
{
    public $table = 'ip_families';
    public $primary_key = 'ip_families.family_id';

    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS *', false);
    }

    public function default_order_by()
    {
        $this->db->order_by('ip_families.family_name');
    }

    /**
     * @return array
     */
    public function validation_rules()
    {
        return array(
            'family_name' => array(
                'field' => 'family_name',
                'label' => trans('family_name'),
                'rules' => 'required'
            )
        );
    }

}
