<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function load_form() {

}

function form_render_option($val = array(), $selected_value = '') {
    $buf = '';
    foreach ($val as $k => $v) {
        $buf .= '<option value="' . $k . '" ';
        if ($k == $selected_value) {
            $buf .= ' selected ';
        }
        $buf .= '>' . $v . '</option>';
    }

    return $buf;
}

function form_render_tags(){
 
    return array(
        'input'=>'input',
        'checkbox'=>'checkbox',
        'radio'=>'radio',
        'textarea'=>'textarea',
        'wysiwyg'=>'wysiwyg'
    );
}
