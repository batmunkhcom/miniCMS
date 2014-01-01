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
 * @subpackage .
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class SettingForm extends \F\PFBC\Form {

    public $form;

    public function SettingForm($form_name = 'setting') {
        $form = new F\PFBC\Form($form_name);

        $this->form = $form;

        return $form;
    }

}
