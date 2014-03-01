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
class UserForm extends \F\Form {

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

        $form->addElement(__('Firstsname'), 'firstname', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));
        $form->addElement(__('Lastname'), 'lastname', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));

        $form->addElement(__('Email'), 'email', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'required' => 'true'
                ), array(
            'minlength' => 10
        ));

        $form->addElement(__('Username'), 'username', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'required' => 'true'
                ), array(
            'minlength' => 5
        ));

        $form->addElement(__('Password'), 'password', 'password', array(
            'class' => 'form-control',
            'value' => post('name'),
            'type' => 'password',
            'minlength' => 2,
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));

        $form->addElement('', 'add_category', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Register')
        ));


        $this->form = $form;
        return $form;
    }

}
