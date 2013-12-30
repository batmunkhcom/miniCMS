<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$form_c = new \F\Form\CategoryForm();
$form = $form_c->form;

$template->set('form', $form_c->form);
