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
class CategoryForm extends \F\PFBC\Form {

    public $form;

    public function __construct($form_name = 'category') {

        $form = new \F\PFBC\Form($form_name);
        $form->configure(
                array(
                    'action' => get_url('admin_category_save')
                )
        );
        $form->addElement(new \F\PFBC\Element\HTML('<legend>' . __('Add new category') . '</legend>'));
        $form->addElement(new \F\PFBC\Element\Hidden('form_name', $form_name));
        $form->addElement(new \F\PFBC\Element\Textbox(__('Title') . ":", "title", array(
            "required" => 1,
            "longDesc" => __('Title field is required')
        )));
        $form->addElement(new \F\PFBC\Element\Select(__('Status') . ":", "st", array(
            'inactive' => __('Inactive'),
            'active' => __('Active'),
            'pending' => __('Pending'),
        )));

        js_set_loadfile('/assets/ckeditor/ckeditor.js');
        js_set_loadfile('/assets/tiny_mce/tiny_mce.js');
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

}
