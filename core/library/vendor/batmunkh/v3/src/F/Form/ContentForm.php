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
        $form->addElement(__('Content brief'), 'content_brief', 'ckeditor', array(
            'class' => 'form-control',
            'value' => post('content_brief')
                ), array(
            'is_required' => 0
        ));
        $form->addElement(__('Content body'), 'content_body', 'ckeditor', array(
            'class' => 'form-control',
            'value' => post('content_body')
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

    /*
      public $form;

      public function __construct($form_name = 'content') {
      $form = new F\PFBC\Form($form_name);

      $form->configure(
      array(
      'action' => get_url('admin_category_save')
      )
      );
      $form->addElement(new \F\PFBC\Element\HTML('<legend>' . __('Add new content') . '</legend>'));
      $form->addElement(new \F\PFBC\Element\Hidden('form_name', $form_name));
      $form->addElement(new \F\PFBC\Element\Textbox(__('Name') . ":", "name", array(
      "required" => 1,
      "longDesc" => __('Name field is required')
      )));
      $form->addElement(new \F\PFBC\Element\Select(__('Parent content') . ":", "content_id", array(
      1 => ''
      )));

      js_set_loadfile('/assets/ckeditor/ckeditor.js', 8);
      $form->addElement(new \F\PFBC\Element\CKEditor(__('Brief info') . ":", "content_brief"));
      $form->addElement(new \F\PFBC\Element\CKEditor(__('Content body') . ":", "content_body"));
      //        $form->addElement(new \F\PFBC\Element\Captcha("Captcha:"));
      $form->addElement(new \F\PFBC\Element\Button(__("Save content")));
      $form->addElement(new \F\PFBC\Element\Button(__('Reset'), "reset", array(
      'class' => 'btn btn-danger'
      )));

      $this->form = $form;

      return $form;
      }
     */
}
