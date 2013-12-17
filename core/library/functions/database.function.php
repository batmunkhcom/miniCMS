<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function load_db(){
    
    switch(DB_DRIVER){
        case 'pdo':
            $db = new D\Adapter\PdoAdapter("mysql:dbname=".DB_NAME, DB_USER, DB_PASS);
            break;
        case 'mysql':
            break;
        case 'oci8':
            break;
    }
    
    return $db;
}