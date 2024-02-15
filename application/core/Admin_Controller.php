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
 * Class Admin_Controller
 */
class Admin_Controller extends User_Controller
{

    /**
     * Admin_Controller constructor.
     */
    public function __construct()
    {
        parent::__construct('user_type', 1);
    }
}
