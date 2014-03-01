<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace M\File;
/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage File
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class LoadFiles {

    public function LoadFiles() {
        
    }

    public static function loadFiles($filetype = 'txt') {

        $buf = '';

        switch ($filetype) {
            case 'css':

                $domain = PROTOCOL . DOMAIN . DIR_WWW . DIR_CSS;

                $files = Config::$css_files;
                foreach ($files as $k => $v) {
                    if (file_exists(DIR_ABS . DIR_WEB . DIR_CSS . $v)) {
                        $buf .= '<link href="';
                        if (substr_count($v, 'http://') > 0) {
                            $buf .= $v;
                        } else {
                            $buf .= $domain . $v;
                        }
                        $buf .= '" rel="stylesheet" type="text/css" />';
                        $buf .= "\n";
                        Log::save($v . ' loaded. ');
                    } else {
                        Log::save($v . ' not found. ', 1);
                    }
                }
                break;
            case 'js':

                $domain = PROTOCOL . DOMAIN . DIR_WWW . DIR_JS;

                $files = Config::$js_files;
                foreach ($files as $k => $v) {
                    if (file_exists(DIR_ABS . DIR_WEB . DIR_JS . $v)) {
                        $buf .= '<script src="';
                        if (substr_count($v, 'http://') > 0) {
                            $buf .= $v;
                        } else {
                            $buf .= $domain . $v;
                        }
                        $buf .= '" type="text/javascript">';
                        $buf .= '</script>';
                        $buf .= "\n";
                        Log::save($v . ' loaded. ');
                    } else {
                        Log::save($v . ' not found. ', 1);
                    }
                }
                break;
            default:
                break;
        }

        return $buf;
    }

}