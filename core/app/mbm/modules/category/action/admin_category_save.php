<?php

$form = new F\Form\CategoryForm('category');

if ($form->isValid('category') == 1) {

    //category iin baruun zuuniig todorhoiloh
    $lft = '';
    $rgt = '';

    //pos todorhoiloh
    $pos = 1;

    $lft = get_left('Category', array('rgt', 'lft', 'depth', 'parent_id' => post('category_id')));

    $category_db = db_unit($db, 'Category');

    $category = new D\Model\Category(
            array(
        'parent_id' => post('category_id'),
        'code' => post('code'),
        'depth' => post(''),
        'lft' => $lft,
        'rgt' => ($lft + 1),
        'st' => post('st'),
        'user_id' => get_logged_user_id(),
        'pos' => $pos,
        'name' => post('name'),
        'is_external' => post('is_external'),
        'external_url' => post('external_url'),
        'target' => post('target'),
        'lang' => get_lang(),
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'date_last_updated' => convert_date(date("Y-M-D H:i:s")),
        'is_adult' => post('is_adult')
            )
    );
    $category_db->registerNew($category);
    $category_db->commit();

    set_flash(__('Category created'), 'success');
} else {
    $sess_data = $session->get('category');
    $error_txt = '<h2>' . __('Error') . '!!!</h2>';
    foreach ($sess_data['errors'] as $k => $v) {
        $error_txt .= $v . '<br>';
    }
    set_flash($error_txt, 'error');
}
header("Location: " . get_url('admin_category_new'));
