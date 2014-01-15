<?php

$form = new F\Form\CategoryForm('category');

if ($form->isValid('category') == 1) {

    if (post('parent_id') == 0) {
        $lft = get_max_left('Category', post('parent_id'));
        if ((int) $lft == 0) {
            $lft = 1;
        }
        $rgt = $lft + 1;
        $depth = 0;
        $parent_id = 0;
    } else {

        $_lft = get_max_left('Category', post('parent_id'));
        $parent_category = \Category::fetchById(post('parent_id'));

        $rgt = ($_lft + 3);
        $lft = ($_lft + 2);

        $depth = ($parent_category->depth + 1);
        $parent_id = $parent_category->id;
    }

    $category_db = db_unit($db, 'Category');

    $category = new D\Model\Category(
            array(
        'parent_id' => $parent_id,
        'code' => post('code'),
        'depth' => $depth,
        'lft' => $lft,
        'rgt' => $rgt,
        'st' => post('st'),
        'user_id' => get_logged_user_id(),
        'pos' => (\Category::getPosition(post('parent_id')) + 1),
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
    $session->clearKey('category');
    header("Location: " . get_url('admin_category_list'));
} else {
    $sess_data = $session->get('category');
    $error_txt = '<h2>' . __('Error') . '!!!</h2>';
    foreach ($sess_data['errors'] as $k => $v) {
        $error_txt .= $v . '<br>';
    }
    set_flash($error_txt, 'error');
}
header("Location: " . get_url('admin_category_new'));
