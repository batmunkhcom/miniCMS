<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$is_enabled_module = array();

M\File::getAndIncludePHPFiles(DIR_LIB.'functions'.DS);
 
$config = new M\Config($mbm_config);
$core = new M\Core($mbm_config);
$db = new M\DB();


