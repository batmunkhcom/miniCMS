<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function http_load_file($filetype = 'txt') {

    switch ($filetype) {
        case 'css':
            echo M\File\LoadFiles::loadFiles('css');
            break;
        case 'js':
            echo M\File\LoadFiles::loadFiles('js');
            break;
        default;
            break;
    }
}

/**
 *  ugugdsun dir ees file include hiih
 *
 * @param string Absolute path. / aar tugsunu
 */
function include_files($dir) {
    M\File::getAndIncludePHPFiles($dir);
    M\Log::save('testing.... loaded...');
}
