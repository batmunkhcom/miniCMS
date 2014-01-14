<?php

$form = new F\Form\ContentForm();
if ($form->isValid('content')) {
//    print_r(post_exists('use_photo') . '..');
//    print_r($_POST);
//    die();
    if (post_exists('use_photo') && post('use_photo') == 1) {
        //photo manage hiih.
        $file_path = DIR_WWW . DIR_MEDIA . 'photos' . DS;
        $new_filename = uniqid() . '.' . getFileExtension(files('photo', 'name'));

        //zuvshuursun image type mun bol
        if (in_array(exif_imagetype(files('photo', 'tmp_name')), array(
                    //http://www.php.net/exif_imagetype
                    'IMAGETYPE_GIF' => 1,
                    'IMAGETYPE_JPEG' => 2,
                    'IMAGETYPE_PNG' => 3
                ))) {

            //upload hiij bui zurag
            $photo = PHPImageWorkshop\ImageWorkshop::initFromPath(files('photo', 'tmp_name'));
            if ($photo->getWidth() > (int) CONTENT_PHOTO_MAX_WIDTH && (int) CONTENT_PHOTO_MAX_WIDTH > 0) {
                $new_with = (int) CONTENT_PHOTO_MAX_WIDTH;
            } else {
                $new_with = $photo->getWidth();
            }
            if ($photo->getHeight() > (int) CONTENT_PHOTO_MAX_HEIGHT && (int) CONTENT_PHOTO_MAX_HEIGHT > 0) {
                $new_height = (int) CONTENT_PHOTO_MAX_HEIGHT;
            } else {
                //urguniig tootsoolno.
                $new_height = (int) round(($photo->getHeight() * CONTENT_PHOTO_MAX_WIDTH) / ($photo->getWidth()));
            }

            $photo->resizeInPixel($new_with, $new_height, true);

            //stamp zurag
            if (CONTENT_PHOTO_STAMP_ENABLE == 1) {
                //stamp image iig beldeh
                $photo_stamp = PHPImageWorkshop\ImageWorkshop::initFromPath(DIR_WEB . CONTENT_PHOTO_STAMP_IMAGE);
                $s_width = floor((int) $new_with / 10);
                $s_height = floor((int) $new_height / 10);
                if ($s_width < 32) {
                    $s_width = 32;
                }
                if ($s_height < 32) {
                    $s_height = 32;
                }
                $photo_stamp->resizeInPixel($s_width, $s_height, true);
                $photo_stamp_tmp_name = 'stam_img_' . uniqid() . '.' . getFileExtension(CONTENT_PHOTO_STAMP_IMAGE);
                $photo_stamp->save(DIR_TMP, $photo_stamp_tmp_name, false, null, 100, false);

                $photo_stamp_live = PHPImageWorkshop\ImageWorkshop::initFromPath(DIR_TMP . $photo_stamp_tmp_name);
                $photo->addLayerOnTop($photo_stamp_live, CONTENT_PHOTO_STAMP_PADDING1, CONTENT_PHOTO_STAMP_PADDING2, CONTENT_PHOTO_STAMP_POSITION);
                @unlink(DIR_TMP . $photo_stamp_tmp_name);
            }
            $photo->save(DIR_WEB . $file_path, $new_filename, false, null, 95, false);
            if ((int) CONTENT_PHOTO_SAVE_ORIGINAL == 1) {
                $photo2 = PHPImageWorkshop\ImageWorkshop::initFromPath(files('photo', 'tmp_name'));
                $photo2->save(DIR_DATA . CONTENT_PHOTO_SAVE_ORIGINAL_PATH, $new_filename, false, null, 100, false);
            }
            $photo_path = '//' . DOMAIN . DS . $file_path . $new_filename;
        } else {
            set_flash(__('Invalid image type. Only JPG/GIF/PNG allowed.'), 'error');
        }
    } else {
        $photo_path = '';
    }


    //content nemeh
    //content left/right
    if (post('parent_id') == 0) {
        $lft = get_max_left('Content', post('parent_id')) + 2;
        $rgt = $lft + 1;
        $depth = 0;
        $parent_id = 0;
    } else {

        $parent_content = \Content::fetchById(post('parent_id'));
        $lft = ($parent_content->lft + 2);
        $rgt = ($parent_content->lft + 3);
        $depth = ($parent_content->depth + 1);
        $parent_id = $parent_content->id;
    }
    //$content_db = db_mapper($db, 'Content');
    $content_db = new \D\Mapper\ContentMapper($db, new \D\Model\Collection\EntityCollection);
    $content = new D\Model\Content(
            array(
        'parent_id' => 0,
        'user_id' => get_logged_user_id(),
        'code' => post('code'),
        'photo' => $photo_path,
        'st' => post('st'),
        'content_type' => 'article',
        'title' => post('title'),
        'content_brief' => post('content_brief'),
        'content_body' => post('content_body'),
        'use_comment' => post('use_comment'),
        'session_id' => post('session_id'),
        'total_updated' => post('total_updated'),
        'views' => 0,
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'date_publish' => post('date_publish'),
        'session_time' => time(),
        'is_adult' => post('is_adult')
            )
    );
    $last_insert_id = $content_db->save($content);

    //content category nemeh
    $c_category_db = db_unit($db, 'ContentCategory');
    if (count(post('categories') > 0)) {
        foreach (post('categories') as $k => $v) {
            $c_category = new \D\Model\ContentCategory(array(
                'content_id' => $last_insert_id,
                'category_id' => $v
            ));
            $c_category_db->registerNew($c_category);
            unset($c_category);
        }
    }
    $c_category_db->commit();

    set_flash(__('Content has been created'), 'success');
    $session->clearKey('content');

    header("Location: " . get_url('admin_content_list'));
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_content_new'));
