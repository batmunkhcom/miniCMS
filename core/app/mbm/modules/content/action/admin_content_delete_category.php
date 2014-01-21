<?php

set_layout('empty');
/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$db = db_unit($db, 'ContentCategory');
$categories = $db->select(array(
    'content_id' => (int) post('content_id'),
    'category_id' => (int) post('category_id')
        ), "category_id=:category_id AND content_id=:content_id");

foreach ($categories as $category) {
    $db->registerDeleted($category);
}
$db->commit();

echo __('Command executed');
die();
