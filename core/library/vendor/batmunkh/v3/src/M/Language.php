<?php

/*
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage Language
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Language {

    public static $words = array();
    public static $words_not_found = array();
    public $langFilesDir;
    public $langFiles = array();

    public function __construct($ln = 'mn') {
        if (DIR_CORE . 'lang' . DS . $ln . DS . 'index.php') {
            $this->langFilesDir = DIR_CORE . 'lang' . DS . $ln . DS;
        } else {
            $this->langFilesDir = DIR_CORE . 'lang' . DS . strtolower(DEFAULT_LANG) . DS;
        }
        $this->langFiles = File::getFiles($this->langFilesDir, 'php');

        $lang = array();
        foreach ($this->langFiles as $k => $v) {
            require_once $v;
        }
        self::$words = $lang;
    }

    public function __($txt = '') {

        if (!isset($this->words[$txt])) {
            $this->words_not_found[] = $txt;
            return $txt;
        }
        return $this->words[$txt];
    }

    static function get($txt = '') {

        if (!isset(self::$words[$txt])) {

//            log_send('$lang[\'' . $txt . '\'] word not found.', 3);
            $this->words_not_found[] = $txt;
            return $txt;
        }
        return self::$words[$txt];
    }

}
