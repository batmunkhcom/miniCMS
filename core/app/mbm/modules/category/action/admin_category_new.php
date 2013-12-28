<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$form_c = new \F\CategoryForm();
$form = $form_c->form;

if ($form::isValid('category')) {
    $template->set('is_valid', 'yesss');
}
$template->set('form', $form_c->form);
