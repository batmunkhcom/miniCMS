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
 * @author     ULAMBAYAR CHULUUNBAATAR <ulmbrsos@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Photo\Controllers;
use \MBM\Lib\Language;
use \MBM\Entity\Photos;
use \Symfony\Component\Yaml\Yaml;
use \MBM\ADMIN\Photo\Models\AdminPhoto as AdminPhotoModel;
class AdminPhoto extends \MBM\Lib\Controller {
    
    
    private $config;
    private $directory;
    
    public function __construct($template_dir) {
        
        parent::__construct($template_dir);
        $this->config = Yaml::parse(DIR_ADMIN . 'Photo/config.yml');        
        $this->directory = DIR_MEDIA.$this->config['directory'];
    }
    
    public static function instance() {

        static $instance = null;
        if (null === $instance) {
            $instance = new static(DIR_TEMPLATE . 'flatlab' . TEMPLATE_ADMIN);
        }
        return $instance;
    }

    /**
     * gallery list.
     */
    public function lists() {

        $this->view->prependPath(DIR_ADMIN . 'Photo' . DS . 'Views' . DS . TEMPLATE_ADMIN); // Photo module-m view havtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminPhotoList.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('photo')),
            'title' => 'photo list',
            'allPhotos' => $this->model->getArrayList("\MBM\Entity\Photos"),
            'sessName' => \MBM\Lib\Auth::instance()->getSession()));
    }
    
    /**
     * gallery add.
     */
    public function add(){
        $this->view->prependPath(DIR_ADMIN . 'Photo' . DS . 'Views' . DS . TEMPLATE_ADMIN); 
        $this->view->loadTemplate('AdminPhotoAdd.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('photo')),
            'title' => 'photo list',
            'sessName' => \MBM\Lib\Auth::instance()->getSession()));
    }
    /**
     * photo nemeh, ustgah, list -g bugdiig hiih tsonhiig duudna
     */
     public function index() {

        $this->view->prependPath(DIR_ADMIN . 'Photo' . DS . 'Views' . DS . TEMPLATE_ADMIN); // Photo module-m view havtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminPhoto.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('photo')),
            'sessName' => \MBM\Lib\Auth::instance()->getSession()));
    }
        
     /*
      * zurgiig hadgalna   ajax-r post huselt orj irne urdung json-r butsaana
      */   
        public function post($print_response = true)
    {
            //var_dump($_FILES); die;
        $storage = new \Upload\Storage\FileSystem($this->directory);
 
        $file = new \Upload\File('file', $storage);
       
        $old_filename = $file->getNameWithExtension();     
        $new_filename = uniqid().time();
        $file->setName($new_filename);
         
        $file->addValidations(array( new \Upload\Validation\Mimetype($this->config['type']),
                                     new \Upload\Validation\Size($this->config['size'])
                                   ));

//        $data = array(
//            'name'       => $file->getNameWithExtension(),
//            'extension'  => $file->getExtension(),
//            'mime'       => $file->getMimetype(),
//            'size'       => $file->getSize(),
//            'md5'        => $file->getMd5(),
//            'dimensions' => $file->getDimensions()
//        );
        
       $referer = $this->getReferer();
        
        //var_dump($referer); die;
       $module = (array_key_exists(4,$referer)) ? $referer[4] : '';
                
            $data = array(
                            'name' => $file->getNameWithExtension(),
                            'size' => $file->getSize(),
                            'url'  => 'media/images/'.$file->getNameWithExtension(),
                            "thumbnailUrl" => 'media/images/thumbnail/'.$file->getNameWithExtension(),
                            "deleteUrl" => "admin/photo/delete/",
                            "deleteType" => "DELETE",
                            "mimeType"=>$file->getMimetype(),
                            "type"=>$module,
                            );
            

                           
       if ($file->validate() === true) 
          {                
                 // Success!
                $file->upload();
                
                //save to data base
                $id = AdminPhotoModel::instance()->savePhoto($data);
                $data['id'] = $id;
                $data['deleteUrl'] .= $id;
                $this->thumbnail($data['name']);                   
                return $this->generate_response(array('files' => array($data)),$print_response);
          } 
       else
          {
                // Fail!
            $error=$file->getErrors();
           
            $errors = array(
                                'name'  => $old_filename,
                                'size'  => $file->getSize(),
                                'error' => Language::get((string)$error[0])
                            );
             return $this->generate_response(array('files' => array($errors)),$print_response);
        }
    }
    /*
     * zurgiin jagsaaltiig json-r butsaana, ajax huselt orj irne
     */
    public function get()
    {
        
        $referer = $this->getReferer();
        
        //var_dump($referer); die;
       $module = (array_key_exists(4,$referer)) ? $referer[4] : '';
       $action = (array_key_exists(5,$referer)) ? $referer[5] : '';
           $id = (array_key_exists(6,$referer)) ? $referer[6] : '';
           
        switch($module.'/'.$action)
        {
           case 'photo/':  
               $allPhoto = AdminPhotoModel::instance()->getList();
                   break;
           
          case 'content/edit':  
              
              $allPhoto = AdminPhotoModel::instance()->query("select p from \MBM\Entity\ContentPhoto cp inner join \MBM\Entity\Photos p  WHERE cp.photoId = p.id AND cp.contentId=".$id);
                   break;   
                 default:
                           $this->generate_response(array('files' => null));
                  return;
        }

        
        if($allPhoto[0]==null)
         $allPhoto=array();
        
        $response = array();
        foreach ($allPhoto as $key => $photo) {
            
        $response[$key] = array(
                            "id" => $photo['id'],
                            "name" => $photo['name'],
                            "size" => $photo['filesize'],
                            "url"  => $photo['path'],
                            "thumbnailUrl" => $this->directory."thumbnail/".$photo['name'],
                            "deleteUrl" => "admin/photo/delete/".$photo['id'],
                            "deleteType" => "DELETE"
                            );
        }
        
        $this->generate_response(array('files' => $response));
    }
    
    private function getReferer()
    {
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
        $referer = rtrim($referer, '/');
        $referer = filter_var($referer, FILTER_SANITIZE_URL);
        return explode('/', $referer);
    }

    /**
     * zurgiig ustgaad ur dung json-r butsaana, ajax huselt orj irne
     * @param int $id zurgiin id
     */
    public function delete($id,$print_response)
   {
        
           $photo = AdminPhotoModel::instance()->getById($id);
           
           $photo_name = $photo->getName();
           $path = $this->directory.$photo_name;
           $tpath = $this->directory.'thumbnail/'.$photo_name;
           
           try
           {
             unlink($path);                             
             unlink($tpath);
           
             $response = array($photo_name => true);
           
             AdminPhotoModel::instance()->delete($photo);
               
           } catch (Exception $ex) 
           {
               $response[$photo_name] = false;
           }
                                  
           return $this->generate_response(array('files' => array($response)),$print_response);
   }

    /**
     * array-g json-ruu hurwuuleed json butsaana
     * @param array $content
     */
    private function generate_response($content,$print_response = true) {
         
      if($print_response)
      {
        header('Vary: Accept');
        if (isset($_SERVER['HTTP_ACCEPT']) && (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)) 
        {
           header('Content-type: application/json');
        } 
        else 
        {
            header('Content-type: text/plain');
        }
        $json = json_encode($content);
        
        echo $json;
      }
      
      else {
         return $content['files'][0];
      }
    }
    
    /**
     * zurgiig jijig huwilbariig uusgeed thumbnail hawtsand hadgalna
     * @param string $image zurgiin path
     */
    private function thumbnail($image)
    {
        // Initialization of layers you need
        $layer = \PHPImageWorkshop\ImageWorkshop::initFromPath($this->directory . $image);
        // resize pingu layer
        $layer->resizeInPixel(null, 60, true);
        // Saving the result in a folder
        $layer->save($this->directory.'thumbnail',$image, false, null, 95);
    }
    
   /**
    * json-r aldaanii medeelel butsaana
    * @param type $error
    * @return json response 
    */
    private function generate_error_response($error){
                    $errors = array(
                                'name'  => $old_filename,
                                'size'  => $file->getSize(),
                                'error' => Language::get($error)
                            );
             return $this->generate_response(array('files' => array($errors)));
    }
    
    
}
