<?php

$form = new F\Form\ContentForm();
if ($form->isValid('content')) {
    $template->set('is_valid', 'yesss');


    //category iin baruun zuuniig todorhoiloh

    $content_db = db_unit($db, 'Content');
    $content = new D\Model\Content(
            array(
        'parent_id' => post(''),
        'user_id' => get_logged_user_id(),
        'code' => post('code'),
        'st' => post(''),
        'content_type' => post(''),
        'title' => post(''),
        'content_brief' => post(''),
        'content_body' => post(''),
        'use_comment' => post(''),
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

    set_flash(__('Valid form submition'), 'info');
    $session->clearKey('content');
    header("Location: " . get_url('admin_content_list'));
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_content_new'));
