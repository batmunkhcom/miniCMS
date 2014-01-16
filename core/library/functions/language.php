<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * undsen core uudad hereglegdej bgaa tul tusad n gargaj hadgalav. mun tusad include hiij bgaa bolno
 *
 * @param string $txt helend ashiglagdsan huvisagchiin key
 *
 * @return string Hargalzah utgiig avaad butsaana
 */
function __($txt = '') {

    global $ln;

    if (!isset($ln::$words[$txt])) {
        $ln::$words_not_found[$txt] = $txt;

        return $txt;
    }
    return $ln::$words[$txt];
}

function get_lang() {

    return 'mn';
}
