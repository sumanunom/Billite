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
 * Class User_Controller
 */
class User_Controller extends Base_Controller
{

    /**
     * User_Controller constructor.
     *
     * @param string  $required_key
     * @param integer $required_val
     */
    public function __construct($required_key, $required_val)
    {
        parent::__construct();

        if ($this->session->userdata($required_key) != $required_val) {
            redirect('sessions/login');
        }
    }
}
