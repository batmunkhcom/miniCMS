<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Lib;

class Model {

    /**
     * utga damjuulahgui bol this->$db -d default connection object-g olgono
     * 
     * @param type $connection_name config-n database.yml dororh connectionii ner. 
     */
    function __construct($connection_name = 'default') {
        $this->db = $this->getConnection($connection_name);
    }

    /**
     * Undesn holboltoos(connection) uur holbolt ashiglah bol ene funktsiig ashiglana. Ene ni 
     * negen zereg olon db server ruu holbogdoh bolomjiig burduulj ugnu.
     * 
     * @param string $connection_name config-n database.yml dotorh connection-nii ner 
     */
    public function getConnection($connection_name = 'default') {

        //load config file
        $dbParams = \Symfony\Component\Yaml\Yaml::parse(DIR_CONFIG . 'database.yml');

        $classLoader = new \Doctrine\Common\ClassLoader('Entity', DIR_LIB . 'Entity'.DS);
        $classLoader->register();

        $classLoader = new \Doctrine\Common\ClassLoader('Proxy', DIR_LIB . 'Entity' . DS . 'Proxy'.DS);
        $classLoader->register();


        // cache
        $cache = new \Doctrine\Common\Cache\ArrayCache();
        // annotation reader
        $annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();

        // cached annotation reader
        $cachedAnnotationReader = new \Doctrine\Common\Annotations\CachedReader($annotationReader, $cache);

        // driver chain
        $driverChain = new \Doctrine\ORM\Mapping\Driver\DriverChain();

        // annotation driver
        $annotationDriver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($cachedAnnotationReader, array(DIR_LIB . 'Entity'.DS));

        // add entity namespaces
        $driverChain->addDriver($annotationDriver, 'MBM\Entity');


        // config
        $config = new \Doctrine\ORM\Configuration();
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver(DIR_LIB . 'Entity'));
        $config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
        $config->setMetadataCacheImpl($cache);
        $config->setMetadataDriverImpl($driverChain);
        $config->setProxyDir(DIR_LIB . 'Entity' . DS . 'Proxy'.DS);
        $config->setProxyNamespace('MBM\\Entity\\Proxy');


        /**
         * zuvhun generate hiihed l ashiglagdana.
         * 
         * //event manager
        $evm = new \Doctrine\Common\EventManager;
        $entityPrefix = new \MBM\Extentions\Doctrine\EntityPrefix('m_');
        $evm->addEventListener(\Doctrine\ORM\Events::loadClassMetadata, $entityPrefix);
        $entityManager = \Doctrine\ORM\EntityManager::create($dbParams[$connection_name], $config, $evm);
         */



        $entityManager = \Doctrine\ORM\EntityManager::create($dbParams[$connection_name], $config);

        // custom datatypes (not mapped for reverse engineering)
        $entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
        $entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        return $entityManager;
    }
    
    
    public function testConnection(){
     try {
             $this->db->getConnection()->connect();
             return 'success';
         } 
     catch (\Exception $e) {
         //echo $e->getMessage();
         return $e->getCode();
         //var_dump($e); //$e;
         }
    }

        /**
     * \MBM\Config\database.yml file deer bichigdsen tohirgoonii ner ugugduh
     * buguud ugugdsun connection.oor tuhain ued togtson connection.iig
     * solino.
     * @param String $connectionName Holboltin ner.
     */
    public function setConnection($connectionName){
        $this->db = $this->getConnection($connectionName);
    }

    /**
     * Ugugdsun Entity object.iig hadaglaad id-g butsaana.
     * @param Entity $object Entity object
     */
    public function save($object) {
        $this->db->persist($object);
        $this->db->flush();
      return $object->getId();
    }
    
    /**
     * Ugugdsun Entity object.iig update hiine.
     * @param Entity $object Entity object
     */
    public function update($object) {
        $this->db->merge($object);
        $this->db->flush();
    }
    
    /**
     * Ugugdsun Entity object.iig ustagna.
     * @param Entity $object Entity object
     */
    public function delete($object) {
        $this->db->remove($object);
        $this->db->flush();
    }
    
    /**
     * Buh ugugdliig butsaana. DQL.
     * Jishee ni \MBM\Entity\Categories gj damjuulval
     *  Buh category.iig array bolgood butsaana.
     * @param String $entity entity path
     * @return array 
     */
    public function getArrayList($entity){
        $res = $this->db->createQuery("select c from ".$entity." c");
        return $res->getArrayResult();
    }
}
