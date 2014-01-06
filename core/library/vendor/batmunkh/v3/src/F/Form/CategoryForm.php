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
                ), array(
            'minlength' => 2
        ));
        $form->addElement(__('Code'), 'code', 'input', array(
            'class' => 'form-control',
            'value' => post('code')
                ), array(
            'is_required' => 1,
            'minlength' => 2,
            'maxlength' => 5
        ));
        $form->addElement(__('Parent category'), 'category_id', 'select', array(
            'class' => 'form-control',
            'value' => \Category::formOptions()
        ));
        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'checkbox form-control',
            'value' => 1
                ), array(
            'minlength' => 1
        ));
        $form->addElement(__('Is external'), 'is_external', 'checkbox', array(
            'class' => 'checkbox form-control',
            'value' => 1,
            'onclick' => "$('#element_external_url').toggle();"
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

}
