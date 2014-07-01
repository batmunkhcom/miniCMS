<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MBM\Extentions\Doctrine;

/**
 * miniCMS v3 iin Model iig generate hiihed ashiglagdana. 
 * m_categories iig Categories bolgoj export hiine
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
use \Doctrine\ORM\Event\LoadClassMetadataEventArgs;

class EntityPrefix {

    protected $prefix = 'm_';

    public function __construct($prefix) {
        
        if(substr($prefix, -1) == '_'){
            $prefix = substr($prefix, 0,-1);
        }
        $prefix{0} = strtoupper($prefix{0});
        $this->prefix = (string) $prefix;
    }

    //table iin prefix
    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs) {
        $classMetadata = $eventArgs->getClassMetadata();
        $classMetadata->namespace =  "MBM\Entity";
        $classMetadata->name =  preg_replace('/'.$this->prefix.'/', '', $classMetadata->name, 1);
//        $classMetadata->rootEntityName = trim($classMetadata->rootEntityName,$this->prefix);

        echo $classMetadata->rootEntityName.'-'.$classMetadata->name."\n";
//        print_r($classMetadata); die();
    }

}
