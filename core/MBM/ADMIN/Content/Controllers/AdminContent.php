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

namespace MBM\ADMIN\Content\Controllers;

use \MBM\Lib\Language;
use \MBM\Lib\File;
use \MBM\Entity\Contents;
use MBM\Entity\ContentCategories;
use MBM\Entity\ContentPhoto;
use \MBM\ADMIN\Category\Models\AdminCategory;

class AdminContent extends \MBM\Lib\Controller {

    public static function instance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static(DIR_TEMPLATE_ADMIN);
        }
        return $instance;
    }

    /**
     * Content.in jagsaaltiin tsonh duudna.
     */
    public function index() {
        $this->view->prependPath(DIR_ADMIN . 'Content' . DS . 'Views' . DS . TEMPLATE_ADMIN); // content module-m view hawtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminContentList.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('content','list')),
            'title' => 'content list',
            'contentList' => \MBM\ADMIN\Content\Models\AdminContent::instance()->getList()
        ));
    }

    /**
     * Content nemeh tsonh duudna.
     * @param Object $request
     * @param Objecty $response
     */
    public function add($request, $response) {
        
        $this->view->prependPath(DIR_ADMIN . 'Content' . DS . 'Views' . DS . TEMPLATE_ADMIN); // category module-m view hawtasiig templatdir-d urd ni nemj bn   
        $this->view->loadTemplate('AdminContentAdd.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('category','content','validation')),
            'title' => 'add category',
            'catList' => AdminCategory::instance()->getList()
            ));
    }

    /**
     * Content.ed zasvar hiih tsonh duudna.
     * @param integer $id
     */
    public function edit($id = 0,$response) {
        $content = \MBM\ADMIN\Content\Models\AdminContent::instance()->getContent($id);
        if(!$content)
        $response->redirect('/admin/content', $code = 302)->send();   
        
        $this->view->prependPath(DIR_ADMIN . 'Content' . DS . 'Views' . DS . TEMPLATE_ADMIN); // category module-m view hawtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminContentEdit.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('category','validation')),
            'title' => 'add category',
            'content' => $content,
            'selectedCategories' => \MBM\ADMIN\Content\Models\AdminContent::instance()->getContentCategoriesList($id),
            'allCategories' => AdminCategory::instance()->getList() ,
            'datePublish' => $content->getDatePublish()->format('Y/m/d')
             ));
    }
    
    /**
     * Contents Entity.iing object.d request.er irsen utgudiig set hiiged
     * butsaana.
     * @param Object $request
     * @param Object $content
     * @return Object
     */
    public function fillData($request, $content){
        $content->setTitle($request->param("title"));
        $content->setSt($request->param("st"));
        $content->setDatePublish(\DateTime::createFromFormat("Y/m/d", $request->param("date_publish")));
        $content->setIsAdult(($request->param('is_adult') != null) ? 1 : 0);
        $content->setUseComment(($request->param('use_comment') != null) ? 1 : 0);
        $content->setContentBrief($request->param("content_brief"));
        $content->setContentBody($request->param("content_body"));
        $content->setDateCreated(new \Datetime("now"));
        return $content;
    }
    
    /**
     * Ugugdsun content id-d hargalzah category.nuudiig 
     * Catgories.in object array bolgoj butsaana.
     * @param String $contentId
     * @param Array $categories
     * @return \MBM\Entity\ContentCategories
     */
    public function fillCategoryData($contentId, $categories){
        $contentCats = array();
        $i = 0;
        foreach ($categories as $key => $value){
            $contentCats[$i] = new ContentCategories();
            $contentCats[$i]->setContentId($contentId);
            $contentCats[$i]->setCategoryId($value);
            $i += 1;
        }
        return $contentCats;
    }
    
     /**
     * Ugugdsun content id-d hargalzah photo.nuudiig 
     * Photos.in object array bolgoj butsaana.
     * @param String $contentId
     * @param Array $photos
     * @return \MBM\Entity\ContentCategories
     */
    public function fillPhotoData($contentId, $photos){
        $contentPhotos = array();
        $i = 0;
        foreach($photos as $key => $value){
            $contentPhotos[$i] = new ContentPhoto();
            $contentPhotos[$i]->setContentId($contentId);
            $contentPhotos[$i]->setPhotoId($value);
            $i += 1;
        }
        return $contentPhotos;
    }

    /**
     * Content.iig hadgalana.
     * @param Object $request
     * @param Object $response
     */
    public function save($request, $response) {
        
        //var_dump($_POST); die;
        $newContent = new Contents();
        $this->model->save($this->fillData($request, $newContent));
        \MBM\ADMIN\Content\Models\AdminContent::instance()->saveCategories($this->fillCategoryData($newContent->getId(), $request->param("categories")));
        \MBM\ADMIN\Content\Models\AdminContent::instance()->savePhotos($this->fillPhotoData($newContent->getId(), $request->param("photos")));
        $response->redirect('/admin/content', $code = 302)->send();
    }
    
    /**
     * Content.in zasvariig hadgalana.
     * @param Object $request
     * @param Object $response
     */
    public function update($request, $response){
        $editMe = $this->model->db->getRepository('\MBM\Entity\Contents')->find($request->param("id"));
        $this->model->update($this->fillData($request, $editMe));
        \MBM\ADMIN\Content\Models\AdminContent::instance()->updateCategories($editMe->getId(), $this->fillCategoryData($editMe->getId(), $request->param("categories")));
        \MBM\ADMIN\Content\Models\AdminContent::instance()->updatePhotos($editMe->getId(), $this->fillPhotoData($editMe->getId(), $request->param("photos")));
        $response->redirect("/admin/content", $code = 302)->send();
    }
    
    /**
     * Ugugdsun ID.tai content.iig ustgana.
     * @param Object $request
     * @param Object $response
     * @return string
     */
    public function delete($request, $response){
        try{
            $deleteMe = $this->model->db->getRepository('\MBM\Entity\Contents')->find($request->param("id"));
            $this->model->delete($deleteMe);
            return "#".$request->param("id");
        }catch(Exception $e){
            return -1;
        }
    }
    
    public function addPhoto()
    {
        MBM\Lib\UploadHandler::instance()->post(); 
        //File::instance()->upload();
    }
}
