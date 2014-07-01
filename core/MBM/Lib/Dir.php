<?php


namespace MBM\Lib;

/**
 * Description of Dir
 *
 * @author batmunkh
 */
class Dir {

    public function Dir() {
        
    }

    /**
     * @param string $name Ugugdson havtsan dotorhi havtsuudiig avna
     */
    static function getAllDirectories($path = '') {

        $directories = array();
        
        if (is_dir($path)) {
            if ($handle = opendir($path)) {

                /* This is the correct way to loop over the directory. */
                while (false !== ($entry = readdir($handle))) {
                    if(substr_count($entry, '.') == 0 && !is_file($entry)){
                        $directories[$entry] = $entry;
                    }
                }
                closedir($handle);
            }
        }
        
        return $directories;
    }

}
