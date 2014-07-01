<?php

namespace MBM\ADMIN\User\Models;

class RolePermission extends \MBM\Lib\Model {

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

    public function get($id) {

        $res = $this->db->createQuery("select p.id, p.slug, p.slugDesc, rp.roleId from \MBM\Entity\Permissions p left join \MBM\Entity\RolePermission rp where p.id = rp.permissionId and rp.roleId = :roleId");
        $res->setParameter('roleId',$id);
        return $res->getArrayResult();
    }

    public function find($id = 0){
        $res = $this->db->find("\MBM\Entity\Users", $id);
        return $res;
    }
    
    public function getUser($id = 0){
       
    $res = $this->db->createQuery("select u, p from \MBM\Entity\Users u left join \MBM\Entity\Photos p where u.photoId = p.id where u.id = :user_id");
    $res->setParameter('user_id',$id);
    return $res->getArrayResult();
    }
    
    public function updateMe($roleId,$permissions){
       
       $this->deleteData('\MBM\Entity\RolePermission', 'roleId', $roleId);
       
        $RolePermission = array();
        foreach ($permissions as $key => $value){
            $RolePermission = new \MBM\Entity\RolePermission();
            $RolePermission->setPermissionId($key);
            $RolePermission->setRoleId($roleId);
            $this->db->persist($RolePermission); // shineer nemegdsen elemntuudiig end nemj ugnu.
            unset($RolePermission);
        }
        $this->db->flush();
    }
    
    public function deleteData($entity, $field, $id){
        $q = $this->db->createQuery('delete from '.$entity.' cp where cp.'.$field.' ='.$id);
        $numDeleted = $q->execute();
    }

}
