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

    public function get_content()
    {
        $this->load->model('email_templates/mdl_email_templates');

        $id = $this->input->post('email_template_id');

        echo json_encode($this->mdl_email_templates->get_by_id($id));
    }

}
