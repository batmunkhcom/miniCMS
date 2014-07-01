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

class RolePermission extends \MBM\Lib\Controller {
        
    /**
     * Permission edit.
     */
    public function edit($request, $response){
        $this->view->prependPath(DIR_ADMIN . 'User' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('RolePermission.twig');
        $this->view->render(array(
            'permissions' => \MBM\ADMIN\User\Models\RolePermission::instance()->get($request->id),
            'role'=> \MBM\ADMIN\User\Models\Role::instance()->find($request->id),
            'lang' => Language::instance()->getTranslation(array('user'))));
    }
    
    /**
     * Permission.iin shineer uusgej hadgalana.
     * @param object $request
     * @param object $response
     */
    public function update($request, $response){
      //var_dump($request->param('permission')); die();
      \MBM\ADMIN\User\Models\RolePermission::instance()->updateMe($request->id,$request->param('permission'));
      $response->redirect("/admin/user/role",200)->send();
    }
   
}