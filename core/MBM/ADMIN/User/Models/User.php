<?php

namespace MBM\Admin\User\Models;

class User extends \MBM\Lib\Model {

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

    public function getUserList() {

        $res = $this->db->createQuery("select u from \MBM\Entity\Users u");
        return $res->getArrayResult();
    }

    public function find($id = 0){
        $res = $this->db->find("\MBM\Entity\Users", $id);
        return $res;
    }
    
    public function saveRoles($userId, $permissions) {
        foreach ($permissions as $value){
            $aPerm = new \MBM\Entity\UserRoles();
            $aPerm->setUserId($userId);
            $aPerm->setRoleId($value);
            $this->db->persist($aPerm);
        }
        $this->db->flush();
    }
    
    public function updateRoles($userId, $permissions){
        $q = $this->db->createQuery('delete from \MBM\Entity\UserRoles ur where ur.userId = :userId')
                ->setParameter('userId', $userId);
        if($q->execute() >= 0 ){
            $this->saveRoles($userId, $permissions);
        }
    }
    
    public function getUser($id = 0){
        
    $res = $this->db->createQuery("select u, p from \MBM\Entity\Users u left join \MBM\Entity\Photos p where u.photoId = p.id where u.id = :user_id");
    $res->setParameter('user_id',$id);
    return $res->getArrayResult();
    }
    
    

}
