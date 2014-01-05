<?php

$form = new F\Form\CategoryForm('category');
print_r($session->get('category'));

if ($form->isValid('category')) {

    //category iin baruun zuuniig todorhoiloh

    $category_db = db_unit($db, 'Category');
    $category = new D\Model\Category(
            array(
        'category_id' => post('category_id'),
        'code' => post('code'),
        'depth' => post(''),
        'lft' => post(''),
        'rgt' => post(''),
        'st' => post('st'),
        'user_id' => post(''),
        'pos' => post(''),
        'name' => post('name'),
        'is_external' => post('is_external'),
        'external_url' => post('external_url'),
        'lang' => post(''),
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'date_last_updated' => convert_date(date("Y-M-D H:i:s")),
        'is_adult' => post('')
            )
    );
    $category_db->registerNew($category);
    $category_db->commit();

    set_flash(__('Category created'), 'success');
} else {
    set_flash(__('Could not create category. Please enter valid data.'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
header("Location: " . get_url('admin_category_new'));
