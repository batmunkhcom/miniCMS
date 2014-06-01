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
class ApcCache implements CacheableInterface
{
    /**
     * Save data to the cache
     */
    public function set($key, $data)
    {
        if (!apc_store(strtolower($key), $data)) {
            throw new ApcCacheException('Error saving data with the key ' . $key . ' to the APC cache.');
        }
        return $this;
    }
    
    /**
     * Get the specified data from the cache
     */
    public function get($key)
    {
        if ($this->exists($key)) {
            if (!$data = apc_fetch(strtolower($key))) {
                throw new ApcCacheException('Error fetching data with the key ' . $key . ' from the APC cache.');
            }
            return $data;
        }
        return null;
    }
    
    /**
     * Delete the specified data from the cache
     */
    public function delete($key)
    {
        if ($this->exists($key)) {
            if (!apc_delete(strtolower($key))) {
                throw new ApcCacheException('Error deleting data with the key ' . $key . ' from the APC cache.');
            }
            return true;
        }
        return false;
    }
    
    /**
     * Check if the specified cache key exists
     */
    public function exists($key)
    {
        return (boolean) apc_exists(strtolower($key));
    }
    
    /**
     * Get cache information
     */
    public function getInfo()
    {
        ob_start();
        print_r(apc_cache_info());
        return ob_get_clean();
    }
     
    /**
     * Clear the cache
     */
    public function clear($cacheType = 'user')
    {
        return apc_clear_cache($cacheType);
    }        
}
