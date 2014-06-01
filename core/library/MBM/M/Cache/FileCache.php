<?php
/**
 * 
 * aldaatai bgaa. cache heseg deeree... teriig zasah heregtei.!!!
 * 
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
class FileCache implements CacheableInterface
{
    protected $_cacheDir = 'cache';
    
    /**
     * Constructor
     */
    public function __construct($cacheDir = '')
    {
        if ($cacheDir !== '') {
            if (!is_dir($cacheDir)) {
                throw new FileCacheException('The specified cache directory is invalid.'); 
            }
            $this->_cacheDir = $cacheDir;
        }
    }
    
    /**
     * Save data to the specified cache file
     */
    public function set($key, $data)
    {
        $cacheFile = $this->getCacheFile($key);
        if (!file_put_contents($cacheFile, serialize($data))) {
            throw new FileCacheException('Error saving data with the key ' . $key . ' to the cache file.');
        }
        return $this;
    }
    
    /**
     * Get data from the specified cache file
     */
    public function get($key)
    {
        if ($this->exists($key)) {
            $cacheFile = $this->getCacheFile($key);
            if (!$data = unserialize(file_get_contents($cacheFile))) {
                throw new FileCacheException('Error reading data with the key ' . $key . ' from the cache file.');
            }
            return $data;
        }
        return null;
    }
    
    /**
     * Delete the specified cache file
     */
    public function delete($key)
    {
        if ($this->exists($key)) {
            $cacheFile = $this->getCacheFile($key);
            if (!unlink($cacheFile)) {
                throw new FileCacheException('Error deleting the file cache with key ' . $key);
            }
            return true;
        }
        return false;
    }
    
    /**
     * Check if the specified cache file exists
     */
    public function exists($key)
    {
        $cacheFile = $this->getCacheFile($key);
        return file_exists($cacheFile);
    }
    
    /**
     * Get the specified cache file
     */
    protected function getCacheFile($key)
    {
        return $this->_cacheDir . DIRECTORY_SEPARATOR . strtolower($key) . '.cache';
    }      
}
