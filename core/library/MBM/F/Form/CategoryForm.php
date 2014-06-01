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
    public function __construct($name = 'category', $configure = array(),$parameter=null) {
      //  var_dump($parameter->name); die;
        $form = new \F\Form($name, $configure);
        
        $form->addElement(__('id'), 'id', 'hidden', array(
            'class' => 'form-control',
            'type' => 'hidden',
            'value' => $parameter->id,
         ));
        
        $form->addElement(__('Name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' =>  $parameter->name,
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));
        $form->addElement(__('Parent category'), 'parent_id', 'select', array(
            'class' => 'form-control',
            'selected' => $parameter->parent_id,
            'value' => array(0 => __('Set as main')) + \Category::formOptions()
        ));

        $form->addElement(__('Select status'), 'st', 'select', array(
            'class' => 'form-control',
            'selected'=>$parameter->st,
            'value' => st_array()
                ), array());

        $form->addElement(__('Is 18+'), 'is_adult', 'checkbox', array(
            'class' => 'checkbox form-control',
            ($parameter->is_adult==1) ? 'checked' : ''=>'',
            'value' => 1
                ), array(
        ));

    
       $form->addElement(__('Is external'), 'is_external', 'checkbox', array(
            'class' => 'checkbox form-control',
            ($parameter->is_external==1) ? 'checked' : ''=>'',
            'value' => 1,
            'onclick' => "$('#element_external_url').toggle();$('#element_target').toggle();"
        ));
      
        $form->addElement(__('External URL'), 'external_url', 'input', array(
            'class' => 'form-control',
            'value' => ($parameter->external_url) ? $parameter->external_url : post('external_url')
        ));
        $form->addElement(__('Link target'), 'target', 'input', array(
            'class' => 'form-control',
            'value' => post('target')
        ));
        $form->addElement(__('Module'), 'module', 'input', array(
            'class' => 'form-control',
            'value' => ($parameter->module) ? $parameter->module : post('module')
                ), array(
        ));
        $form->addElement('', 'add_category', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => ($parameter) ? __('Save') : __('Add category')
        ));


        $this->form = $form;
        return $form;
    }

}
