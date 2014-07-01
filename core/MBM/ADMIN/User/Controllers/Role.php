<?php

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     TUGSBAYAR Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\User\Controllers;

use \MBM\Lib\Language;

class Role extends \MBM\Lib\Controller {
    
    /**
     * Uurchlultiig onooj butsaana.
     * @param Object $request
     * @param Object $object
     * @return Object
     */
    public function fillData($request, $object){
        $object->setModule($request->param("module"));
        $object->setAction($request->param("action"));
        $object->setMethod($request->param("formMethod"));
        $object->setCreatedAt(new \Datetime("now"));
        return $object;
    }
    
    /**
     * Permission list.
     */
    public function index(){
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminPermissionList.twig');
        $this->view->render(array('base_url' => URL,
            'authorization' => $this->model->getArrayList('\MBM\Entity\Permissions'),
            'lang' => Language::instance()->getTranslation(array('user','list'))));
    }
    
    /**
     * Permission add.
     */
    public function add(){
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminPermissionAdd.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('user'))));
    }
    
    /**
     * Permission edit.
     */
    public function edit($request, $response){
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminPermissionEdit.twig');
        $this->view->render(array(
            'permissions' => \MBM\Admin\User\Models\Permission::instance()->getRolePermission($request->id),
            'lang' => Language::instance()->getTranslation(array('user'))));
    }
    
    /**
     * Permission.iin shineer uusgej hadgalana.
     * @param object $request
     * @param object $response
     */
    public function saveMe($request, $response){
        $newPermission = new \MBM\Entity\Permissions();
        $this->model->save($this->fillData($request, $newPermission));
        $response->redirect("/admin/authorization");
    }
    
    /**
     * Permission.iin zasvariig hadgalana.
     * @param object $request
     * @param object $response
     */
    public function editMe($request, $response){
        $obj = $this->model->db->find("\MBM\Entity\Permissions", $request->param("id"));
        $this->model->update($this->fillData($request, $obj));
        $response->redirect("/admin/authorization");
    }
    
    /**
     * Ugugdsun Id.tai Autherization.iig ustgana.
     * @param object $request
     * @param object $response
     */
    public function deleteMe($request, $response){
        try{
            $obj = $this->model->db->find("\MBM\Entity\Permissions", $request->param("id"));
            $this->model->delete($obj);
            return "#auth_" . $request->param("id");
        } catch (Exception $e) {
            return -1;
        }
    }
}