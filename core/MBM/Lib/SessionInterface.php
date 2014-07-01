<?php

/**
 * CREATE TABLE `ws_sessions` ( 
  `session_id` varchar(255) binary NOT NULL default '', 
  `session_expires` int(10) unsigned NOT NULL default '0', 
  `session_data` text, 
  PRIMARY KEY  (`session_id`) 
) TYPE=InnoDB;  
 */


/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Lib;

interface SessionInterface { 

    function open($savePath, $sessName);
    public static function instance($sess);
    function close();
    function read($sessID);
    function write($sessID,$sessData);
    function destroy($sessID);
    function gc($sessMaxLifeTime);
} 