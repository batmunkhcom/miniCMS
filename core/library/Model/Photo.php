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

    /**
     * DROPZONE ii photo nuudiig update hiine.
     *
     * @param string $code Photo nuudiin code-d uguh utga
     * @param string $prefix Dropzone oor orson file uud code urdaa module iin nereer prefix avch hadgalagdana. modulename_sessionid helbereer
     */
    public static function updatePhotoCodesBySession($code = '', $prefix = '') {

        global $db;
        $photos = db_unit($db, 'Photo');

        $photos->select(array(
            'code' => $prefix . session_id()
                ), "code=:code");

        foreach ($photos as $photo) {
            $_photo = $db->fetchById($photo->id);
            $_photo->code = $code;
            $db->registerDirty($_photo);

            unset($_photo);
        }

        return $db->commit();
    }

}
