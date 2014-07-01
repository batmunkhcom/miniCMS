<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * admind categry-uudiin jagsaaltiig haruulna
 *
 * @package    miniCMS
 * @subpackage -
 * @author     JAMIYANDORJ Purevdorj <jamian1018@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Category\Controllers;

use \MBM\Lib\Language;
use \MBM\Entity\Categories;

class AdminCategory extends \MBM\Lib\Controller {

    public static function instance() {

        static $instance = null;
        if (null === $instance) {
            $instance = new static(DIR_TEMPLATE_ADMIN);
        }
        return $instance;
    }
    
    public function fillData($request, $newCat){
        $newCat->setName($request->param('name')); 
        $newCat->setSlug($request->param('slug'));
        $newCat->setParentId($request->param('parent_id'));
        $newCat->setPerPage($request->param('per_page'));
        $newCat->setViewType($request->param('view_type'));
        $newCat->setSt($request->param('st'));
        $newCat->setIsAdult(($request->param('is_adult') != null) ? 1 : 0);
        if($request->param('is_external') != null){
            $newCat->setIsExternal(1);
            $newCat->setExternalUrl($request->param('element_external_url'));
            $newCat->setTarget($request->param('target'));
        } else {
            $newCat->setIsExternal(0);
            $newCat->setExternalUrl("");
            $newCat->setTarget("");
        }
        $newCat->setModule($request->param('module'));
        $newCat->setIcon($request->param('catIcon'));
        $newCat->setDateCreated(new \Datetime("now"));
        $newCat->setAddedBy(\MBM\Lib\Auth::instance()->getId());
        return $newCat;
    }

    /*
     * category-iin list
     */

    public function index() {

        $allCat = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getCategoryList();
        $this->view->prependPath(DIR_ADMIN . 'Category' . DS . 'Views' . DS . TEMPLATE_ADMIN); // category module-m view hawtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminCategoryList.twig');
        $this->view->render(array('lang' => Language::instance()->getTranslation(array('category','list')),
            'title' => 'category list',
            'allCategories' => $allCat));
    }
    
    /**
     *  Category nemeh tsonh haruulana.
     * @param Object $request
     * @param Object $response
     */
    public function add($request, $response) {

        $allCat =  $this->model->getArrayList("\MBM\Entity\Categories");
        $modules = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getListModule();

        $this->view->prependPath(DIR_ADMIN . 'Category' . DS . 'Views' . DS . TEMPLATE_ADMIN); // category module-m view hawtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminCategoryAdd.twig');
        $this->view->render(array('lang' => Language::instance()->getTranslation(array('category','validation')),
            'title' => 'add category', 'allCategories' => $allCat, 'allModules' => $modules));
    }

    /**
     * Category zasah tsonh haruulana.
     * @param integer $id
     */
    public function edit($id = 0) {

        $category = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getCategory($id);
        $allCat = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getList();
        $modules = \MBM\ADMIN\Category\Models\AdminCategory::instance()->getListModule();

        $this->view->prependPath(DIR_ADMIN . 'Category' . DS . 'Views' . DS . TEMPLATE_ADMIN); // category module-m view hawtasiig templatdir-d urd ni nemj bn

        $this->view->loadTemplate('AdminCategoryEdit.twig');

        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('category')),
            'title' => 'add category',
            'cat' => $category,
            'allCategories' => $allCat, 'allModules' => $modules));
    }

    /**
     * Category hadaglana.
     * @param Object $request
     * @param Object $response
     */
    public function saveMe($request, $response) {
        $newCat = new Categories();
        $this->model->save($this->fillData($request, $newCat));
        $response->redirect('/admin/category', $code = 302);
    }

    /**
     * Category ustgana.
     * @param Object $request
     * @param Object $response
     * @return string
     */
    public function deleteMe($request, $response) {
        try {
            $delMe = $this->model->db->getRepository('\MBM\Entity\Categories')->find($request->param("catId"));
            $this->model->delete($delMe);
            return "#" . $request->param("catId");
        } catch (Exception $e) {
            return -1;
        }
    }

    /**
     * Category zasana.
     * @param Object $request
     * @param Object $response
     */
    public function updateMe($request, $response) {
        $editMe = $this->model->db->getRepository('\MBM\Entity\Categories')->find($request->param("editId"));
        $this->model->update($this->fillData($request, $editMe));
        $response->redirect("/admin/category", $code = 302);
    }
  
}
