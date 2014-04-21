<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
js_set_loadfile('/assets/flatlab/admin/js/jquery.validate.min.js', 92);
js_set_loadfile('/assets/flatlab/admin/js/bootstrap-switch.js', 94);
js_set_loadfile('/assets/flatlab/admin/js/jquery.tagsinput.js', 95);

$form = new \F\Form\CategoryForm('category', array(
    'action' => get_url('admin_category_save'),
    'class' => 'form-horizontal',
    'role' => 'form',
    'method' => 'post'
        ),
    \Category::getById(get('id')));

$template->set('form', $form->form);
$template->set('sess', $session->get('category'));
$template->set('category', \Category::getById(get('id')));


