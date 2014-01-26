<?php

css_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/css/demo_table.css', 9);

/*
 * Notification-d ashiglagdana
 */
css_set_loadfile('/assets/flatlab/admin/assets/gritter/css/jquery.gritter.css', 91);


js_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/js/jquery.dataTables.js', 9);
js_set_loadfile('/assets/flatlab/admin/assets/gritter/js/jquery.gritter.js', 91);


$template->set('is_admin', \M\Config::get('is_admin'));
//$template->set('categories', Category::getCategoriesByDepth(0));
$template->set('contents', Content::fetchAll());
