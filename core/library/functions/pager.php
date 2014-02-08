<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Huudaslah function
 */
function mbmNextPrev($url = NULL, $num_rows = 0, $start = 0, $per_page = 10) {

    if (substr_count($url, '?') == 0) {
        $url = $url . '?';
    }
    $total_pages = ceil($num_rows / $per_page); //нийт хэдэн хуудас болохыг тооцоолох
    $current_page = (($start / $per_page) + 1); //идэвхтэй хуудсыг тодорхойлох

    /* хуудасны дугаарыг өмнөх 3 болон удаах 3 хуудсаар тасалж харуулах */
    if (($current_page - 3) > 0) {
        $i_start = $current_page - 3;
    } else {
        $i_start = 1;
    }
    if (($current_page + 3) < $total_pages) {
        $end = $current_page + 3;
    } else {
        $end = $total_pages;
    }
    $buf = '<ul>';
    $buf .= '<li>';
    $buf .= '<a href="' . $url . '" style="color:#333333;">'
            . '&laquo; '
            . '</a>';
    $buf .= '</li>';
    for ($i = $i_start; $i <= $end; $i++) {
        $buf .= '<li ';
        if ($i == $current_page) {
            $buf .= 'class="active"';
        }
        $buf .= '>';
        if ($i == $current_page) {
            $buf .= '<span class="page-numbers current">' . $current_page . '</span>';
        } else {
            $buf .= '<a href="' . $url . '&amp;start=' . (($i - 1) * $per_page) . '" class="page-numbers">';
            $buf .= $i;
            $buf .= '</a>';
        }
        $buf .= '</li>';
    }
    $buf = rtrim($buf, ', ');

    if ($num_rows < $per_page) {
        return '';
    }
    $buf .= '<li>';
    $buf .= '<a href="' . $url . '&amp;start=' . (floor($num_rows / $per_page) * $per_page) . '"  class="next page-numbers">'
            . ' &raquo;'
            . '</a>';
    $buf .= '</li>';

    $url = str_replace("?&", "?", $url);
    return '<div class="pagination">' . $buf . '</div>';
}
