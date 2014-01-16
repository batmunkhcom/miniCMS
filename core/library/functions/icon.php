<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * idevhtei,idevhgui geh met zuilsiig todorhoiloh
 *
 * @param integer $type 1,0 utgiig avna. 1 gedeg n biyelsen icon
 */
function icon_1_0($type = 0, $link = '#') {

    $buf = '';

    switch ($type) {
        case 0:
            $buf .= '<a href="' . $link . '"><i class="fa fa-times"></i></a>';
            break;
        case 1:
            $buf .= '<a href="' . $link . '"><i class="fa fa-check"></i></a>';
            break;
    }

    return $buf;
}

/**
 * Content-iin toroliig hewleh
 *
 * @param string $type article, photo, video ii negiig avna
 */
function icon_content_type($type = '') {

    $buf = '';

    $type_class = 'badge ';
    $type_icon = 'fa ';
 
    switch ($type) {
        case 'article':
            $type_class .= 'bg-primary';
            $type_icon .= 'fa-edit';
            break;
        case 'photo':
            $type_class .= 'bg-info';
            $type_icon .= 'fa-picture-o';
            break;
        case 'video':
            $type_class .= 'bg-success';
            $type_icon .= 'fa-film';
            break;
        default:
            $type_class .= 'bg-default';
            $type_icon .= 'fa-edit';
            break;
    }

    $buf .= ' <span class="' . $type_class . '" title="'.__($type).'">';
    $buf .= '<i class="' . $type_icon . '"></i>';
    $buf .= '</span>';

    return $buf;
}
