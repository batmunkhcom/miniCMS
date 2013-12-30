<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function setting_save() {

    $form = new F\Form\SettingsForm();
    if ($form::isValid('setting')) {
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
}

function setting_form() {
    $form = new F\Form\SettingForm();
}

/**
 * Tohirgoog hadgalah function
 *
 * @param string $setting_type Tohirgoonii turul
 *
 */
function get_all_setting_value($setting_type = 'default') {
    global $db;

    $setting_db = new D\Model\Repository\UnitOfWork(
            new D\Mapper\SettingMapper($db, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage
    );

    $setting = new D\Model\Setting(array(
        'name' => '',
        'value' => '',
        'type' => $setting_type
    ));
}
