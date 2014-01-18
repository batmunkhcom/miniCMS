<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
css_set_loadfile('/assets/flatlab/admin/assets/data-tables/DT_bootstrap.css', 9);
js_set_loadfile('/assets/flatlab/admin/assets/data-tables/jquery.dataTables.js', 91);
js_set_loadfile('/assets/flatlab/admin/assets/data-tables/DT_bootstrap.js', 92);

$template->set('is_admin', \M\Config::get('is_admin'));
$template->set('users', \User::fetchAll());
