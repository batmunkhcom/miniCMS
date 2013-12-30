<?php

$form = new F\Form\CategoryForm();
if ($form::isValid('category')) {
    $template->set('is_valid', 'yesss');


    set_flash(__('Valid form submition'), 'info');
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_category_new'));
