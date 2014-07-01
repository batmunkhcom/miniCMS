<?php

/**
 * SESSION iig file-d hadgalah

  $handler = new File();
  session_set_save_handler(
  array($handler, 'open'),
  array($handler, 'close'),
  array($handler, 'read'),
  array($handler, 'write'),
  array($handler, 'destroy'),
  array($handler, 'gc')
  );

  // the following prevents unexpected effects when using objects as save handlers
  register_shutdown_function('session_write_close');

  session_start();
 */

namespace MBM\Lib\Session;

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class File implements \MBM\Lib\SessionInterface {

    private $savePath;
    protected $_sess;

    /**
     * Class constructor
     */
    public function __construct( $sess) {
        
    }

    /**
     * Singleton
     */
    public static function instance( $sess) {

        static $instance = null;
        if (null === $instance) {
            $instance = new static();   
            $this->savePath = DIR_CORE . \MBM\Lib\Loader::instance()->config['session']['save_path'];
            session_set_save_handler($instance, true);
            register_shutdown_function('session_write_close');
            session_start();
        }
        return $instance;
    }

    function open($savePath, $sessionName) {
        $this->savePath = $savePath;
        if (!is_dir($this->savePath)) {
            mkdir($this->savePath, 0777);
        }

        return true;
    }

    function close() {
        return true;
    }

    function read($id) {
        return (string) @file_get_contents("$this->savePath/sess_$id");
    }

    function write($id, $data) {
        return file_put_contents("$this->savePath/sess_$id", $data) === false ? false : true;
    }

    function destroy($id) {
        $file = "$this->savePath/sess_$id";
        if (file_exists($file)) {
            unlink($file);
        }

        return true;
    }

    function gc($maxlifetime) {
        foreach (glob("$this->savePath/sess_*") as $file) {
            if (filemtime($file) + $maxlifetime < time() && file_exists($file)) {
                unlink($file);
            }
        }

        return true;
    }

}
