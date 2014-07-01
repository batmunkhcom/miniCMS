<?php


namespace MBM\Lib;


class File {

       
    public static function instance() {
        
    static $instance = null;
    if (null === $instance) {
        $instance = new static();
    }
    return $instance;
    }

    /**
     * Undsen file uudiig include hiigdehees umnu ashiglah tul ene class-d orov
     * @param $dir : scan hiih havtasnii absolute zam
     * @param $ext : shuult hiih file iin urgutgul
     * @return Array
     */
    public static function getFiles($dir, $ext) {

        $files = array();
        if (is_dir($dir)) {
            $d = dir($dir);
            while (false !== ($entry = $d->read())) {
                if (self::getFileExtenstion($entry) == $ext) {
                    $files [] = $dir . $entry;
                }
            }
            $d->close();
        }

        return $files;
    }

    /**
     * getFiles function-d hereglegdene
     * @param $filename : file iin ner
     * @return string
     */
    public static function getFileExtenstion($filename) {
        $file = explode(".", $filename);
        if (is_string($file [count($file) - 1])) {
            $ext = $file [count($file) - 1];
        } else {
            $ext = '';
        }
        return $ext;
    }

    /**
     * array aar orj irsen file uudiin utgiig include hiine
     *
     * @param $include_files array yamar turliin file iig include hiih tuhai.
     *
     * Example : jishee n $include_files['php'] = array('/home/username/file.php')
     */
    public static function includePHPFiles($include_files = array()) {
        if (is_array($include_files)) {
            foreach ($include_files as $k => $v) {
                if (is_array($include_files [$k])) {
                    foreach ($include_files [$k] as $kk => $vv) {
                        if (file_exists($vv)) {
                            require_once ($vv);
                            Log::save(shrink_text($vv) . ' file included');
                        } else {
                            Log::save(shrink_text($vv) . ' file not found', 1);
                        }
                    }
                } else {
                    if (file_exists($v)) {
                        require_once ($v);
//                        Log::save(shrink_text($v) . ' file included');
                        Log::save($v . ' file included');
                    } else {
                        Log::save(shrink_text($v) . ' file not found', 1);
                    }
                }
            }
        }
    }

    /**
     * ugugdsun havtasnii zaagdsan file uudiig include hiine
     *
     * @param $dir : scan hiih havtasnii absolute zam
     * @param $ext : shuult hiih file iin urgutgul
     * @return null
     */
    public static function getAndIncludePHPFiles($dir) {

        $files = self::getFiles($dir, 'php');
        if (is_array($files)) {
            self::includePHPFiles($files);
        }
    }

    /**
     * Folder hooson esehiig shalgana
     *      */
    public static function isEmptyDir($dir) {
        if (($files = @scandir($dir)) && count($files) <= 2) {
            return true;
        }
        return false;
    }
       
}
