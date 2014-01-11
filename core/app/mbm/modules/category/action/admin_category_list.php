<?php

css_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/css/demo_table.css', 9);
js_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/js/jquery.dataTables.js', 9);
$template->set('is_admin', \M\Config::get('is_admin'));
//$template->set('categories', Category::getCategoriesByDepth(0));

if ((int) get('id') > 0) {
    $parent_id = get('id');
} else {
    $parent_id = 0;
}
$template->set('categories', \Category::fetchAll($parent_id));
