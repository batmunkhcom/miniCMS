<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *  ugugdsun dir ees file include hiih
 *
 * @param string Absolute path. / aar tugsunu
 *
 * @return 
 */
function include_files($dir) {

    M\File::getAndIncludePHPFiles($dir);
}
