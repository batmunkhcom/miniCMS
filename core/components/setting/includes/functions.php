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
       
        set_flash(__('Valid form submition'), 'info');
    } else {
        set_flash(__('Invalid form submition'), 'error');
    }
    header("Location: " . get_url('admin_setting_list'));
}

/**
 * Setting form uusgeh
*/
function setting_form() {
    $form = new F\Form\SettingForm('setting');
}

/**
 * Tohirgoog hadgalah function
 *
 * @param string $setting_type Tohirgoonii turul
 *
 */
function get_all_setting_value($setting_type = 'default') {
    global $db;

    $setting_db = db_unit($db,'Setting');

    $setting = new D\Model\Setting(array(
        'name' => '',
        'value' => '',
        'type' => $setting_type
    ));
}
