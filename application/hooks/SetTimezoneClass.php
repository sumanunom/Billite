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
 * Class SetTimezoneClass
 */
class  SetTimezoneClass
{
    /**
     * Set UTC as the current timezone if no one was set in the PHP ini
     */
    public function setTimezone()
    {
        if (!ini_get('date.timezone')) {
            date_default_timezone_set('UTC');
        }
    }
}
