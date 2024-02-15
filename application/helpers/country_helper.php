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
 * Returns an array list of cldr => country, translated in the language $cldr.
 * If there is no translated country list, return the english one.
 *
 * @param $cldr
 * @return mixed
 */
function get_country_list($cldr)
{
    if (file_exists(APPPATH . 'helpers/country-list/' . $cldr . '/country.php')) {
        return (include APPPATH . 'helpers/country-list/' . $cldr . '/country.php');
    } else {
        return (include APPPATH . 'helpers/country-list/en/country.php');
    }
}

/**
 * Returns the countryname of a given $countrycode, translated in the language $cldr.
 *
 * @param $cldr
 * @param $countrycode
 * @return mixed
 */
function get_country_name($cldr, $countrycode)
{
    $countries = get_country_list($cldr);
    return (isset($countries[$countrycode]) ? $countries[$countrycode] : $countrycode);
}
