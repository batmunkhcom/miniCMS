<?php

css_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/css/demo_table.css', 9);
js_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/js/jquery.dataTables.js', 9);
$template->set('is_admin', \M\Config::get('is_admin'));
//$template->set('categories', Category::getCategoriesByDepth(0));
$template->set('categories', Category::fetchAll()->toArray());
