<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Ugugdsun form iin utgiig hadgalna
 *
 * @param string $form_name hadgalah form iin ner
 * @param string $code code field iin ner
 *
 * @return boolean
 */
function comment_save($form_name, $code) {
    $form = new \F\Form\CommentForm($form_name, $code);
    if ($form::isValid($form_name)) {
        echo 'valid';
    } else {
        echo 'invalid';
    }
    print_r(\M\Config::get('POST'));
    die();
}

/**
 * Comment form iig butsaana. render() hiij haruulah heregtei
 *
 * @param string $form_name tuhain form iin ner.
 * @param string $code code field iin utga
 *
 * @return object CommentForm->form iig butsaana
 */
function comment_save($form_name, $code) {

    $form = new \F\Form\CommentForm($form_name, $code);
    if ($form->isValid($form_name)) {

    } else {
        return false;
    }
    return $form->form;
}

function comment_form($form_name, $code) {

    $form = new \F\Form\CommentForm($form_name, $code);

    return $form->form;
}
