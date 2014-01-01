<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M\Cache;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Cache
{
    protected $_cacheBackend;
    
    /**
     * Constructor
     */
    public function __construct(CacheableInterface $cacheBackend)
    {
        $this->_cacheBackend = $cacheBackend;
    }
    
    /**
     * Save data to the cache
     */
     public function set($key, $data)
     {
         $this->_cacheBackend->set($key, $data);
         return $this;
     }
     
     /**
     * Get data from the cache
     */
     public function get($key)
     {
         return $this->_cacheBackend->get($key);
     }
     
     /**
     * Delete the specified cache data
     */
     public function delete()
     {
         return $this->_cacheBackend->delete($key);
     }          
}