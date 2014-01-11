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
 * @package    F
 * @subpackage Form
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class ContentForm extends \F\Form {

    public $form;

    public function __construct($name = 'content', $configure = array()) {

        $form = new \F\Form($name, $configure);

        $form->addElement(__('Name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'minlength' => 2,
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));
        $form->addElement(__('Title'), 'title', 'input', array(
            'class' => 'form-control',
            'value' => post('title')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));
        $form->addElement(__('Use comment'), 'use_comment', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1
                ), array(
            'minlength' => 1
        ));
        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1
                ), array(
            'minlength' => 1
        ));
        $form->addElement(__('Content brief'), 'content_brief', 'textarea', array(
            'class' => 'form-control',
            'value' => post('content_brief')
                ), array(
            'is_required' => 0
        ));
        $form->addElement(__('Content body'), 'content_body', 'wysiwyg', array(
            'class' => 'form-control',
            'value' => post('content_body'),
            'style' => 'z-index:1010;'
                ), array(
            'is_required' => 0
        ));
        $form->addElement('', 'add_content', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Add content')
        ));


        $this->form = $form;
        return $form;
    }

}
