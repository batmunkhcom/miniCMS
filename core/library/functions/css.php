<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * CSS file uudiig duudahad beltgene
 */

/**
 * Nemelteer css file uud duudaj bolno
 *
 * @param $additional_files array Nemelteer duudah file uudiig array helbereer oruulj ugnu
 *
 * @return $buf string  duudah file uudiin html tag helberiig butsaana.
 */
function css_load($addidtional_files = array()) {

    $buf = '';

    //shuud duudah file uud.
    $files = \M\Config::get('css_loadfile');


    $files['5_1'] = PROTOCOL . DOMAIN . DS . 'css/main.css';

    if (\M\Config::get('is_admin') != 1) {
        $files[5] = PROTOCOL . DOMAIN . DS . 'css/style.css';
    }

    ksort($files);

    $buf = '';
    foreach ($files as $k => $v) {
        $buf .= '<link rel="stylesheet" href="' . $v . '"  >' . "\n";
    }

    return $buf;
}

/**
 * @param $file string web_root ees hoishhi haygiig ugnu
 * ugugdsun file iig compress hiihgui load hiine
 * Ex: /css/filename.css
 *
 * @return
 */
function css_set_loadfile($file, $pos = 10) {

    $css_load_files = \M\Config::get('css_loadfile');
    $css_load_files[$pos . '_' . substr(base64_encode($file), 0, 8)] = $file;

    \M\Config::set('css_loadfile', $css_load_files);
}

/**
 * compress css files and prepare to load to /css/main.php
 */
function compress_css() {

    $css_files = M\Config::get('css_files');
    $file_type = 'css';
    $enabled_modules = \M\Config::get('module_enabled');

    $module_files = array();

//module uudiin $file_type file iig avah
    foreach ($enabled_modules as $k => $v) {
        $module_files[] = \M\Module::getMediaFiles($v, $file_type);
    }


//CSS file uudiig undsen array-d oruul
    $files = array();
    foreach ($module_files as $k => $v) {
        foreach ($module_files[$k] as $kk => $vv) {
            $files[$vv] = $vv;
        }
    }

    ksort($files);

    //nemelt css uudiig beltgeh
    if (is_array($css_files)) {
        foreach ($css_files as $k => $v) {
            $files[] = $v;
        }
    }
    $modified = 0;

    foreach ($files as $file) {
        $age = filemtime($file);
        if ($age > $modified) {
            $modified = $age;
        }
    }

    $offset = 60 * 60 * 24 * 7; // Cache for 1 weeks

    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $modified) {

        //header iig main.php -d n oruulaad ugsun tul header iin medeelliig arilgav
    } else {

//        ob_start('ob_gzhandler');

        foreach ($files as $file) {

            //minified hiigdeegui file iig avna
            if (substr_count($file, '.min.') == 0) {
                $buf .= compress_files(file_get_contents($file), $file_type);
            } else {
                $buf .= file_get_contents($file);
            }
        }

//        ob_end_flush();
    }
}
