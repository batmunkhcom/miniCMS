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
class ObjectForm extends \F\Form {

    public $form;

    public function __construct($name = 'object', $configure = array()) {

        $form = new \F\Form($name, $configure);

        //object iin obtion uudiig avav.
        //$obj_options[group_name][form_tag][id] = title;
        $obj_options = \Option::getAllGroupNamesToArray('object');


        $form->addElement(__('Select category'), 'categories[]', 'html', array(), array(), \Category::categoriesMultiSelect());

        $form->addElement(__('Select status'), 'st', 'select', array(
            'class' => 'form-control',
            'value' => st_array()
                ), array());

        $form->addElement(__('Is featured?'), 'is_featured', 'select', array(
            'class' => 'form-control',
            'value' => array(
                0 => __('No'),
                1 => __('Yes')
            )
                ), array());

        $form->addElement(__('Is sale?'), 'is_sale', 'select', array(
            'class' => 'form-control',
            'value' => array(
                0 => __('No'),
                1 => __('Yes')
            )
                ), array());

        $form->addElement(__('Use photo'), 'use_photo', 'checkbox', array(
            'class' => 'form-control',
            'value' => 1,
            'onclick' => "$('#element_photo').toggle();"
                ), array(), '');

        $form->addElement(__('Object photo'), 'photo', 'input', array(
            'class' => 'form-control',
            'value' => files('photo', 'name'),
            'type' => 'file'
                ), array());


        $form->addElement(__('Date to publish'), 'date_publish', 'datetime', array(
            'class' => 'form-control',
            'value' => date("Y-m-d H:i"),
            'size' => 16,
            'readonly' => 'readonly'
                ), array());


        $form->addElement(__('Object name'), 'name', 'input', array(
            'class' => 'form-control',
            'value' => post('name')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));

        $form->addElement(__('Measure value'), 'measure_value', 'input', array(
            'class' => 'form-control',
            'value' => post('measure_value')
                ), array(
            'is_required' => 1,
            'minlength' => 1
        ));

        $form->addElement(__('Measure name'), 'measure_name', 'select', array(
            'class' => 'form-control',
            'value' => get_all_measure()
                ), array());

        $form->addElement(__('Price per measure'), 'price_per_measure', 'input', array(
            'class' => 'form-control',
            'value' => post('price_per_measure')
                ), array(
            'is_required' => 1,
            'minlength' => 1
        ));

        $form->addElement(__('Sale price'), 'price_sale', 'input', array(
            'class' => 'form-control',
            'value' => post('price_sale')
                ), array());

        $form->addElement(__('Price total'), 'price_total', 'input', array(
            'class' => 'form-control',
            'value' => post('price_total')
                ), array());

        //objectiin option uudiig hevelne
        //$obj_options[group_name][form_tag][id] = title;
        foreach ($obj_options as $group_name => $v) {
            foreach ($obj_options[$group_name] as $form_tag => $val) {
                switch ($form_tag) {
                    case 'select':
                        $form->addElement(__($group_name), 'options[' . $group_name . ']', 'select', array(
                            'class' => 'form-control',
                            'value' => $obj_options[$group_name][$form_tag]
                                ), array());
                        break;
                    default:
                        foreach ($obj_options[$group_name][$form_tag] as $id => $value) {
                            $form->addElement(__($value), 'options[' . $id . ']', $form_tag, array(
                                'class' => 'form-control',
                                'value' => post($value)
                                    ), array());
                        }
                        break;
                }
            }
        }

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

        $form->addElement('', 'add_object', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Add object')
        ));

        $this->form = $form;
        return $form;
    }

}
