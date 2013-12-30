<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * ugugdsun date iig YYYY-MM-DD H:i:s format ruu hurvuulne
 *
 * @param $date string
 *
 * @return string
 */
function convert_date($date) {
    $date = str_replace('-', ' ', $date);
    $dt = new \DateTime($date);
    $carbon = \M\Carbon::instance($dt);

    return $carbon->toDateTimeString();
}
