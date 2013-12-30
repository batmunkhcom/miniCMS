<?php

$form = new F\Form\ContentForm();
if ($form::isValid('content')) {
    $template->set('is_valid', 'yesss');


    //category iin baruun zuuniig todorhoiloh

    $category_db = new D\Model\Repository\UnitOfWork(
            new D\Mapper\ContentMapper($db, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage
    );
    $category = new D\Model\Category(
            array(
        'content_id' => post(''),
        'user_id' => post(''),
        'code' => post(),
        'st' => post(),
        'content_type' => post(),
        'title' => post(),
        'content_brief' => post(),
        'content_body' => post(),
        'use_comment' => post(),
        'session_id' => post('session_id'),
        'total_updated' => post('total_updated'),
        'views' => post(''),
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'session_time' => post(),
        'is_adult' => post()
            )
    );

    set_flash(__('Valid form submition'), 'info');
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_content_new'));