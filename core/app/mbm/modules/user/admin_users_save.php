<?php

$form = new F\Form\UsersForm();
if ($form::isValid('user')) {
    $template->set('is_valid', 'yesss');


    //category iin baruun zuuniig todorhoiloh

    $category_db = new D\Model\Repository\UnitOfWork(
            new D\Mapper\UserMapper($db, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage
    );
    $category = new D\Model\Category(
            array(
        'user_id' => post(''),
        'defth' => post(''),        
        'lft' => post(''),
        'rgt' =>  post(''),
        'code' => post(),
        'st' => post(),
        'role' => post(''),
        'email' => post(''),
        'username' => post(''),
        'password' => post(''),
        'password_tmp' => post(''),
        'firstname' => post(''),
        'lastname' => post(''),
        'phone' => post(''),
        'gender' => post(''),
        'birthday' => post(''),
        'city_birth' => post(''),
        'city_living' => post(''),
        'address_billing' => post(''),
        'address_shipping' => post(''),
        'website' => post(''),
        'profile_hits' => post(''),
        'token' => post(''),
        'secret_key' => post(''),
        'default_timezone' => post(''),
        'dafault_lang' => post(''),
        'default_layout' => post(''),
        'date_created' => post(''),
        'date_password_secret' => post('')
            )
    );

    set_flash(__('Valid form submition'), 'info');
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_content_new'));