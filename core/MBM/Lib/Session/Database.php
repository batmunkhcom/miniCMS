<?php

/**
 * SESSION iig baazad hadgalah
  CREATE TABLE `m_sessions` (
  `session_id` varchar(255) binary NOT NULL default '',
  `session_expires` int(10) unsigned NOT NULL default '0',
  `session_data` text,
  PRIMARY KEY  (`session_id`)
  ) TYPE=InnoDB;
 */

namespace MBM\Lib\Session;

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class Database extends \MBM\Lib\Model implements \MBM\Lib\SessionInterface {

    // session-lifetime 
    var $lifeTime;
    // mysql-handle 
    var $db_session;
    protected $_sess;

    /**
     * Class constructor
     */
    public function __construct($sess) {

        $this->instance($sess);
    }

    /**
     * Singleton
     */
    public static function instance($sess) {

        static $instance = null;
        if (null === $instance) {
            $instance = new static();
            session_set_save_handler($this, true);
            register_shutdown_function('session_write_close');
            session_start();
        }
        return $instance;
    }

    function open($savePath, $sessName) {
        // get session-lifetime 
        $this->lifeTime = get_cfg_var("session.gc_maxlifetime");
        // open database-connection 
        $this->db_session = $this->getConnection('session');

        return true;
    }

    function close() {
        $this->gc(ini_get('session.gc_maxlifetime'));
        // close database-connection 
        return $this->getConnection('session')->close();
    }

    function read($sessID) {
        // fetch session-data 
        $res = $this->db_session->createQuery("SELECT session_data AS d FROM \MBM\Entity\Sessions 
                            WHERE session_id = '$sessID' 
                            AND session_expires > :time");
        $res->setParameter('time', time());
        $res->getArrayResult();

        if (strlen($res->getSessionData()) > 0) {
            return $res->getSessionData();
        }
        return "";
    }

    function write($sessID, $sessData) {
        // new session-expire-time 
        $newExp = time() + $this->lifeTime;
        // is a session with this id in the database? 
        $ress = $this->db_session->getRepository('\MBM\Entity\Sessions')->findOneBy(array(
            'session_id' => $sessID
        ));
        // if yes, 
        if ($ress->count() == 1) {
            
        }
        // if no session-data was found, 
        else {

            $ress = new \MBM\Entity\Sessions();
        }
        $ress->setSessionExpires($newExp);
        $ress->setSessionData($sessData);

        $this->db_session->persist($ress);
        $this->db_session->commit();

        // an unknown error occured 
        return true;
    }

    function destroy($sessID) {
        // delete session-data 
        $ress = $this->db_session->getRepository('\MBM\Entity\Sessions')->findOneBy(array(
            'session_id' => $sessID
        ));

        if ($ress->count() == 1) {
            return true;
        }

        // ...else return false 
        return false;
    }

    function gc($sessMaxLifeTime) {
        // delete old sessions 
        $ress = $this->db_session->createQuery("DELETE FROM \MBM\Entity\Sessions WHERE session_expires < :session_expires");
        $ress->setParameter('session_expires', time());
        
        // return affected rows 
        return $ress->getArrayResult();
    }

}
