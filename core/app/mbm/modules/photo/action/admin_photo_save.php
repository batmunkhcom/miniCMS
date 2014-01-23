<?php

define("MEDIA_PHOTO_MAX_WIDTH", 980);
define("MEDIA_PHOTO_MAX_HEIGHT", 300);
define("MEDIA_PHOTO_SAVE_ORIGINAL", 1);
define("MEDIA_PHOTO_SAVE_ORIGINAL_PATH", CONTENT_PHOTO_SAVE_ORIGINAL_PATH);


//photo manage hiih.
$file_path = DIR_WWW . DIR_MEDIA . 'photos' . DS;
$new_filename = uniqid() . '.' . getFileExtension(files('file', 'name'));

//zuvshuursun image type mun bol
if (in_array(exif_imagetype(files('file', 'tmp_name')), array(
            //http://www.php.net/exif_imagetype
            'IMAGETYPE_GIF' => 1,
            'IMAGETYPE_JPEG' => 2,
            'IMAGETYPE_PNG' => 3
        ))) {

    //upload hiij bui zurag
    $photo = PHPImageWorkshop\ImageWorkshop::initFromPath(files('file', 'tmp_name'));
    if ($photo->getWidth() > (int) MEDIA_PHOTO_MAX_WIDTH && (int) MEDIA_PHOTO_MAX_WIDTH > 0) {
        $new_with = (int) MEDIA_PHOTO_MAX_WIDTH;
    } else {
        $new_with = $photo->getWidth();
    }
    if ($photo->getHeight() > (int) MEDIA_PHOTO_MAX_HEIGHT && (int) MEDIA_PHOTO_MAX_HEIGHT > 0) {
        $new_height = (int) MEDIA_PHOTO_MAX_HEIGHT;
    } else {
        //urguniig tootsoolno.
        $new_height = (int) round(($photo->getHeight() * MEDIA_PHOTO_MAX_WIDTH) / ($photo->getWidth()));
    }

    $photo->resizeInPixel($new_with, $new_height, true);

    //stamp zurag
    $photo->save(DIR_WEB . $file_path, $new_filename, false, null, 95, false);
    if ((int) MEDIA_PHOTO_SAVE_ORIGINAL == 1) {
        $photo2 = PHPImageWorkshop\ImageWorkshop::initFromPath(files('file', 'tmp_name'));
        $photo2->save(DIR_DATA . MEDIA_PHOTO_SAVE_ORIGINAL_PATH, $new_filename, false, null, 100, false);
    }
    $photo_path = '//' . DOMAIN . DS . $file_path . $new_filename;
} else {
    set_flash(__('Invalid image type. Only JPG/GIF/PNG allowed.'), 'error');
    die();
}

if (post_exists('module')) {
    $code = post('module') . '_';
}
$code .= session_id();

//content nemeh
//$photo_db = db_mapper($db, 'Object');
$photo_db = new \D\Mapper\PhotoMapper($db, new \D\Model\Collection\EntityCollection);
$photo = new D\Model\Photo(
        array(
    'user_id' => get_logged_user_id(),
    'code' => $code,
    'path' => $photo_path,
    'st' => 'active',
    'mimetype' => files('file', 'type'),
    'filesize' => files('file', 'size'),
    'height' => $new_height,
    'width' => $new_with,
    'domain' => DOMAIN,
    'views' => 0,
    'hits' => 0,
    'downloads' => 0,
    'date_created' => $date_time,
    'date_expire' => $date_time->addYears(10)
        )
);
$last_insert_id = $photo_db->save($photo);
die();
