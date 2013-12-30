<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
function setting_save() {

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
