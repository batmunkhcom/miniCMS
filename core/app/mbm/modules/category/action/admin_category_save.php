<?php

$form = new F\Form\CategoryForm('category');
if ($form::isValid('category')) {

    //category iin baruun zuuniig todorhoiloh

    $category_db = db_unit($db, 'Category');
    $category = new D\Model\Category(
            array(
        'category_id' => post(''),
        'code' => post(''),
        'depth' => post(''),
        'lft' => post(''),
        'rgt' => post(''),
        'st' => post('st'),
        'user_id' => post(''),
        'pos' => post(''),
        'title' => post('title'),
        'is_external' => post('is_external'),
        'external_url' => post('external_url'),
        'lang' => post(''),
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'is_adult' => post('')
            )
    );
    $category_db->registerNew($category);
    $category_db->commit();

    set_flash(__('Valid form submition'), 'success');
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
header("Location: " . get_url('admin_category_new'));
