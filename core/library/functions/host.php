<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * HOST shalgana
 * @param string $host Remote host iin IP
 * @param string $port Ashiglah DNS
 * @param string $timeout Timout boloh hugatsaa
 *
 * @return string IP g butsaana
 */
function check_host_status($host, $port, $timeout) {
    // holbogdoh
    if (!$x = fsockopen($host, $port, $errno, $errstr, $timeout)) {
        return 'offline';
    } else {
        fclose($x); //close connection

        return 'online';
    }
}
