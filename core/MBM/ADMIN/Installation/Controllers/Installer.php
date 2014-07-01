<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Installer
 *
 * @author TUGSBAYAR Buyadaa
 */

namespace MBM\ADMIN\Installation\Controllers;

use \MBM\Lib\Language;
use Symfony\Component\Yaml\Dumper;
use MBM\ADMIN\Installation\Models\CreateSchema;

class Installer {

    public function __construct($template_dir) {
        $this->view = new \MBM\Lib\View($template_dir);
    }

    public function index($error=null, $request=null) {

        $this->view->prependPath(DIR_ADMIN . 'Installation' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('installer.twig');
        $this->view->render(array('lang' => Language::instance()->getTranslation(array('home', 'installation', 'validation', 'error')), 'error' => $error, 'request' => $request));
    }

    /**
     * database.yml deer default-ruu bichdeg function
     * @param type $request
     */
    private function writeDBConfig($request) {

        $dbParams = \Symfony\Component\Yaml\Yaml::parse(DIR_CONFIG . 'database.yml');

        $dbParams['default'] = array('host' => $request->param('dbHost'),
            'user' => $request->param('dbUser'),
            'password' => $request->param('dbPass'),
            'dbname' => $request->param('dbName'),
            'prefix' => 'm_',
            'driver' => 'pdo_mysql',
            'driverOptions' => array('1002' => 'SET NAMES utf8')
        );
        $dumper = new Dumper();
        $yaml = $dumper->dump($dbParams, 2);
        file_put_contents(DIR_CONFIG . 'database.yml', $yaml);
    }

    public function install($request, $response) {

        $this->writeDBConfig($request);

        $model = new \MBM\Lib\Model;
        $result = $model->testConnection();

        switch ($result) {
            case '1044':
            case '1045':
                $this->index('1044', $request);
                exit;
                break;
            case '1049':
                $this->index('1049', $request);
                exit;
                break;
            case '2002':
                $this->index('2002', $request);
                exit;
                break;
            case '1130':
                $this->index('1130', $request);
                exit;
                break;
            case 'success':
                $resultGen = CreateSchema::instance()->generateTables();
                
                if ($resultGen == 'SUCCESS') {
                    
                    $adminData = array("email"=>$request->adminEmail,"username"=>$request->adminUser,"password"=>$request->adminPass);
                    CreateSchema::instance()->fillData($adminData);
                    $this->installed();
                    $response->redirect("/admin", $code = 200)->send();
                    
                } else {
                    $this->index($$resultGen, $request);
                    exit;
                }
                break;
            default :
                var_dump("FAILED");
                var_dump($result);
                exit;
                break;
        }
    }

    /**
     * settings.yml file-n installed-g true bolgoh function
     */
    private function installed() {

        $dbParams = \Symfony\Component\Yaml\Yaml::parse(DIR_CONFIG . 'settings.yml');

        $dbParams['installed'] = 'true';

        $dumper = new Dumper();
        $yaml = $dumper->dump($dbParams, 2);

        file_put_contents(DIR_CONFIG . 'settings.yml', $yaml);
    }

}
