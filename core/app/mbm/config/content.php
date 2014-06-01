<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
/* * **************Webiin undsen tohirgoo******************** */

//content iin zurgiig tamgalah eseh
$mbm_config ['content_photo_stamp_enable'] = 1;

//urgund utga oruulaagui bol tuhain zuragnii urguniig avna
$mbm_config ['content_photo_max_width'] = 200;
//undriig 0 gej ugvul auto tootsoolno
$mbm_config ['content_photo_max_height'] = 150;
/**
 * Zurgiin haana tamgalahiig todorhoilno
 * LB - zuun dood
 * LM - zuun dund
 * LT - zuun deer
 * MT - Deed gold
 * MM - yag gold
 * MB - dood gold
 * RT - baruun deed
 * RM - baruun dund
 * RB - baruun dood
 */
$mbm_config ['content_photo_stamp_position'] = 'LB';

//DIR_WEB ees hamaaraltai path iig zaana
$mbm_config ['content_photo_stamp_image'] = '/images/stamp.png';

//tamgalah zurgiin padding
$mbm_config ['content_photo_stamp_padding1'] = 5;
$mbm_config ['content_photo_stamp_padding2'] = 5;

//original zurgiig hadgalah eseh
$mbm_config ['content_photo_save_original'] = 1;
//original zurgiig haana hadgalah zam. DIR_DATA tai hamaaraltaigaar ugugdunu
$mbm_config ['content_photo_save_original_path'] = 'photos/content/';
