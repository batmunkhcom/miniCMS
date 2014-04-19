<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$form = new F\Form\UserForm('user', array(
    'action' => get_url('register_user'),
    'class' => 'form-horizontal',
    'role' => 'form',
    'method' => 'post',
    'enctype' => 'multipart/form-data'
        ));

$template->set('form', $form->form);
$session->clearKey('user');
