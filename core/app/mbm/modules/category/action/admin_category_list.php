<?php

css_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/css/demo_table.css', 9);
css_set_loadfile('/css/admin/module_content.css');
js_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/js/jquery.dataTables.js', 9);

if ((int) get('id') > 0) {
    $parent_id = get('id');
} else {
    $parent_id = 0;
}
$template->set('categories', \Category::fetchByParentId($parent_id));
