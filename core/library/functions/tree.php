<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * $obj to array
 */
function tree($depth, $parent_id) {

}

function build_tree(&$unsorted, $start_node) {
    $out = array();
    foreach ($unsorted as $key => $node) {
        if ($node['depth'] == $start_node) {
            $node['name'] = build_tree($unsorted, $key);
            unset($unsorted[$key]);
            $out[] = $node;
        }
    }
    return $out;
}
