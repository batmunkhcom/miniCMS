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
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class CategoryForm extends \F\Form {

    public $form;

    public function __construct($name = 'category', $configure = array()) {

        $form = new \F\Form($name, $configure);

        $form->addElement(__('Name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'minlength' => 2,
            'required' => 'true'
        ));
        $form->addElement(__('Code'), 'code', 'input', array(
            'class' => 'form-control',
            'value' => post('code')
        ));
        $form->addElement(__('Parent category'), 'category_id', 'select', array(
            'class' => 'form-control',
            'value' => \Category::formOptions()
        ));
        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1
        ));
        $form->addElement(__('Is external'), 'is_external', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1,
            'onclick' => "jQuery('#element_external_url').toggle();"
        ));
        $form->addElement(__('External URL'), 'external_url', 'input', array(
            'class' => 'form-control',
            'value' => post('external_url')
        ));
        $form->addElement('', 'add_category', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Add category')
        ));


        $this->form = $form;
        return $form;
    }

    /*

      public function __construct($form_name = 'category') {

      $form = new \F\PFBC\Form($form_name);
      $form->configure(
      array(
      'action' => get_url('admin_category_save')
      )
      );
      $form->addElement(new \F\PFBC\Element\Hidden('form', 'SideBySide'));
      $form->addElement(new \F\PFBC\Element\HTML('<legend>' . __('Add new category') . '</legend>'));
      $form->addElement(new \F\PFBC\Element\Hidden('form_name', $form_name));
      $form->addElement(new \F\PFBC\Element\Textbox(__('Name') . ":", "name", array(
      "required" => 1,
      "longDesc" => __('Name field is required'),
      'class' => 'input-sm'
      )));
      $form->addElement(new \F\PFBC\Element\Textbox(__('Code') . ":", "code", array(
      "required" => 1,
      "longDesc" => __('Code field is required'),
      'class' => 'input-sm'
      )));
      $form->addElement(new \F\PFBC\Element\Select(__('Status') . ":", "st", array(
      'inactive' => __('Inactive'),
      'active' => __('Active'),
      'pending' => __('Pending'),
      ), array(
      'class' => 'input-sm'
      )));
      $form->addElement(new \F\PFBC\Element\Checkbox(__('Is external?') . ":", "is_external", array(
      'yes' => 1,
      ), array(
      'class' => 'input-sm',
      'onclick' => '$("#external_url").toggle()'
      )));
      $form->addElement(new \F\PFBC\Element\Checkbox(__('Is 18+?') . ":", "is_external", array(
      'value' => 1
      ), array(
      'class' => 'input-sm'
      )));
      $form->addElement(new \F\PFBC\Element\Textbox(__('External URL') . ":", "external_url", array(
      'class' => 'input-sm hidden'
      )));
      $form->addElement(new \F\PFBC\Element\Select(__('Parent Category') . ":", "category_id", \Category::formOptions(0)
      , array(
      'class' => 'input-sm'
      )));

      js_set_loadfile('/assets/ckeditor/ckeditor.js', 8);
      js_set_loadfile('/assets/tiny_mce/tiny_mce.js', 9);
      $form->addElement(new \F\PFBC\Element\TinyMCE("TinyMCE:", "TinyMCE"));
      $form->addElement(new \F\PFBC\Element\CKEditor("CKEditor:", "CKEditor"));
      //        $form->addElement(new \F\PFBC\Element\Captcha("Captcha:"));
      $form->addElement(new \F\PFBC\Element\Button(__("Save category")));
      $form->addElement(new \F\PFBC\Element\Button(__('Cancel'), "button", array(
      "onclick" => "history.go(-1);"
      )));

      $this->form = $form;

      return $form;
      }
     *      */
}
