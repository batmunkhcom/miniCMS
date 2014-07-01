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
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
use \Doctrine\ORM\Event\LoadClassMetadataEventArgs;

class TablePrefix {

    protected $prefix = 'm_';

    public function __construct($prefix) {
        $this->prefix = (string) $prefix;
    }

    //table iin prefix
    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs) {
        $classMetadata = $eventArgs->getClassMetadata();
        $classMetadata->setTableName(str_replace($this->prefix, "", $classMetadata->getTableName()));
        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadataInfo::MANY_TO_MANY) {
                $mappedTableName = $classMetadata->associationMappings[$fieldName]['joinTable']['name'];
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = str_replace($this->prefix, "", $mappedTableName);
            }
        }
    }

}
