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
 * @param string $str
 * @return bool
 */
function diacritics_seems_utf8($str)
{
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $c = ord($str[$i]);
        if ($c < 0x80) {
            $n = 0;
        } # 0bbbbbbb
        elseif (($c & 0xE0) == 0xC0) {
            $n = 1;
        } # 110bbbbb
        elseif (($c & 0xF0) == 0xE0) {
            $n = 2;
        } # 1110bbbb
        elseif (($c & 0xF8) == 0xF0) {
            $n = 3;
        } # 11110bbb
        elseif (($c & 0xFC) == 0xF8) {
            $n = 4;
        } # 111110bb
        elseif (($c & 0xFE) == 0xFC) {
            $n = 5;
        } # 1111110b
        else {
            return false;
        }
        # Does not match any model
        for ($j = 0; $j < $n; $j++) { # n bytes matching 10bbbbbb follow ?
            if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80)) {
                return false;
            }
        }
    }
    return true;
}

/**
 * Converts all accent characters to ASCII characters.
 *
 * If there are no accent characters, then the string given is just returned.
 *
 * @param string $string Text that might have accent characters
 * @return string Filtered string with replaced "nice" characters.
 */
function diacritics_remove_accents($string)
{
    if (!preg_match('/[\x80-\xff]/', $string)) {
        return $string;
    }

    if (diacritics_seems_utf8($string)) {
        $chars = array(
            // Decompositions for Latin-1 Supplement
            chr(195) . chr(128) => 'A', chr(195) . chr(129) => 'A',
            chr(195) . chr(130) => 'A', chr(195) . chr(131) => 'A',
            chr(195) . chr(132) => 'A', chr(195) . chr(133) => 'A',
            chr(195) . chr(135) => 'C', chr(195) . chr(136) => 'E',
            chr(195) . chr(137) => 'E', chr(195) . chr(138) => 'E',
            chr(195) . chr(139) => 'E', chr(195) . chr(140) => 'I',
            chr(195) . chr(141) => 'I', chr(195) . chr(142) => 'I',
            chr(195) . chr(143) => 'I', chr(195) . chr(145) => 'N',
            chr(195) . chr(146) => 'O', chr(195) . chr(147) => 'O',
            chr(195) . chr(148) => 'O', chr(195) . chr(149) => 'O',
            chr(195) . chr(150) => 'O', chr(195) . chr(153) => 'U',
            chr(195) . chr(154) => 'U', chr(195) . chr(155) => 'U',
            chr(195) . chr(156) => 'U', chr(195) . chr(157) => 'Y',
            chr(195) . chr(159) => 's', chr(195) . chr(160) => 'a',
            chr(195) . chr(161) => 'a', chr(195) . chr(162) => 'a',
            chr(195) . chr(163) => 'a', chr(195) . chr(164) => 'a',
            chr(195) . chr(165) => 'a', chr(195) . chr(167) => 'c',
            chr(195) . chr(168) => 'e', chr(195) . chr(169) => 'e',
            chr(195) . chr(170) => 'e', chr(195) . chr(171) => 'e',
            chr(195) . chr(172) => 'i', chr(195) . chr(173) => 'i',
            chr(195) . chr(174) => 'i', chr(195) . chr(175) => 'i',
            chr(195) . chr(177) => 'n', chr(195) . chr(178) => 'o',
            chr(195) . chr(179) => 'o', chr(195) . chr(180) => 'o',
            chr(195) . chr(181) => 'o', chr(195) . chr(182) => 'o',
            chr(195) . chr(182) => 'o', chr(195) . chr(185) => 'u',
            chr(195) . chr(186) => 'u', chr(195) . chr(187) => 'u',
            chr(195) . chr(188) => 'u', chr(195) . chr(189) => 'y',
            chr(195) . chr(191) => 'y',
            // Decompositions for Latin Extended-A
            chr(196) . chr(128) => 'A', chr(196) . chr(129) => 'a',
            chr(196) . chr(130) => 'A', chr(196) . chr(131) => 'a',
            chr(196) . chr(132) => 'A', chr(196) . chr(133) => 'a',
            chr(196) . chr(134) => 'C', chr(196) . chr(135) => 'c',
            chr(196) . chr(136) => 'C', chr(196) . chr(137) => 'c',
            chr(196) . chr(138) => 'C', chr(196) . chr(139) => 'c',
            chr(196) . chr(140) => 'C', chr(196) . chr(141) => 'c',
            chr(196) . chr(142) => 'D', chr(196) . chr(143) => 'd',
            chr(196) . chr(144) => 'D', chr(196) . chr(145) => 'd',
            chr(196) . chr(146) => 'E', chr(196) . chr(147) => 'e',
            chr(196) . chr(148) => 'E', chr(196) . chr(149) => 'e',
            chr(196) . chr(150) => 'E', chr(196) . chr(151) => 'e',
            chr(196) . chr(152) => 'E', chr(196) . chr(153) => 'e',
            chr(196) . chr(154) => 'E', chr(196) . chr(155) => 'e',
            chr(196) . chr(156) => 'G', chr(196) . chr(157) => 'g',
            chr(196) . chr(158) => 'G', chr(196) . chr(159) => 'g',
            chr(196) . chr(160) => 'G', chr(196) . chr(161) => 'g',
            chr(196) . chr(162) => 'G', chr(196) . chr(163) => 'g',
            chr(196) . chr(164) => 'H', chr(196) . chr(165) => 'h',
            chr(196) . chr(166) => 'H', chr(196) . chr(167) => 'h',
            chr(196) . chr(168) => 'I', chr(196) . chr(169) => 'i',
            chr(196) . chr(170) => 'I', chr(196) . chr(171) => 'i',
            chr(196) . chr(172) => 'I', chr(196) . chr(173) => 'i',
            chr(196) . chr(174) => 'I', chr(196) . chr(175) => 'i',
            chr(196) . chr(176) => 'I', chr(196) . chr(177) => 'i',
            chr(196) . chr(178) => 'IJ', chr(196) . chr(179) => 'ij',
            chr(196) . chr(180) => 'J', chr(196) . chr(181) => 'j',
            chr(196) . chr(182) => 'K', chr(196) . chr(183) => 'k',
            chr(196) . chr(184) => 'k', chr(196) . chr(185) => 'L',
            chr(196) . chr(186) => 'l', chr(196) . chr(187) => 'L',
            chr(196) . chr(188) => 'l', chr(196) . chr(189) => 'L',
            chr(196) . chr(190) => 'l', chr(196) . chr(191) => 'L',
            chr(197) . chr(128) => 'l', chr(197) . chr(129) => 'L',
            chr(197) . chr(130) => 'l', chr(197) . chr(131) => 'N',
            chr(197) . chr(132) => 'n', chr(197) . chr(133) => 'N',
            chr(197) . chr(134) => 'n', chr(197) . chr(135) => 'N',
            chr(197) . chr(136) => 'n', chr(197) . chr(137) => 'N',
            chr(197) . chr(138) => 'n', chr(197) . chr(139) => 'N',
            chr(197) . chr(140) => 'O', chr(197) . chr(141) => 'o',
            chr(197) . chr(142) => 'O', chr(197) . chr(143) => 'o',
            chr(197) . chr(144) => 'O', chr(197) . chr(145) => 'o',
            chr(197) . chr(146) => 'OE', chr(197) . chr(147) => 'oe',
            chr(197) . chr(148) => 'R', chr(197) . chr(149) => 'r',
            chr(197) . chr(150) => 'R', chr(197) . chr(151) => 'r',
            chr(197) . chr(152) => 'R', chr(197) . chr(153) => 'r',
            chr(197) . chr(154) => 'S', chr(197) . chr(155) => 's',
            chr(197) . chr(156) => 'S', chr(197) . chr(157) => 's',
            chr(197) . chr(158) => 'S', chr(197) . chr(159) => 's',
            chr(197) . chr(160) => 'S', chr(197) . chr(161) => 's',
            chr(197) . chr(162) => 'T', chr(197) . chr(163) => 't',
            chr(197) . chr(164) => 'T', chr(197) . chr(165) => 't',
            chr(197) . chr(166) => 'T', chr(197) . chr(167) => 't',
            chr(197) . chr(168) => 'U', chr(197) . chr(169) => 'u',
            chr(197) . chr(170) => 'U', chr(197) . chr(171) => 'u',
            chr(197) . chr(172) => 'U', chr(197) . chr(173) => 'u',
            chr(197) . chr(174) => 'U', chr(197) . chr(175) => 'u',
            chr(197) . chr(176) => 'U', chr(197) . chr(177) => 'u',
            chr(197) . chr(178) => 'U', chr(197) . chr(179) => 'u',
            chr(197) . chr(180) => 'W', chr(197) . chr(181) => 'w',
            chr(197) . chr(182) => 'Y', chr(197) . chr(183) => 'y',
            chr(197) . chr(184) => 'Y', chr(197) . chr(185) => 'Z',
            chr(197) . chr(186) => 'z', chr(197) . chr(187) => 'Z',
            chr(197) . chr(188) => 'z', chr(197) . chr(189) => 'Z',
            chr(197) . chr(190) => 'z', chr(197) . chr(191) => 's',
            // Euro Sign
            chr(226) . chr(130) . chr(172) => 'E',
            // GBP (Pound) Sign
            chr(194) . chr(163) => '');

        $string = strtr($string, $chars);
    } else {
        // Assume ISO-8859-1 if not UTF-8
        $chars['in'] = chr(128) . chr(131) . chr(138) . chr(142) . chr(154) . chr(158)
            . chr(159) . chr(162) . chr(165) . chr(181) . chr(192) . chr(193) . chr(194)
            . chr(195) . chr(196) . chr(197) . chr(199) . chr(200) . chr(201) . chr(202)
            . chr(203) . chr(204) . chr(205) . chr(206) . chr(207) . chr(209) . chr(210)
            . chr(211) . chr(212) . chr(213) . chr(214) . chr(216) . chr(217) . chr(218)
            . chr(219) . chr(220) . chr(221) . chr(224) . chr(225) . chr(226) . chr(227)
            . chr(228) . chr(229) . chr(231) . chr(232) . chr(233) . chr(234) . chr(235)
            . chr(236) . chr(237) . chr(238) . chr(239) . chr(241) . chr(242) . chr(243)
            . chr(244) . chr(245) . chr(246) . chr(248) . chr(249) . chr(250) . chr(251)
            . chr(252) . chr(253) . chr(255);

        $chars['out'] = 'EfSZszYcYuAAAAAACEEEEIIIINOOOOOOUUUUYaaaaaaceeeeiiiinoooooouuuuyy';

        $string = strtr($string, $chars['in'], $chars['out']);
        $double_chars['in'] = array(chr(140), chr(156), chr(198), chr(208), chr(222), chr(223), chr(230), chr(240), chr(254));
        $double_chars['out'] = array('OE', 'oe', 'AE', 'DH', 'TH', 'ss', 'ae', 'dh', 'th');
        $string = str_replace($double_chars['in'], $double_chars['out'], $string);
    }

    return $string;
}

/**
 * @param string $text
 * @return string
 */
function diacritics_remove_diacritics($text)
{
    $trans = array(
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Ç' => 'C', 'È' => 'E',
        'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N',
        'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U',
        'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a',
        'å' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i',
        'î' => 'i', 'ï' => 'i', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
        'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ý' => 'y', 'ÿ' => 'y', 'Ā' => 'A',
        'ā' => 'a', 'Ă' => 'A', 'ă' => 'a', 'Ą' => 'A', 'ą' => 'a', 'Ć' => 'C', 'ć' => 'c', 'Ĉ' => 'C',
        'ĉ' => 'c', 'Ċ' => 'C', 'ċ' => 'c', 'Č' => 'C', 'č' => 'c', 'Ď' => 'D', 'ď' => 'd', 'Đ' => 'D',
        'đ' => 'd', 'Ē' => 'E', 'ē' => 'e', 'Ĕ' => 'E', 'ĕ' => 'e', 'Ė' => 'E', 'ė' => 'e', 'Ę' => 'E',
        'ę' => 'e', 'Ě' => 'E', 'ě' => 'e', 'Ĝ' => 'G', 'ĝ' => 'g', 'Ğ' => 'G', 'ğ' => 'g', 'Ġ' => 'G',
        'ġ' => 'g', 'Ģ' => 'G', 'ģ' => 'g', 'Ĥ' => 'H', 'ĥ' => 'h', 'Ħ' => 'H', 'ħ' => 'h', 'Ĩ' => 'I',
        'ĩ' => 'i', 'Ī' => 'I', 'ī' => 'i', 'Ĭ' => 'I', 'ĭ' => 'i', 'Į' => 'I', 'į' => 'i', 'İ' => 'I',
        'ı' => 'i', 'Ĵ' => 'J', 'ĵ' => 'j', 'Ķ' => 'K', 'ķ' => 'k', 'Ĺ' => 'L', 'ĺ' => 'l', 'Ļ' => 'L',
        'ļ' => 'l', 'Ľ' => 'L', 'ľ' => 'l', 'Ŀ' => 'L', 'ŀ' => 'l', 'Ł' => 'L', 'ł' => 'l', 'Ń' => 'N',
        'ń' => 'n', 'Ņ' => 'N', 'ņ' => 'n', 'Ň' => 'N', 'ň' => 'n', 'ŉ' => 'n', 'Ō' => 'O', 'ō' => 'o',
        'Ŏ' => 'O', 'ŏ' => 'o', 'Ő' => 'O', 'ő' => 'o', 'Ŕ' => 'R', 'ŕ' => 'r', 'Ŗ' => 'R', 'ŗ' => 'r',
        'Ř' => 'R', 'ř' => 'r', 'Ś' => 'S', 'ś' => 's', 'Ŝ' => 'S', 'ŝ' => 's', 'Ş' => 'S', 'ş' => 's',
        'Š' => 'S', 'š' => 's', 'Ţ' => 'T', 'ţ' => 't', 'Ť' => 'T', 'ť' => 't', 'Ŧ' => 'T', 'ŧ' => 't',
        'Ũ' => 'U', 'ũ' => 'u', 'Ū' => 'U', 'ū' => 'u', 'Ŭ' => 'U', 'ŭ' => 'u', 'Ů' => 'U', 'ů' => 'u',
        'Ű' => 'U', 'ű' => 'u', 'Ų' => 'U', 'ų' => 'u', 'Ŵ' => 'W', 'ŵ' => 'w', 'Ŷ' => 'Y', 'ŷ' => 'y',
        'Ÿ' => 'Y', 'Ź' => 'Z', 'ź' => 'z', 'Ż' => 'Z', 'ż' => 'z', 'Ž' => 'Z', 'ž' => 'z', 'ƀ' => 'b',
        'Ɓ' => 'B', 'Ƃ' => 'B', 'ƃ' => 'b', 'Ƈ' => 'C', 'ƈ' => 'c', 'Ɗ' => 'D', 'Ƌ' => 'D', 'ƌ' => 'd',
        'Ƒ' => 'F', 'ƒ' => 'f', 'Ɠ' => 'G', 'Ɨ' => 'I', 'Ƙ' => 'K', 'ƙ' => 'k', 'ƚ' => 'l', 'Ɲ' => 'N',
        'ƞ' => 'n', 'Ɵ' => 'O', 'Ơ' => 'O', 'ơ' => 'o', 'Ƥ' => 'P', 'ƥ' => 'p', 'ƫ' => 't', 'Ƭ' => 'T',
        'ƭ' => 't', 'Ʈ' => 'T', 'Ư' => 'U', 'ư' => 'u', 'Ʋ' => 'V', 'Ƴ' => 'Y', 'ƴ' => 'y', 'Ƶ' => 'Z',
        'ƶ' => 'z', 'ǅ' => 'D', 'ǈ' => 'L', 'ǋ' => 'N', 'Ǎ' => 'A', 'ǎ' => 'a', 'Ǐ' => 'I', 'ǐ' => 'i',
        'Ǒ' => 'O', 'ǒ' => 'o', 'Ǔ' => 'U', 'ǔ' => 'u', 'Ǖ' => 'U', 'ǖ' => 'u', 'Ǘ' => 'U', 'ǘ' => 'u',
        'Ǚ' => 'U', 'ǚ' => 'u', 'Ǜ' => 'U', 'ǜ' => 'u', 'Ǟ' => 'A', 'ǟ' => 'a', 'Ǡ' => 'A', 'ǡ' => 'a',
        'Ǥ' => 'G', 'ǥ' => 'g', 'Ǧ' => 'G', 'ǧ' => 'g', 'Ǩ' => 'K', 'ǩ' => 'k', 'Ǫ' => 'O', 'ǫ' => 'o',
        'Ǭ' => 'O', 'ǭ' => 'o', 'ǰ' => 'j', 'ǲ' => 'D', 'Ǵ' => 'G', 'ǵ' => 'g', 'Ǹ' => 'N', 'ǹ' => 'n',
        'Ǻ' => 'A', 'ǻ' => 'a', 'Ǿ' => 'O', 'ǿ' => 'o', 'Ȁ' => 'A', 'ȁ' => 'a', 'Ȃ' => 'A', 'ȃ' => 'a',
        'Ȅ' => 'E', 'ȅ' => 'e', 'Ȇ' => 'E', 'ȇ' => 'e', 'Ȉ' => 'I', 'ȉ' => 'i', 'Ȋ' => 'I', 'ȋ' => 'i',
        'Ȍ' => 'O', 'ȍ' => 'o', 'Ȏ' => 'O', 'ȏ' => 'o', 'Ȑ' => 'R', 'ȑ' => 'r', 'Ȓ' => 'R', 'ȓ' => 'r',
        'Ȕ' => 'U', 'ȕ' => 'u', 'Ȗ' => 'U', 'ȗ' => 'u', 'Ș' => 'S', 'ș' => 's', 'Ț' => 'T', 'ț' => 't',
        'Ȟ' => 'H', 'ȟ' => 'h', 'Ƞ' => 'N', 'ȡ' => 'd', 'Ȥ' => 'Z', 'ȥ' => 'z', 'Ȧ' => 'A', 'ȧ' => 'a',
        'Ȩ' => 'E', 'ȩ' => 'e', 'Ȫ' => 'O', 'ȫ' => 'o', 'Ȭ' => 'O', 'ȭ' => 'o', 'Ȯ' => 'O', 'ȯ' => 'o',
        'Ȱ' => 'O', 'ȱ' => 'o', 'Ȳ' => 'Y', 'ȳ' => 'y', 'ȴ' => 'l', 'ȵ' => 'n', 'ȶ' => 't', 'ȷ' => 'j',
        'Ⱥ' => 'A', 'Ȼ' => 'C', 'ȼ' => 'c', 'Ƚ' => 'L', 'Ⱦ' => 'T', 'ȿ' => 's', 'ɀ' => 'z', 'Ƀ' => 'B',
        'Ʉ' => 'U', 'Ɇ' => 'E', 'ɇ' => 'e', 'Ɉ' => 'J', 'ɉ' => 'j', 'ɋ' => 'q', 'Ɍ' => 'R', 'ɍ' => 'r',
        'Ɏ' => 'Y', 'ɏ' => 'y', 'ɓ' => 'b', 'ɕ' => 'c', 'ɖ' => 'd', 'ɗ' => 'd', 'ɟ' => 'j', 'ɠ' => 'g',
        'ɦ' => 'h', 'ɨ' => 'i', 'ɫ' => 'l', 'ɬ' => 'l', 'ɭ' => 'l', 'ɱ' => 'm', 'ɲ' => 'n', 'ɳ' => 'n',
        'ɵ' => 'o', 'ɼ' => 'r', 'ɽ' => 'r', 'ɾ' => 'r', 'ʂ' => 's', 'ʄ' => 'j', 'ʈ' => 't', 'ʉ' => 'u',
        'ʋ' => 'v', 'ʐ' => 'z', 'ʑ' => 'z', 'ʝ' => 'j', 'ʠ' => 'q', 'ͣ' => 'a', 'ͤ' => 'e', 'ͥ' => 'i',
        'ͦ' => 'o', 'ͧ' => 'u', 'ͨ' => 'c', 'ͩ' => 'd', 'ͪ' => 'h', 'ͫ' => 'm', 'ͬ' => 'r', 'ͭ' => 't',
        'ͮ' => 'v', 'ͯ' => 'x', 'ᵢ' => 'i', 'ᵣ' => 'r', 'ᵤ' => 'u', 'ᵥ' => 'v', 'ᵬ' => 'b', 'ᵭ' => 'd',
        'ᵮ' => 'f', 'ᵯ' => 'm', 'ᵰ' => 'n', 'ᵱ' => 'p', 'ᵲ' => 'r', 'ᵳ' => 'r', 'ᵴ' => 's', 'ᵵ' => 't',
        'ᵶ' => 'z', 'ᵻ' => 'i', 'ᵽ' => 'p', 'ᵾ' => 'u', 'ᶀ' => 'b', 'ᶁ' => 'd', 'ᶂ' => 'f', 'ᶃ' => 'g',
        'ᶄ' => 'k', 'ᶅ' => 'l', 'ᶆ' => 'm', 'ᶇ' => 'n', 'ᶈ' => 'p', 'ᶉ' => 'r', 'ᶊ' => 's', 'ᶌ' => 'v',
        'ᶍ' => 'x', 'ᶎ' => 'z', 'ᶏ' => 'a', 'ᶑ' => 'd', 'ᶒ' => 'e', 'ᶖ' => 'i', 'ᶙ' => 'u', '᷊' => 'r',
        'ᷗ' => 'c', 'ᷚ' => 'g', 'ᷜ' => 'k', 'ᷝ' => 'l', 'ᷠ' => 'n', 'ᷣ' => 'r', 'ᷤ' => 's', 'ᷦ' => 'z',
        'Ḁ' => 'A', 'ḁ' => 'a', 'Ḃ' => 'B', 'ḃ' => 'b', 'Ḅ' => 'B', 'ḅ' => 'b', 'Ḇ' => 'B', 'ḇ' => 'b',
        'Ḉ' => 'C', 'ḉ' => 'c', 'Ḋ' => 'D', 'ḋ' => 'd', 'Ḍ' => 'D', 'ḍ' => 'd', 'Ḏ' => 'D', 'ḏ' => 'd',
        'Ḑ' => 'D', 'ḑ' => 'd', 'Ḓ' => 'D', 'ḓ' => 'd', 'Ḕ' => 'E', 'ḕ' => 'e', 'Ḗ' => 'E', 'ḗ' => 'e',
        'Ḙ' => 'E', 'ḙ' => 'e', 'Ḛ' => 'E', 'ḛ' => 'e', 'Ḝ' => 'E', 'ḝ' => 'e', 'Ḟ' => 'F', 'ḟ' => 'f',
        'Ḡ' => 'G', 'ḡ' => 'g', 'Ḣ' => 'H', 'ḣ' => 'h', 'Ḥ' => 'H', 'ḥ' => 'h', 'Ḧ' => 'H', 'ḧ' => 'h',
        'Ḩ' => 'H', 'ḩ' => 'h', 'Ḫ' => 'H', 'ḫ' => 'h', 'Ḭ' => 'I', 'ḭ' => 'i', 'Ḯ' => 'I', 'ḯ' => 'i',
        'Ḱ' => 'K', 'ḱ' => 'k', 'Ḳ' => 'K', 'ḳ' => 'k', 'Ḵ' => 'K', 'ḵ' => 'k', 'Ḷ' => 'L', 'ḷ' => 'l',
        'Ḹ' => 'L', 'ḹ' => 'l', 'Ḻ' => 'L', 'ḻ' => 'l', 'Ḽ' => 'L', 'ḽ' => 'l', 'Ḿ' => 'M', 'ḿ' => 'm',
        'Ṁ' => 'M', 'ṁ' => 'm', 'Ṃ' => 'M', 'ṃ' => 'm', 'Ṅ' => 'N', 'ṅ' => 'n', 'Ṇ' => 'N', 'ṇ' => 'n',
        'Ṉ' => 'N', 'ṉ' => 'n', 'Ṋ' => 'N', 'ṋ' => 'n', 'Ṍ' => 'O', 'ṍ' => 'o', 'Ṏ' => 'O', 'ṏ' => 'o',
        'Ṑ' => 'O', 'ṑ' => 'o', 'Ṓ' => 'O', 'ṓ' => 'o', 'Ṕ' => 'P', 'ṕ' => 'p', 'Ṗ' => 'P', 'ṗ' => 'p',
        'Ṙ' => 'R', 'ṙ' => 'r', 'Ṛ' => 'R', 'ṛ' => 'r', 'Ṝ' => 'R', 'ṝ' => 'r', 'Ṟ' => 'R', 'ṟ' => 'r',
        'Ṡ' => 'S', 'ṡ' => 's', 'Ṣ' => 'S', 'ṣ' => 's', 'Ṥ' => 'S', 'ṥ' => 's', 'Ṧ' => 'S', 'ṧ' => 's',
        'Ṩ' => 'S', 'ṩ' => 's', 'Ṫ' => 'T', 'ṫ' => 't', 'Ṭ' => 'T', 'ṭ' => 't', 'Ṯ' => 'T', 'ṯ' => 't',
        'Ṱ' => 'T', 'ṱ' => 't', 'Ṳ' => 'U', 'ṳ' => 'u', 'Ṵ' => 'U', 'ṵ' => 'u', 'Ṷ' => 'U', 'ṷ' => 'u',
        'Ṹ' => 'U', 'ṹ' => 'u', 'Ṻ' => 'U', 'ṻ' => 'u', 'Ṽ' => 'V', 'ṽ' => 'v', 'Ṿ' => 'V', 'ṿ' => 'v',
        'Ẁ' => 'W', 'ẁ' => 'w', 'Ẃ' => 'W', 'ẃ' => 'w', 'Ẅ' => 'W', 'ẅ' => 'w', 'Ẇ' => 'W', 'ẇ' => 'w',
        'Ẉ' => 'W', 'ẉ' => 'w', 'Ẋ' => 'X', 'ẋ' => 'x', 'Ẍ' => 'X', 'ẍ' => 'x', 'Ẏ' => 'Y', 'ẏ' => 'y',
        'Ẑ' => 'Z', 'ẑ' => 'z', 'Ẓ' => 'Z', 'ẓ' => 'z', 'Ẕ' => 'Z', 'ẕ' => 'z', 'ẖ' => 'h', 'ẗ' => 't',
        'ẘ' => 'w', 'ẙ' => 'y', 'ẚ' => 'a', 'Ạ' => 'A', 'ạ' => 'a', 'Ả' => 'A', 'ả' => 'a', 'Ấ' => 'A',
        'ấ' => 'a', 'Ầ' => 'A', 'ầ' => 'a', 'Ẩ' => 'A', 'ẩ' => 'a', 'Ẫ' => 'A', 'ẫ' => 'a', 'Ậ' => 'A',
        'ậ' => 'a', 'Ắ' => 'A', 'ắ' => 'a', 'Ằ' => 'A', 'ằ' => 'a', 'Ẳ' => 'A', 'ẳ' => 'a', 'Ẵ' => 'A',
        'ẵ' => 'a', 'Ặ' => 'A', 'ặ' => 'a', 'Ẹ' => 'E', 'ẹ' => 'e', 'Ẻ' => 'E', 'ẻ' => 'e', 'Ẽ' => 'E',
        'ẽ' => 'e', 'Ế' => 'E', 'ế' => 'e', 'Ề' => 'E', 'ề' => 'e', 'Ể' => 'E', 'ể' => 'e', 'Ễ' => 'E',
        'ễ' => 'e', 'Ệ' => 'E', 'ệ' => 'e', 'Ỉ' => 'I', 'ỉ' => 'i', 'Ị' => 'I', 'ị' => 'i', 'Ọ' => 'O',
        'ọ' => 'o', 'Ỏ' => 'O', 'ỏ' => 'o', 'Ố' => 'O', 'ố' => 'o', 'Ồ' => 'O', 'ồ' => 'o', 'Ổ' => 'O',
        'ổ' => 'o', 'Ỗ' => 'O', 'ỗ' => 'o', 'Ộ' => 'O', 'ộ' => 'o', 'Ớ' => 'O', 'ớ' => 'o', 'Ờ' => 'O',
        'ờ' => 'o', 'Ở' => 'O', 'ở' => 'o', 'Ỡ' => 'O', 'ỡ' => 'o', 'Ợ' => 'O', 'ợ' => 'o', 'Ụ' => 'U',
        'ụ' => 'u', 'Ủ' => 'U', 'ủ' => 'u', 'Ứ' => 'U', 'ứ' => 'u', 'Ừ' => 'U', 'ừ' => 'u', 'Ử' => 'U',
        'ử' => 'u', 'Ữ' => 'U', 'ữ' => 'u', 'Ự' => 'U', 'ự' => 'u', 'Ỳ' => 'Y', 'ỳ' => 'y', 'Ỵ' => 'Y',
        'ỵ' => 'y', 'Ỷ' => 'Y', 'ỷ' => 'y', 'Ỹ' => 'Y', 'ỹ' => 'y', 'Ỿ' => 'Y', 'ỿ' => 'y', 'ⁱ' => 'i',
        'ⁿ' => 'n', 'ₐ' => 'a', 'ₑ' => 'e', 'ₒ' => 'o', 'ₓ' => 'x', '⒜' => 'a', '⒝' => 'b', '⒞' => 'c',
        '⒟' => 'd', '⒠' => 'e', '⒡' => 'f', '⒢' => 'g', '⒣' => 'h', '⒤' => 'i', '⒥' => 'j', '⒦' => 'k',
        '⒧' => 'l', '⒨' => 'm', '⒩' => 'n', '⒪' => 'o', '⒫' => 'p', '⒬' => 'q', '⒭' => 'r', '⒮' => 's',
        '⒯' => 't', '⒰' => 'u', '⒱' => 'v', '⒲' => 'w', '⒳' => 'x', '⒴' => 'y', '⒵' => 'z', 'Ⓐ' => 'A',
        'Ⓑ' => 'B', 'Ⓒ' => 'C', 'Ⓓ' => 'D', 'Ⓔ' => 'E', 'Ⓕ' => 'F', 'Ⓖ' => 'G', 'Ⓗ' => 'H', 'Ⓘ' => 'I',
        'Ⓙ' => 'J', 'Ⓚ' => 'K', 'Ⓛ' => 'L', 'Ⓜ' => 'M', 'Ⓝ' => 'N', 'Ⓞ' => 'O', 'Ⓟ' => 'P', 'Ⓠ' => 'Q',
        'Ⓡ' => 'R', 'Ⓢ' => 'S', 'Ⓣ' => 'T', 'Ⓤ' => 'U', 'Ⓥ' => 'V', 'Ⓦ' => 'W', 'Ⓧ' => 'X', 'Ⓨ' => 'Y',
        'Ⓩ' => 'Z', 'ⓐ' => 'a', 'ⓑ' => 'b', 'ⓒ' => 'c', 'ⓓ' => 'd', 'ⓔ' => 'e', 'ⓕ' => 'f', 'ⓖ' => 'g',
        'ⓗ' => 'h', 'ⓘ' => 'i', 'ⓙ' => 'j', 'ⓚ' => 'k', 'ⓛ' => 'l', 'ⓜ' => 'm', 'ⓝ' => 'n', 'ⓞ' => 'o',
        'ⓟ' => 'p', 'ⓠ' => 'q', 'ⓡ' => 'r', 'ⓢ' => 's', 'ⓣ' => 't', 'ⓤ' => 'u', 'ⓥ' => 'v', 'ⓦ' => 'w',
        'ⓧ' => 'x', 'ⓨ' => 'y', 'ⓩ' => 'z', 'Ⱡ' => 'L', 'ⱡ' => 'l', 'Ɫ' => 'L', 'Ᵽ' => 'P', 'Ɽ' => 'R',
        'ⱥ' => 'a', 'ⱦ' => 't', 'Ⱨ' => 'H', 'ⱨ' => 'h', 'Ⱪ' => 'K', 'ⱪ' => 'k', 'Ⱬ' => 'Z', 'ⱬ' => 'z',
        'Ɱ' => 'M', 'ⱱ' => 'v', 'Ⱳ' => 'W', 'ⱳ' => 'w', 'ⱴ' => 'v', 'ⱸ' => 'e', 'ⱺ' => 'o', 'ⱼ' => 'j',
        'Ꝁ' => 'K', 'ꝁ' => 'k', 'Ꝃ' => 'K', 'ꝃ' => 'k', 'Ꝅ' => 'K', 'ꝅ' => 'k', 'Ꝉ' => 'L', 'ꝉ' => 'l',
        'Ꝋ' => 'O', 'ꝋ' => 'o', 'Ꝍ' => 'O', 'ꝍ' => 'o', 'Ꝑ' => 'P', 'ꝑ' => 'p', 'Ꝓ' => 'P', 'ꝓ' => 'p',
        'Ꝕ' => 'P', 'ꝕ' => 'p', 'Ꝗ' => 'Q', 'ꝗ' => 'q', 'Ꝙ' => 'Q', 'ꝙ' => 'q', 'Ꝛ' => 'R', 'ꝛ' => 'r',
        'Ꝟ' => 'V', 'ꝟ' => 'v', 'Ａ' => 'A', 'Ｂ' => 'B', 'Ｃ' => 'C', 'Ｄ' => 'D', 'Ｅ' => 'E', 'Ｆ' => 'F',
        'Ｇ' => 'G', 'Ｈ' => 'H', 'Ｉ' => 'I', 'Ｊ' => 'J', 'Ｋ' => 'K', 'Ｌ' => 'L', 'Ｍ' => 'M', 'Ｎ' => 'N',
        'Ｏ' => 'O', 'Ｐ' => 'P', 'Ｑ' => 'Q', 'Ｒ' => 'R', 'Ｓ' => 'S', 'Ｔ' => 'T', 'Ｕ' => 'U', 'Ｖ' => 'V',
        'Ｗ' => 'W', 'Ｘ' => 'X', 'Ｙ' => 'Y', 'Ｚ' => 'Z', 'ａ' => 'a', 'ｂ' => 'b', 'ｃ' => 'c', 'ｄ' => 'd',
        'ｅ' => 'e', 'ｆ' => 'f', 'ｇ' => 'g', 'ｈ' => 'h', 'ｉ' => 'i', 'ｊ' => 'j', 'ｋ' => 'k', 'ｌ' => 'l',
        'ｍ' => 'm', 'ｎ' => 'n', 'ｏ' => 'o', 'ｐ' => 'p', 'ｑ' => 'q', 'ｒ' => 'r', 'ｓ' => 's', 'ｔ' => 't',
        'ｕ' => 'u', 'ｖ' => 'v', 'ｗ' => 'w', 'ｘ' => 'x', 'ｙ' => 'y', 'ｚ' => 'z');
    return strtr($text, $trans);
}