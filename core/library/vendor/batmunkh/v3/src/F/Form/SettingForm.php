<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace F\Form;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage .
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class SettingForm extends \F\Form {

    public $form;

    public function __construct($name = 'setting', $configure = array()) {

        $form = new \F\Form($name, $configure);


        $form->addElement(__('Setting name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));

        $form->addElement(__('Setting value'), 'value', 'input', array(
            'class' => 'form-control',
            'value' => post('value')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));
        $this->form = $form;
        return $form;
    }

}
