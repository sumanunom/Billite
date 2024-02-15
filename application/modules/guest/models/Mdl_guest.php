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
class Mdl_guest extends Response_Model
{
    public $table = 'ip_user_clients';
    public $primary_key = 'ip_user_clients.user_client_id';

    public function guest_user()
    {
        $user_id = $this->session->userdata('user_id');

        $this->db->select(' A.*');
        $this->db->from('ip_clients As A');
        $this->db->join('ip_user_clients AS B', 'A.client_id = B.client_id');
        $this->db->join('ip_users AS C', 'B.user_id = C.user_id');
        $this->db->where('C.user_id',$user_id);   
        return  $this->db->get()->result();
    }

}
