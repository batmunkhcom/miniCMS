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
 * @author     JAMIYANDORJ Purevdorj <jamian1018@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\Lib;

class View {
    	function __construct($template_dir){
    	  
    	  if($template_dir) 
          $this->loader = new \Twig_Loader_Filesystem($template_dir); // template-uud aguulj bga hawtasiig templatdir-d urd ni nemj bn
          //$this->twig = new \Twig_Environment($loader, array('cache' => DIR_TEMPLATE.'cache',));  // template-g 1 udaa generate hiigeed daraa ni cache-s eesee duudna development ued ene hereggui 
          $this->twig = new \Twig_Environment($this->loader, array('cache' => false,));  
                       
        }
        /**
         * view-uudiig aguulj bgaa hawtasiig urd ni nemne
         * @param type $path view-uudiig aguulj bgaa hawtas
         */
        function prependPath($path)
        {
             $this->loader->prependPath($path); 
        }
        
        /**
         * view-ruugaa orno
         * @param type $template_name view-n ner
         */
        function loadTemplate($template_name) 
        {
            $this->template = $this->twig->loadTemplate($template_name);
        }
        
        /**
         * view-d parametruudiig damjuulaad view hewlene
         * @param type $parameter
         */
        public function render($parameter) {

            //twig ruu damjuulah parameters.
            $parameter['config'] = \MBM\Lib\Loader::instance();
 
            $parameter['factory'] = \MBM\Lib\MBMFactory::instance();
            
            $parameter['assets'] = array('admin' => 'assets/'. TEMPLATE_ADMIN.'/', 'app' => 'assets/' . TEMPLATE_APP.'/');
            
           $id = \MBM\Lib\Auth::instance()->getId();
 
            if($id)
            {
              $parameter['userInfo'] = \MBM\ADMIN\User\Models\User::instance()->getUser($id);
             // var_dump($parameter['userInfo']); die;
            }
            echo $this->template->render($parameter); 
    	
        }

}