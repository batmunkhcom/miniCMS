<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function load_template(\M\Template $template) {

    echo $template->display();
}

/**
 * Layout iin duudna.
 */
function load_layout() {
    global $template;

    require_once(DIR_TEMPLATE . \M\Config::get('layout') . '.php');
}

/**
 * ashiglagdah layout iig tohiruulna
 * @param $name string onooh layout iin ner
 */
function set_layout($name) {

    //tuhain layout bgaa esehiig shalgaad bval onoono
    if (file_exists(DIR_TEMPLATE . $name . '.php')) {

        return \M\Config::set('layout', $name);
    }

    return false;
}

/**
 * ashiglagdah layout iig avna
 * @param $name string onooh layout iin ner
 */
function get_layout() {

    return \M\Config::get('layout');
}

/**
 * template ruu variable damjuulne. $template iig ashiglaj
 *
 * @param string $param Template ruu damjuulah parameter
 * @param string $value Template ruu damjuulah parameter iin utga
 */
function set_template_variable($param, $value) {
    global $template;
    $template->set($param, $value);
}
