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
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Photo extends D\Model\Photo {

    public static function fetchAll() {

        global $db;

        $photo_mapper = db_unit($db, 'Photo');
        $photos = $photo_mapper->fetchAll();

        return $photos;
    }

    /**
     * DROPZONE ii photo nuudiig update hiine.
     *
     * @param string $code Photo nuudiin code-d uguh utga
     * @param string $prefix Dropzone oor orson file uud code urdaa module iin nereer prefix avch hadgalagdana. modulename_sessionid helbereer
     */
    public static function updatePhotoCodesBySession($code = '', $prefix = '') {

        global $db;
        $photos_mapper = db_unit($db, 'Photo');

        $photos = $photos_mapper->select(array(
            'code' => 'delete_' . $prefix . '_' . session_id()
                ), "code=:code");

        foreach ($photos as $photo) {
            $_photo = $db->fetchById($photo->id);
            $_photo->code = $code;
            $photos_mapper->registerDirty($_photo);

            unset($_photo);
        }

        $command = $photos_mapper->commit();

        return $command;
    }

}
