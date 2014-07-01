<?php

/**
 * admin.ii home huudas
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Installation\Models;

class CreateSchema extends \MBM\Lib\Model {

    /**
     * Uuriin Object.iig butsaana. SINGLETON PATTERN.
     * @staticvar null $instance
     * @return \static
     */
    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    public function generateTables() {
        try {
            $files = scandir(DIR_LIB . "Entity" . DS);
            $entityMetaData = array();
            $index = 0;
            foreach ($files as $key => $value) {
                $clearValue = substr($value, 0, -4);
                if (strlen($clearValue) != 0) {
                    $entityMetaData[$index] = $this->db->getClassMetadata("\\MBM\\Entity\\" . $clearValue);
                    //$entityMetaData[$index] = "\\MBM\\Entity\\".$clearValue;
                    $index += 1;
                }
            }
            $tool = new \Doctrine\ORM\Tools\SchemaTool($this->db);
            $tool->createSchema($entityMetaData);
            
            return 'SUCCESS';
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    /**
     * Admin hereglegchiin medeelliig hadaglana. Mun
     * role, permission uusgene.
     * @param Array $adminData
     */
    public function fillData($adminData) {
        $seedingData = \Symfony\Component\Yaml\Yaml::parse(DIR_ADMIN . 'Installation' . DS . 'seeding.yml');

        $usersId = array();
        $newUser = new \MBM\Entity\Users();
        $newUser->setParentId(0);
        $newUser->setEmail($adminData['email']);
        $newUser->setUsername($adminData['username']);
        $newUser->setFirstname($adminData['username']);
        $newUser->setPassword(\MBM\Lib\Auth::instance()->encryptPass($adminData['username'], $adminData['password']));
        $newUser->setDateCreated(new \Datetime("now"));
        $usersId[0] = $this->save($newUser);

        $rolesData = $seedingData['Roles'];
        $rolesId = array();
        $i = 0;
        foreach ($rolesData as $key => $value) {
            $aRole = new \MBM\Entity\Roles();
            $aRole->setName($value['name']);
            $aRole->setComment($value['comment']);
            $aRole->setDateCreated(new \DateTime('now'));
            $rolesId[$i++] = $this->save($aRole);
        }

        $permissionsData = $seedingData['Permissions'];
        $permId = array();
        foreach ($permissionsData as $key => $value) {
            $aPerm = new \MBM\Entity\Permissions();
            $aPerm->setSlug($value['slug']);
            $aPerm->setSlugDesc($value['desc']);
            $aPerm->setAddedBy($value['added_by']);
            $aPerm->setCreatedAt(new \DateTime('now'));
            $permId[$key] = $this->save($aPerm);
        }
        
        $newUserRole = new \MBM\Entity\UserRoles();
        $newUserRole->setRoleId($rolesId[0]);
        $newUserRole->setUserId($usersId[0]);
        $this->db->persist($newUserRole);
        
        foreach($permId as $key => $value){
            $aRolePerm = new \MBM\Entity\RolePermission();
            $aRolePerm->setRoleId($rolesId[0]);
            $aRolePerm->setPermissionId($value);
            $aRolePerm->setAddedBy($usersId[0]);
            $aRolePerm->setCreatedAt(new \Datetime("now"));
            $this->db->persist($aRolePerm);
        }
        $this->db->flush();
    }

}
