<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * undsen core uudad hereglegdej bgaa tul tusad n gargaj hadgalav. mun tusad include hiij bgaa bolno
 *
 * @param string $txt helend ashiglagdsan huvisagchiin key
 *
 * @return string Hargalzah utgiig avaad butsaana
 */
function __($txt = '') {

    return M\Language::get($txt);
}
