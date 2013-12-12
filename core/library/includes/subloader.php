<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$is_enabled_module = array();

//LIB dir dotorhi functions havtast bairlaj bgaa file uudiig include hiiv.
M\File::getAndIncludePHPFiles(DIR_LIB.'functions'.DS);

//tohirgoog buh gazar shuud ashiglah bolomj olgohiin tuld ehleed duudav
$config = new M\Config($mbm_config);

//Router ehlev
$router = new M\Router();

//Core dotor router bolon busad shaardlagatai zuilsiig duudav
$core = new M\Core($mbm_config);
$db = new M\DB();


