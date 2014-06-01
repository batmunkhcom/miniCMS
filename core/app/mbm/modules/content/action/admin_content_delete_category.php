<?php

//ajax post iin uildel uchir layout hooson bh yostoi
set_layout('empty');
/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
//mappert holbogdoh
$db = db_unit($db, 'ContentCategory');

//orj irsen ugugdluur shuuj avah
$categories = $db->select(array(
    'content_id' => (int) post('content_id'),
    'category_id' => (int) post('category_id')
        ), "category_id=:category_id AND content_id=:content_id");

//oldson ur dung ustgahar burtgehj
foreach ($categories as $category) {
    $db->registerDeleted($category);
}
//command iig guitsetgeh
$db->commit();

//alert uguh medeelel
echo __('Command executed');

//code iig zogsoono. es buguus template file aa haigaad aldaa zaah bolno
die();
