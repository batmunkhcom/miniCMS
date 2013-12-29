<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function comment_save() {

}

function comment_form($form_name, $code) {

    $form = new \F\Form\CommentForm($form_name, $code);

    return $form->form;
}
