<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
js_set_loadfile('/assets/flatlab/admin/assets/fuelux/js/spinner.min.js', 91);
js_set_loadfile('/assets/flatlab/admin/assets/bootstrap-fileupload/bootstrap-fileupload.js', 92);
js_set_loadfile('/assets/flatlab/admin/assets/jquery-multi-select/js/jquery.multi-select.js', 93);
js_set_loadfile('/assets/flatlab/admin/js/advanced-form-components.js', 94);
//js_set_loadfile('/assets/flatlab/admin/');
//js_set_loadfile('/assets/flatlab/admin/');
$form = new F\Form\ContentForm('content', array(
    'action' => get_url('admin_content_save'),
    'class' => 'form-horizontal',
    'role' => 'form',
    'method' => 'post',
    'enctype' => 'multipart/form-data'
        ));

$template->set('form', $form->form);
$session->clearKey('content');
