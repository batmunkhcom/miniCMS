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

//        $form->addElement(__('Select category'), 'categories[]', 'select', array(
//            'class' => 'form-control',
//            'value' => \Category::formOptions(),
//            'multiple' => 'multiple',
//            'required' => 'true'
//                ), array());
        //categories beld
        $categories = '
            <!--multiple select start-->
              <div class="row">
              <div class="col-md-12">
                  <section class="panel">
                      <div class="panel-body">
                              <div class="form-group">
                                  <label class="control-label col-md-2"> ' . __('Select categories') . '</label>
                                  <div class="col-md-10">
                                      <select multiple="multiple" class="multi-select" id="categories" name="categories[]">
                                          ';
        foreach (\Category::formOptions() as $k => $v) {
            $categories .= '<option value="' . $k . '">' . $v . '</option>';
        }
        $categories .='
                                      </select>
                                  </div>
                              </div>
        </div>
        </section>
        </div>
        </div>


        ';
        $form->addElement(__('Select category'), 'categories1[]', 'html', array(), array(), $categories);

        $form->addElement(__('Title'), 'title', 'input', array(
            'class' => 'form-control',
            'value' => post('title')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));

        $form->addElement(__('Select status'), 'st', 'select', array(
            'class' => 'form-control',
            'value' => st_array()
                ), array());

        $form->addElement(__('Date to publish'), 'date_publish', 'datetime', array(
            'class' => 'form-control',
            'value' => date("Y-m-d H:i"),
            'size' => 16,
            'readonly' => 'readonly'
                ), array());

        $form->addElement(__('Use photo'), 'use_photo', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1,
            'onclick' => "$('#element_photo').toggle();"
                ), array(), '');

        $form->addElement(__('Content photo'), 'photo', 'input', array(
            'class' => 'form-control',
            'value' => files('photo', 'name'),
            'type' => 'file'
                ), array());

        $form->addElement(__('Use comment'), 'use_comment', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1
                ), array());

        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1
                ), array());

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
