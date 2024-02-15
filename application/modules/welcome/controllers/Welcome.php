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
 * Class Welcome
 */
class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');

        $this->load->view('welcome');
    }
}
