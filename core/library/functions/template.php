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

    require_once(DIR_TEMPLATE .\M\Config::get('layout') . '.php');
}

/**
 * ashiglagdah layout iig tohiruulna
 * @param $name string onooh layout iin ner
 */
function set_layout($name) {

    //tuhain layout bgaa esehiig shalgaad bval onoono
    if (file_exists(DIR_TEMPLATE . $name . '.php')) {

        log_send('layout set to "' . $name . '" file: ' . DIR_TEMPLATE . $name . '.php', 6);
        return \M\Config::set('layout', $name);
    } else {

        log_send('Not found: ' . DIR_TEMPLATE . $name . '.php', 1);
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

/**
 * Onoogdson module file iin template iig duudna. action-d ihevchlen ashiglagdana
 *
 * @param string $module Module iin ner
 * @param string $file Module iin template file iin ner
 */
function set_template_file($module, $file) {

    global $template;

    $template->set_template_file(DIR_MODULE . $module . '/templates/' . $file . '.php');
}

/**
 * Layout iin tuslah file iig duudah
 *
 * @param string $filename DIR_TEMPLATE/filename.php gesen ug
 */
function load_layout_component($filename, $var = array()) {

    if (file_exists(DIR_TEMPLATE . $filename . '.php')) {
        require DIR_TEMPLATE . $filename . '.php';
    }
}

/**
 * partial duudah
 *
 * @param string $module Module iin ner
 * @param string $template_file Template file iini ner. urgutgulguigeer. EX: top_menu
 * @param array $var Template file ruu damjuulah parameters
 * 
 * @return 
 */
function load_partial($module,$template_file,$var = array()){
    
    if(is_array($var)){
        foreach($var as $k=>$v){
            ${$k}=$v;
        }
    }
    if($template_file{0} == '_'){
        $template_file{0}='';
    }
    require(DIR_MODULE.$module.DS.'templates'.DS.$template_file.'.php');
}