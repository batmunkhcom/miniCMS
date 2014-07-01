<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Lib;

class Auth extends \MBM\Lib\Model {

    /**
     * @var Auth Singleton instance
     */
    protected static $_instance;
    
    private $registry;
    private $currUser;
    
    /**
     * Singleton pattern
     * @staticvar Auth $instance
     * @return \static
     */
   public static function instance()
        {
        if (null === self::$_instance) {
            self::$_instance = new self();            
        }
        return self::$_instance;
    }
    
    public function __construct($connection_name = 'default') {
        parent::__construct($connection_name);
        $this->registry = new \MBM\Registry\DataHandler(new \MBM\Registry\SessionRegistry());
    }
    
    
    /**
     * Nevtreh erhiig shalgana.
     * @param string $username
     * @param string $password
     * @return boolean username, password unen bol true, busad tohioldold false butsaana.
     */
    public function check($username, $password) {
        $this->currUser = $this->db->getRepository("\MBM\Entity\Users")->findOneBy(array('username' => $username, 'password' => $this->encryptPass($username, $password)));
        if ($this->currUser != null) {
            $this->login();
            return true;
        }
        return false;
    }

    /**
     * Nevtersen user.in object butsaana.
     * @return Object \MBM\Entity\Users.in object
     */
    public function getUser() {
        return $this->db->getRepository("\MBM\Entity\Users")->find($this->getId());
    }

    /**
     * login hiine. Registry.d hadaglana. Utga ul butsaana.
     */
    public function login() {
        $this->registry->set("user_id", $this->currUser->getId());
        $this->registry->set("user_name", $this->currUser->getUsername());
        $this->registry->set("f_name", $this->currUser->getFirstname());
        $this->registry->set("screen_name", $this->currUser->getFirstname().' '.$this->currUser->getLastname());
        $query = "select p.slug from \MBM\Entity\Permissions p INNER JOIN \MBM\Entity\RolePermission rp where p.id = rp.permissionId "
                . "left join \MBM\Entity\UserRoles ur where rp.roleId = ur.roleId where ur.userId = :uId";
       $permissions = $this->db->createQuery($query)->setParameter('uId',$this->currUser->getId())->getResult();
       foreach ($permissions as $key => $permission)
       {
           $permissions[$permission['slug']] = $permission['slug'];
       }
        $this->registry->set("permissions",$permissions);
    }
    
    /**
     * Nevtersen hereglegchin buh permission.iig butsaana.
     * @return array
     */
    public function getPermissions(){
        return $this->registry->get("permissions");
    }
    
    /**
     * Ugugdsun slug-iig shalgana. Handah erhtei esehiig.
     * @param string $permission - slug
     * @return boolean
     */
    public function checkPermission($permission){
        $perm = $this->registry->get("permissions");
        return isset($perm[$permission]);
    }

    /**
     * Nevtersen hereglegchiin neriig butsaana.
     * @return string
     */
    public function getUsername() {
        return $this->registry->get("screen_name");
    }
    
    /**
     * Nevtersen hereglegchiin ID.iig butsaana.
     * @return String
     */
    public function getId() {
        
        return $this->registry->get("user_id");
    }
    
    /**
     * Logout hiine. Utga ul butsaana.
     */
    public function logout() {
        $this->registry->clear();
    }
    
    /**
     * Login hiigdsen esehiig shalgana.
     * @return boolean true|false
     */
    public function isLogged() {
        if ($this->registry->get("user_id") == null || $this->registry->get("user_id") == "" || $this->registry->get("user_id") == 0 || $this->registry->get("user_id") == "0") {
            return false;
        }
        return true;
    }
    
    /**
     *  Session butsaana
     * @return object session object
     */
    public function getSession(){
        return $this->registry->getSession();        
    }

    /**
     * Nuuts ugiig encrypt hiih function
     * @param string $username hereglegchiin ner
     * @param string $password nuuts ug
     * @return string encryptlegdsen nuuts ug butsaana
     */
    public function encryptPass($username, $password){
        return md5($username . md5($password));
    }
    
    /**
     * String about info.
     * @return array
     */
    public function getAboutInfo(){
        $currUser = $this->getUser();
        return array("username"=>$this->getUsername(),"about"=>$currUser->getCityLiving().",".$currUser->getAddressLiving());
    }
    
    /**e
     * hereglegch newtreegui bwal login huudasruu butsaana 
     * newtreh shaardlagatai action-nuud deer ashiglana
     */
    public function  Authenticate($response)
    {
      if(!$this::instance()->isLogged()){
         $response->redirect("/login", 503)->send();
       }
    }
}
