<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     JAMIYANDORJ Purevdorj <jamian1018@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Lib;

class Language {

    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    // language ni default-r mn baina
    private $currLang = "mn";

    public function setLang($lang) {
        $this->currLang = $lang;
    }

    public function __($txt = '') {

        global $ln;

        if (!isset($ln::$words[$txt])) {
            $ln::$words_not_found[$txt] = $txt;

            return $txt;
        }
        return $ln::$words[$txt];
    }

    /**
     * yamar hel ashiglaj bgaag butsaana
     * @return type
     */
    public function getLang() {
        return $this->currLang;
    }

    /**
     * orchuulgiig moduluudiin nereer awaad butsaana
     * @param array $modules moduluudiin ner. hooson bwal zuwhun common language-g butsaana
     * @return array 
     */
    public function getTranslation($modules = array()) {
        require_once DIR_LANG . DS . $this->currLang . DS . 'index.php';
        $translation = array();
        $modules = array_merge($modules, array('common'));
        foreach ($modules as $module) {
            if (isset($lang[$module]))
                $translation = array_merge($translation, $lang[$module]);
        }

        return $translation;
    }

    public static function get($word) {
        require_once DIR_LANG . DS . Language::instance()->currLang . DS . 'index.php';

        foreach ($lang as $l) {
            if (array_key_exists($word, $l))
                return $l[$word];
        }
        return $word;
    }

}
