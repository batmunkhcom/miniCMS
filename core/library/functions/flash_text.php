<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Flash text tohiruulj ugnu
 *
 * @param string $text Flash iin text
 * @param string $type flash text iin turul:
 *      debug (Most Verbose),
 *      info,
 *      warn,
 *      error,
 *      fatal (Least Verbose),
 *      trace
 *
 * @return boolean Bainga true butsaana
 * * */
function set_flash($text, $type = 'info') {
    global $session;
    $session->set('flash_text', $text);
    $session->set('flash_type', $type);

    return true;
}

/**
 * Session ees flash text avna
 *
 * @return array Description
 */
function get_flash() {
    global $session;

    $txt['text'] = $session->get('flash_text');
    $txt['type'] = $session->get('flash_type');

    $session->clearKey('flash_text');
    $session->clearKey('flash_type');

    return $txt;
}

/**
 * Flash text bgaa esehiig shalgana
 *
 * @return boolean Flash text bval true bhgui bol false butsaana
 */
function has_flash() {

    global $session;

    if (strlen($session->get('flash_text')) > 0) {

        return true;
    }

    return false;
}
