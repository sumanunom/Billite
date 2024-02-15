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
 * Class Mdl_Families
 */
class New_model extends Response_Model
{
    public $table = 'todo';
    public $primary_key = 'todo.id';

    public function default_select()
    {
        $this->db->select('SQL_CALC_FOUND_ROWS *', false);
    }

    public function default_order_by()
    {
        $this->db->order_by('todo.id');
    }

    /**
     * @return array
     */
    // public function validation_rules()
    // {
    //     return array(
    //         'family_name' => array(
    //             'field' => 'family_name',
    //             'label' => trans('family_name'),
    //             'rules' => 'required'
    //         )
    //     );
    // }

}
