<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace F\Form;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage .
 * @author     SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 * @version    SVN: $Id
 */
class PhotoForm extends \F\Form {

    public $form;

    public function __construct($name = 'photo', $configure = array()) {

        $form = new \F\Form($name, $configure);


        $form->addElement(__('Photo'), 'photo', 'input', array(
            'class' => 'form-control',
            'value' => files('photo', 'name'),
            'type' => 'file'
                ), array());

        $this->form = $form;
        return $form;
    }

}
