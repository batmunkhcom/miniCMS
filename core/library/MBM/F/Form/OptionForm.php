<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
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
 * @author     SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 * @version    SVN: $Id
 */
class OptionForm extends \F\Form {

    public $form;

    public function __construct($name = 'option', $configure = array()) {

        $form = new \F\Form($name, $configure);


        $form->addElement(__('Title'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));

        $form->addElement(__('Description'), 'comment', 'input', array(
            'class' => 'form-control',
            'value' => post('comment')
                ), array()
        );

        $form->addElement(__('Group name'), 'type', 'input', array(
            'class' => 'form-control',
            'value' => post('type')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));
        
        $form->addElement(__('Form tag'), 'form_tag', 'select', array(
            'class' => 'form-control',
            'value' => form_render_tags()
                ), array());

        $form->addElement(__('Module'), 'module', 'select', array(
            'class' => 'form-control',
            'value' => get_all_codes()
                ), array());

        $form->addElement(__('Select status'), 'st', 'select', array(
            'class' => 'form-control',
            'value' => st_array()
                ), array());

        $form->addElement('', 'add_option', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Add option')
        ));

        $this->form = $form;
        return $form;
    }

}
