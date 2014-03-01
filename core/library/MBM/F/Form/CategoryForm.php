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

    /**
     * CategoryForm uusgeh
     *
     * @param string $name Form iin ner
     * @param array $configure Form iin tohirgoo. attribute bolon busad medeelliig aguulna
     *
     * @return object Form obj iig butsaana
     */
    public function __construct($name = 'category', $configure = array()) {

        $form = new \F\Form($name, $configure);

        $form->addElement(__('Name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));
        $form->addElement(__('Parent category'), 'parent_id', 'select', array(
            'class' => 'form-control',
            'value' => array(0 => __('Set as main')) + \Category::formOptions()
        ));

        $form->addElement(__('Select status'), 'st', 'select', array(
            'class' => 'form-control',
            'value' => st_array()
                ), array());

        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'checkbox form-control',
            'value' => 1
                ), array(
        ));
        $form->addElement(__('Is external'), 'is_external', 'checkbox', array(
            'class' => 'checkbox form-control',
            'value' => 1,
            'onclick' => "$('#element_external_url').toggle();$('#element_target').toggle();"
        ));
        $form->addElement(__('External URL'), 'external_url', 'input', array(
            'class' => 'form-control',
            'value' => post('external_url')
        ));
        $form->addElement(__('Link target'), 'target', 'input', array(
            'class' => 'form-control',
            'value' => post('target')
        ));
        $form->addElement(__('Module'), 'module', 'input', array(
            'class' => 'form-control',
            'value' => post('module')
                ), array(
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
