<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M\Registry;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class DataHandler {

    protected $_registry;

    /**
     * Class constructor
     */
    public function __construct(RegistrableInterface $registry) {
        $this->_registry = $registry;
    }

    /**
     * Save data to the registry
     */
    public function set($key, $value) {
        $this->_registry->set($key, $value);
        return $this;
    }

    /**
     * Get data from the registry
     */
    public function get($key) {
        return $this->_registry->get($key);
    }

    /**
     * Clear the registry
     */
    public function clear() {
        $this->_registry->clear();
    }

    /**
     * Clear a key from registry
     *
     * @param strin $key Key value
     */
    public function clearKey($key) {
        $this->_registry->clearKey($key);
    }

}
