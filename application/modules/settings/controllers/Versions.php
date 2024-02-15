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
 * Class Versions
 */
class Versions extends Admin_Controller
{
    /**
     * Versions constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_versions');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        $this->mdl_versions->paginate(site_url('versions/index'), $page);
        $versions = $this->mdl_versions->result();

        $this->layout->set('versions', $versions);
        $this->layout->buffer('content', 'settings/versions');
        $this->layout->render();
    }

}
