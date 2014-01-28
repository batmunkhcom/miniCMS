<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
css_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/css/demo_table.css', 9);

/*
 * Notification-d ashiglagdana
 */
css_set_loadfile('/assets/flatlab/admin/assets/gritter/css/jquery.gritter.css', 91);


js_set_loadfile('/assets/flatlab/admin/assets/advanced-datatable/media/js/jquery.dataTables.js', 9);
js_set_loadfile('/assets/flatlab/admin/assets/gritter/js/jquery.gritter.js', 91);

if (!isset($current_module)) {
    $current_module = 'object';
}
$template->set('objects', \Object::fetchByModule($current_module));
$template->set('current_module', $current_module);

//olon gazar ashiglah tul template file iig davhar zaaj ugnu
set_template_file('object', 'admin_object_list');
