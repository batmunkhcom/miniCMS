<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function compress_files($buffer = '', $type = '') {

    switch ($type) {
        case 'js':
            /* remove comments */
            $buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $buffer);
            /* remove tabs, spaces, newlines, etc. */
            $buffer = str_replace(array("\r\n", "\r", "\t", "\n", '  ', '    ', '     '), '', $buffer);
            /* remove other spaces before/after ) */
            $buffer = preg_replace(array('(( )+\))', '(\)( )+)'), ')', $buffer);
            break;
        case 'css':
            /* remove comments */
            $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
            /* remove tabs, spaces, newlines, etc. */
            $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '     '), '', $buffer);
            /* remove other spaces before/after ; */
            $buffer = preg_replace(array('(( )+{)', '({( )+)'), '{', $buffer);
            $buffer = preg_replace(array('(( )+})', '(}( )+)', '(;( )*})'), '}', $buffer);
            $buffer = preg_replace(array('(;( )+)', '(( )+;)'), ';', $buffer);
            break;
    }

    return $buffer;
}
