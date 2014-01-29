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
class LoginForm extends \F\Form {

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

        $form->addElement(__('Username'), 'username', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'minlength' => 5,
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));

        $form->addElement(__('Password'), 'password', 'input', array(
            'class' => 'form-control',
            'value' => post('name'),
            'minlength' => 5,
            'required' => 'true'
                ), array(
            'minlength' => 2
        ));

        $form->addElement('', 'loginButton', 'button', array(
            'class' => 'btn btn-success',
            'type' => 'submit',
            'value' => __('Login')
        ));


        $this->form = $form;
        return $form;
    }

}
