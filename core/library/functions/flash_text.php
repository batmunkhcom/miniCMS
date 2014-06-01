<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
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
 *      success
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

    //hevlegdeh hurtel ustgahgui..

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

/**
 * Flash iin text iig avna
 */
function get_flash_text() {
    if (has_flash()) {
        $flash = get_flash();

        return $flash['text'];
    }

    return false;
}

/**
 * Flash iin turliig avna
 */
function get_flash_type() {
    if (has_flash()) {
        $flash = get_flash();

        return $flash['type'];
    }

    return false;
}

/**
 * Flash text iig hevelne
 *
 * @return boolean|string Bhgui bol false bval html iig butsaana
 */
function render_flash() {

    global $session;

    if (has_flash()) {
        $flash = get_flash();

        $css_name = '';

        switch ($flash['type']) {
            case 'success':
                $css_name = 'alert-success';
                break;
            case 'info':
                $css_name = 'alert-info';
                break;
            case 'warn':
                $css_name = 'alert-warning';
                break;
            case 'error':
                $css_name = 'alert-danger';
                break;
            case 'fatal':
                $css_name = 'alert-danger';
                break;
            case 'trace':
                $css_name = 'alert-warning';
                break;
            case 'debug':
                $css_name = 'alert-warning';
                break;
            default :
                $css_name = 'alert-info';
                break;
        }

        $buf = '<div class="alert ' . $css_name . ' alert-block fade in">';
        $buf .= '<button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="fa fa-times"></i>
                                  </button>';
        $buf .= $flash['text'];
        $buf .= '</div>';
        $session->clearKey('flash_txt');
        $session->clearKey('flash_type');

        clear_flash();

        return $buf;
    } else {

        return false;
    }
}

/**
 * Flash text huvisagchiig ustgana
 */
function clear_flash() {

    global $session;

    $session->clearKey('flash_text');
    $session->clearKey('flash_type');

    return true;
}
