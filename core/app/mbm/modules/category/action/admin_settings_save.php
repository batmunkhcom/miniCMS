<?php

$form = new F\Form\SettingsForm();
if ($form::isValid('settings')) {
    $template->set('is_valid', 'yesss');


    //category iin baruun zuuniig todorhoiloh

    $category_db = new D\Model\Repository\UnitOfWork(
            new D\Mapper\SettingMapper($db, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage
    );
    $category = new D\Model\Category(
            array(
        'setting_name' => post(''),
        'setting_value' => post('')        
            )
    );

    set_flash(__('Valid form submition'), 'info');
} else {
    set_flash(__('Invalid form submition'), 'error');
//    header("Location: " . get_url('admin_category_new'));
}
//die();
header("Location: " . get_url('admin_settings_new'));