<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Lib;
use \MBM\ADMIN\Web\Controllers\Web;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Loader {
    
    public $config;

    public function __construct() {
         /**
         * config settings iig duudna
         */
        $this->config  = \Symfony\Component\Yaml\Yaml::parse(DIR_CONFIG . 'settings.yml');
    }

    public static function instance() {

        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
    
    /**
     * miniCms suusan esehiig shalgana
     * @return boolean
     */
    public function isInstalled(){
        
        return $this->config['installed'];
    }

    public function route() {

        /**
         * route ehleh
         */
        $klein = new \Klein\Klein(null,$this);
        
        /**
         * miniCMS installdaagui bol installation huudasruu usrene
         */        
       $klein->respond('!@^/installation', function($request, $response,$service,$app) {
           
         if(!$app->isInstalled()){
           $response->redirect("/installation", $code = 200)->send(); 
         }
         });
                                
       /**
        *  buh admini module iig avah
        */
        $modules = $this->getAllModules(DIR_ADMIN);
                
        foreach ($modules as $k => $v) {
            require_once DIR_ADMIN . $v . DS . 'route.php';
        }
        
        /**
         *   buh app module iig avah
         */
        $modules = $this->getAllModules(DIR_APP);        
        foreach ($modules as $k => $v) {
            require_once DIR_APP . $v . DS . 'route.php';
        }
        
        
        /**
         * aldaa 404  ...
         */  
       $klein->respond(function ($request, $response) {
           \MBM\Lib\Error::instance()->_404();           
           exit();
         });
         
        $klein->dispatch();
    }

    /**
     * DIR_MODULE dotorhi buh folderiig avah
     * 
     * @return array Buh folder neriig array bolgoj butsaana
     *  */
    public function getAllModules($dir_app) {

        return $modules = Dir::getAllDirectories($dir_app);
    }
    
    /**
     * System iin version
     * 
     * @return strinh System iin huvilbariin butsaana
     *  */
    public function getVersion() {

        return $this->config['system']['version'];
    }
    
    /**
     * System iin copyright
     * 
     * @return strinh System iin copyright butsaana
     *  */
    public function getCopyright() {

        return $this->config['system']['copyright'];
    }
 
    /**
     * 
     * @return strinh System iin copyright butsaana
     *  */
    public function get($param) {
        
        return $this->config[$param];
    }
            
}