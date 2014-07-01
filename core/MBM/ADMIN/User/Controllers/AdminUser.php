<?php

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Admin\User\Controllers;

use \MBM\Admin\User\Models\User;
use \MBM\Lib\Language;
use \MBM\Entity\Users;
use \MBM\Lib\Auth;

class AdminUser extends \MBM\Lib\Controller {

    /**
     * Singleton pattern
     * @staticvar AdminUser $instance
     * @return \static
     */
    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    /**
     * $request.iin utgiig object ruu hurvuulne.
     * @param object $request request.in object
     * @param object $newUser \MBM\Entity\Users.in object
     * @param boolean $isNew \MBM\Entity\Users.in object ni shineer burtgej baiga esehiig zaaj ugnu.
     * @return object Users.iin object butsana.
     */
    private function saveMe($request, $newUser, $isNew) {

        if ($_FILES['file']['size']) {
            $user = User::instance()->getUser($request->param("id"));
            $photo = new \MBM\ADMIN\Photo\Controllers\AdminPhoto(DIR_TEMPLATE_ADMIN);
            //var_dump($user); //die;
            if ($user[1]) {
                $photo->delete($user[1]['id'],false);
            }
            $profile_photo = $photo->post(false);
            $newUser->setPhotoId($profile_photo['id']);
        }
        $newUser->setUsername($request->param("username"));
        $newUser->setEmail($request->param("email"));
        $newUser->setFirstname($request->param("firstname"));
        $newUser->setLastname($request->param("lastname"));
        $newUser->setPhone($request->param("phone"));
        $newUser->setGender($request->param("gender"));
        $newUser->setBirthday(\DateTime::createFromFormat("Y/m/d", $request->param("birthday")));
        $newUser->setCityLiving($request->param("cityLiving"));
        $newUser->setCityBirth($request->param("cityBirth"));
        $newUser->setAddressLiving($request->param("addressLiving"));
        $newUser->setAddressBilling($request->param("addressBilling"));
        $newUser->setAddressShipping($request->param("addressShipping"));
        $newUser->setWebsite($request->param("website"));
        $newUser->setDateCreated(new \Datetime("now"));
        if ($isNew) {
            $newUser->setPassword(Auth::instance()->encryptPass($request->param("username"), $request->param("password")));
            $this->model->save($newUser);
            \MBM\Admin\User\Models\User::instance()->saveRoles($newUser->getId(), $request->roles);
        } else {
            \MBM\Admin\User\Models\User::instance()->updateRoles($newUser->getId(), $request->roles);
            if ($request->password != null && $request->password != "" && trim($request->password) != "") {
                $newUser->setPassword(Auth::instance()->encryptPass($request->param("username"), $request->param("password")));
            }
            $this->model->update($newUser);
        }
        return;
    }

    /**
     * User.in list.iig haruulna.
     * @param object $request
     * @param object $response
     */
    function index($request, $response) {

        $allUsers = User::instance()->getUserList();

        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminUserList.twig');
        $this->view->render(array('allUsers' => $allUsers,
            'lang' => Language::instance()->getTranslation(array('user','list'))));
    }

    /**
     * Hereglegch nemeh tsonh haruulna.
     * @param object $request
     * @param object $response
     */
    function add($request, $response) {
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminUserAdd.twig');
        $this->view->render(array('allRoles' => \MBM\ADMIN\User\Models\Role::instance()->getList(),
            'lang' => Language::instance()->getTranslation(array('user'))));
    }

    /**
     * Hereglegchin medeelel zasvarlah form haruulna.
     * @param object $request
     * @param object $response
     */
    function edit($request, $response) {

        $user = User::instance()->getUser($request->param("id"));
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminUserEdit.twig');
        $this->view->render(array(
            'selectedRoles' => \MBM\ADMIN\User\Models\Role::instance()->getUserRolesList($request->param("id")),
            'allRoles' => \MBM\ADMIN\User\Models\Role::instance()->getList(),
            'user' => $user, 'lang' => Language::instance()->getTranslation(array('user'))));
    }

    /**
     * Hereglegchiin medeellig hadaglana.
     * @param object $request
     * @param object $response
     */
    function save($request, $response) {
        $newUser = new Users();
        $this->saveMe($request, $newUser, true);
        $response->redirect("/admin/user", $code = 302)->send();
    }

    /**
     * hereglegchin medeellig medeellig zasna.
     * @param object $request
     * @param object $response
     */
    function update($request, $response) {
        $editMe = User::instance()->find($request->param("id"));
        $this->saveMe($request, $editMe, false);
    }

    /**
     * Hereglegch ustgah function
     * @param object $request
     * @param object $response
     * @return String Amjilttai bolbol hereglegchin ID butsaana, ugui bol -1 butsaana
     */
    function delete($request, $response) {
        try {
            $deleteMe = $this->model->db->getRepository('\MBM\Entity\Users')->find($request->param("userId"));
            $this->model->delete($deleteMe);
            return "#" . $request->param("userId");
        } catch (Exception $e) {
            return -1;
        }
    }

    /**
     * Role ustgah function
     * @param object $request
     * @param object $response
     * @return String Amjilttai bolbol role ID butsaana, ugui bol -1 butsaana.
     */
    function deleteMe($request, $response) {
        try {
            $deleteMe = $this->model->db->getRepository('\MBM\Entity\Roles')->find($request->param("id"));
            $this->model->delete($deleteMe);
            return "#role_" . $request->param("id");
        } catch (Exception $e) {
            return -1;
        }
    }

    /**
     * Nevtersen hereglchiin profile.iig haruulna.
     * @param object $request
     * @param object $response
     */
    function profile($request, $response) {
        $user = User::instance()->getUser(Auth::instance()->getId());
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('UserProfile.twig');
        $this->view->render(array('user' => $user,
            'lang' => Language::instance()->getTranslation(array('user'))));
    }

    function role($request, $response) {
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('UserRole.twig');
        $this->view->render(array('roles' => $this->model->getArrayList("\MBM\Entity\Roles"),
            'lang' => Language::instance()->getTranslation(array('user','list'))));
    }

    function roleSave($request, $response) {
        if ($request->param("id") == -1) {
            $obj = new \MBM\Entity\Roles();
            $obj->setName($request->param("name"));
            $obj->setComment($request->param("comment"));
            $obj->setDateCreated(new \Datetime("now"));
            $this->model->save($obj);
        } else {
            $obj = $this->model->db->find("\MBM\Entity\Roles", $request->param("id"));
            $obj->setName($request->param("name"));
            $obj->setComment($request->param("comment"));
            $obj->setDateCreated(new \Datetime("now"));
            $this->model->update($obj);
        }
    }

}
