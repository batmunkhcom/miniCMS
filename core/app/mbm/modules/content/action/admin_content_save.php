<?php

$form = new F\Form\ContentForm();
if ($form->isValid('content')) {

    if (post_exists('use_photo') && post('use_photo') == 1) {
        $file_path = DIR_WWW . DIR_MEDIA . 'photos' . DS;
        //file upload ehlev
        $storage = new \Upload\Storage\FileSystem(DIR_WEB . $file_path);
        $file = new \Upload\File('photo', $storage);

        $new_filename = uniqid();
        $file->setName($new_filename);
        $file->addValidations(array(
            // Ensure file is of type "image/png"
            new \Upload\Validation\Mimetype('image/png'),
            new \Upload\Validation\Mimetype('image/gif'),
            new \Upload\Validation\Mimetype('image/jpeg'),
            // Ensure file is no larger than 5M (use "B", "K", M", or "G")
            new \Upload\Validation\Size('1M')
        ));

// Access data about the file that has been uploaded
        $data = array(
            'name' => $file->getNameWithExtension(),
            'extension' => $file->getExtension(),
            'mime' => $file->getMimetype(),
            'size' => $file->getSize(),
            'md5' => $file->getMd5(),
            'dimensions' => $file->getDimensions()
        );
        // Try to upload file
        try {
            // Success!
            $file->upload();
        } catch (\Exception $e) {
            // Fail!
            $errors = $file->getErrors();
            $upload_failed = 1;
        }

        if ($upload_failed != 1) {
            //photo manage hiih.
            $photo = PHPImageWorkshop\ImageWorkshop::initFromPath(DIR_WEB . $file_path . $data['name']);
            if ($photo->getWidth() > (int) CONTENT_PHOTO_MAX_WIDTH) {
                $new_with = (int) CONTENT_PHOTO_MAX_WIDTH;
            }
            if ($photo->getHeight() > (int) CONTENT_PHOTO_MAX_HEIGHT && (int) CONTENT_PHOTO_MAX_HEIGHT > 0) {
                $new_height = (int) CONTENT_PHOTO_MAX_WIDTH;
            } else {
                $new_height = null;
            }

            $photo->resizeInPixel($new_with, $new_height, false);

            if (CONTENT_PHOTO_STAMP_ENABLE == 1) {
                $photo_stamp = PHPImageWorkshop\ImageWorkshop::initFromPath(DIR_WEB . CONTENT_PHOTO_STAMP_IMAGE);
                $photo->addLayerOnTop($photo_stamp, CONTENT_PHOTO_STAMP_PADDING1, CONTENT_PHOTO_STAMP_PADDING2, CONTENT_PHOTO_STAMP_POSITION);
            }
            $photo->save(DIR_WEB . $file_path, $data['name'], false, null, 95, false);
        }
    } else {
        $data = array(
            'name' => '',
            'extension' => '',
            'mime' => '',
            'size' => '',
            'md5' => '',
            'dimensions' => ''
        );
    }
//    print_r($data);
//    echo '<hr>';
//    print_r(post('categories'));
//    echo '<hr>';
//    die();
//category iin baruun zuuniig todorhoiloh

    $content_db = db_unit($db, 'Content');
    $content = new D\Model\Content(
            array(
        'id' => '',
        'parent_id' => 0,
        'user_id' => get_logged_user_id(),
        'code' => post('code'),
        'photo' => $file_path . $data['name'],
        'st' => post('st'),
        'content_type' => 'normal',
        'title' => post('title'),
        'content_brief' => post('content_brief'),
        'content_body' => post('content_body'),
        'use_comment' => post('use_comment'),
        'session_id' => post('session_id'),
        'total_updated' => post('total_updated'),
        'views' => post(''),
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'session_time' => post(''),
        'is_adult' => post('')
            )
    );
    $content_db->registerNew($content);
    $content_db->commit();

    //content category nemeh
    if (count(post('categories') > 0)) {
        foreach (post('categories') as $k => $v) {
            $c_category_db = db_unit($db, 'ContentCategory');
            $c_category = new \D\Model\ContentCategory(array(
                'content_id' => $content->id,
                'category_id' => $v
            ));
            $c_category_db->registerNew($c_category);
            $c_category_db->commit();
            unset($c_category_db, $c_category);
        }
    }

    set_flash(__('Valid form submition'), 'info');
    $session->clearKey('content');
    header("Location: " . get_url('admin_content_list'));
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_content_new'));
