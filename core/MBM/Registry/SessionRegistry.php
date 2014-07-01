<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Registry;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class SessionRegistry implements RegistrableInterface, DumpableInterface {

    /**
     * Constructor
     */
    public function __construct() {

        if (isset($_SESSION)) {
            return;
        }
        session_start();
    }

    /**
     * Save the specified value to the session registry
     */
    public function set($key, $value) {
        $_SESSION[strtolower($key)] = $value;
    }

    /**
     * Get the specified value from the session registry
     */
    public function get($key) {
        $key = strtolower($key);
        return isset($_SESSION[$key]) ?
                $_SESSION[$key] :
                null;
    }

    /**
     * Get the specified value from the session registry
     */
    public function check($key) {
        $key = strtolower($key);
        return isset($_SESSION[$key]) ?
                true :
                false;
    }

    /**
     * Dump the whole session registry
     */
    public function dump() {
        ob_start();
        var_dump($_SESSION);
        return ob_get_clean();
    }

    /**
     * Destroy the session
     */
    public function clear() {
        $_SESSION = array();
        session_destroy();
    }

    /**
     * Clear a key from registry
     *
     * @param strin $key Key value
     */
    public function clearKey($key) {

        unset($_SESSION[strtolower($key)]);
    }
    public function getSession(){
        return $_SESSION['user_name'];
//        var_dump($sessName);
//        die();
    }
}
