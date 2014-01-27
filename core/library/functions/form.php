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

function form_render_tags() {

    return array(
        'input' => 'input',
        'select' => 'select',
        'checkbox' => 'checkbox',
        'radio' => 'radio',
        'textarea' => 'textarea',
        'wysiwyg' => 'wysiwyg'
    );
}

/**
 * @param string $name Element iin id attribute iin neriig yanzalna
 */
function fix_element_id($name) {
    $name = str_replace(array('[', ']'), '', $name);
    $name = str_replace(array('-'), '_', $name);

    return $name;
}

function form_fileupload_with_preview($form_element_name = '') {

    $buf = '<div class="row" id="' . fix_element_id($form_element_name) . '">
            <div class="col-lg-2"></div>
                <div class="col-lg-10">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i>' . __('Select image') . '</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> ' . __('Change') . '</span>
                                <input type="file" name="' . $form_element_name . '" class="default">
                            </span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> ' . __('Remove') . '</a>
                        </div>
                    </div>
                    </div>
                </div>';

    return $buf;
}
