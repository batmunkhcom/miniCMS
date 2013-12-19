<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/****************Webiin DB write holboltiin medeelel*********************/
$mbm_config ['db_host'] = 'localhost';
//$mbm_config ['db_port'] = '1521';
$mbm_config ['db_name'] = 'test';
$mbm_config ['db_user'] = 'test';
$mbm_config ['db_pass'] = 'test';
//$mbm_config ['db_name'] = 'orcl';
//$mbm_config ['db_user'] = 'hr';
//$mbm_config ['db_pass'] = 'welcome';
$mbm_config ['db_prefix'] = 't_';
$mbm_config ['db_charset'] = 'AL32UTF8';

/**
 * mysql: MySQL baaz ashiglah.
 * oci8: oracle baaz ashiglah. PDO_OCI deprecated bolson tul oci8 ashiglasan.
 * pdo: PDO driver ashiglana
 */
$mbm_config ['db_adapter'] = 'pdo'; 

//yamar turliin baaz ashiglah n 
$mbm_config ['db_type'] = 'mysql'; 


