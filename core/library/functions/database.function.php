<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function load_db($config = array()){
    
    switch(DB_ADAPTER){
        case 'pdo':
            $db = new D\Adapter\PdoAdapter(DB_TYPE.":dbname=".$config['db_name'], $config['db_user1'], $config['db_pass']);
            break;
        case 'mysql':
            break;
        case 'oci8':
            break;
    }
    
    return $db;
}