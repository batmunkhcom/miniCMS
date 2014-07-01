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
class ArrayRegistry implements RegistrableInterface, DumpableInterface {

    protected $_data = array();

    /**
     * Save the specified value to the array registry
     */
    public function set($key, $value) {
        $this->_data[strtolower($key)] = $value;
    }

    /**
     * Get the specified value from the array registry
     */
    public function get($key) {
        $key = strtolower($key);
        return isset($this->_data[$key]) ?
                $this->_data[$key] :
                null;
    }

    /**
     * Dump the whole array registry
     */
    public function dump() {
        ob_start();
        var_dump($this->_data);
        return ob_get_clean();
    }

    /**
     * Clear the array registry
     */
    public function clear() {
        $this->_data = array();
    }

    /**
     * Clear a key from registry
     *
     * @param strin $key Key value
     */
    public function clearKey($key) {

        unset($this->_data[strtolower($key)]);
    }

}
