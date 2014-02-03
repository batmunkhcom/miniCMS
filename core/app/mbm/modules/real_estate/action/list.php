<?php

$objects = \Object::getByCategoryAndModule(get('category_id'), 'any', array(
            'order_by' => 'id DESC'
        ));
switch (get('category_id')) {
    case 0:
        $entry_title = __('Real estate');
        break;
    default;
        $entry_title = \Category::getById(get('category_id'))->name;
        break;
}
$template->set('objects', $objects);
$template->set('entry_title', $entry_title);
