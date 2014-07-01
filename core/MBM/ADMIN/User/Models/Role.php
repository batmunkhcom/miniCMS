<?php

namespace MBM\ADMIN\User\Models;

class Role extends \MBM\Lib\Model {

    public static function instance() {

        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    public function db() {
        return $this->db;
    }

    public function find($id = 0){
        $res = $this->db->find("\MBM\Entity\Roles", $id);
        //var_dump($res); die;
        return $res;
    }
    
    /**
     * Role jagsaalt butsaana.
     * @return array
     */
    public function getList() {
        $res = $this->db->createQuery("select r from \MBM\Entity\Roles r");
        return $res->getArrayResult();
    }
    
    
    /**
     * Ugugdsun user ID.tai role.iin jagsaaltiig butsaana
     * @param integer $userID
     * @return Object
     */
    public function getUserRolesList($userID){
        $res = $this->db->createQuery("select r from \MBM\Entity\UserRoles r WHERE r.userId=".$userID);
        return $res->getArrayResult();
    }
}
