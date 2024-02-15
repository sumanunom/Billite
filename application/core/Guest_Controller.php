<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * Billite
 *
 * @author		Axiom Consulting
 * @copyright	Copyright (c) 2022 Billite.in
 * @license		https://billite.in/license.txt
 * @link		https://billite.in
 */

/**
 * Class Guest_Controller
 */
class Guest_Controller extends User_Controller
{

    /** @var array */
    public $user_clients = [];

    /**
     * Guest_Controller constructor.
     */
    public function __construct()
    {
        parent::__construct('user_type', 2);

        $this->load->model('user_clients/mdl_user_clients');

        $user_clients = $this->mdl_user_clients->assigned_to($this->session->userdata('user_id'))->get()->result();

        if (!$user_clients) {
            show_error(trans('guest_account_denied'), 403);
            exit;
        }

        foreach ($user_clients as $user_client) {
            $this->user_clients[$user_client->client_id] = $user_client->client_id;
        }
    }

}
