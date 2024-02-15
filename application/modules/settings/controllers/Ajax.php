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
 * Class Ajax
 */
class Ajax extends Admin_Controller
{
    public $ajax_controller = true;

    /**
     *
     */
    public function get_cron_key()
    {
        $this->load->helper('string');
        echo random_string('alnum', 16);
    }

    public function modal_settings()
    {
        $this->load->module('layout');

        $this->layout->load_view('settings/modal_settings');
    }

}
