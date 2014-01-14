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

        $form->addElement(__('Select category'), 'categories[]', 'select', array(
            'class' => 'form-control',
            'value' => \Category::formOptions(),
            'multiple' => 'multiple',
            'required' => 'true'
                ), array());
        $form->addElement(__('Select category2'), 'categories1[]', 'html', array(), array(), '
                                      <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]" style="position: absolute; left: -9999px;">
                                          <optgroup label="NFC EAST">
                                              <option>Dallas Cowboys</option>
                                              <option>New York Giants</option>
                                              <option>Philadelphia Eagles</option>
                                              <option>Washington Redskins</option>
                                          </optgroup>
                                          <optgroup label="NFC NORTH">
                                              <option>Chicago Bears</option>
                                              <option>Detroit Lions</option>
                                              <option>Green Bay Packers</option>
                                              <option>Minnesota Vikings</option>
                                          </optgroup>
                                          <optgroup label="NFC SOUTH">
                                              <option>Atlanta Falcons</option>
                                              <option>Carolina Panthers</option>
                                              <option>New Orleans Saints</option>
                                              <option>Tampa Bay Buccaneers</option>
                                          </optgroup>
                                          <optgroup label="NFC WEST">
                                              <option>Arizona Cardinals</option>
                                              <option>St. Louis Rams</option>
                                              <option>San Francisco 49ers</option>
                                              <option>Seattle Seahawks</option>
                                          </optgroup>
                                      </select>
                                      <div class="ms-container" id="ms-my_multi_select2"><div class="ms-selectable"><ul class="ms-list ms-focus" tabindex="-1"><li class="ms-optgroup-container" id="optgroup-selectable-NFC_EAST"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>NFC EAST</span></li><li class="ms-elem-selectable" id="Dallas_Cowboys-selectable"><span>Dallas Cowboys</span></li><li class="ms-elem-selectable ms-hover" id="New_York_Giants-selectable"><span>New York Giants</span></li><li class="ms-elem-selectable" id="Philadelphia_Eagles-selectable"><span>Philadelphia Eagles</span></li><li class="ms-elem-selectable" id="Washington_Redskins-selectable"><span>Washington Redskins</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable-NFC_NORTH"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>NFC NORTH</span></li><li class="ms-elem-selectable ms-selected" id="Chicago_Bears-selectable" style="display: none;"><span>Chicago Bears</span></li><li class="ms-elem-selectable ms-selected" id="Detroit_Lions-selectable" style="display: none;"><span>Detroit Lions</span></li><li class="ms-elem-selectable ms-selected" id="Green_Bay_Packers-selectable" style="display: none;"><span>Green Bay Packers</span></li><li class="ms-elem-selectable ms-selected" id="Minnesota_Vikings-selectable" style="display: none;"><span>Minnesota Vikings</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable-NFC_SOUTH"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>NFC SOUTH</span></li><li class="ms-elem-selectable" id="Atlanta_Falcons-selectable"><span>Atlanta Falcons</span></li><li class="ms-elem-selectable" id="Carolina_Panthers-selectable"><span>Carolina Panthers</span></li><li class="ms-elem-selectable" id="New_Orleans_Saints-selectable"><span>New Orleans Saints</span></li><li class="ms-elem-selectable" id="Tampa_Bay_Buccaneers-selectable"><span>Tampa Bay Buccaneers</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable-NFC_WEST"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>NFC WEST</span></li><li class="ms-elem-selectable" id="Arizona_Cardinals-selectable"><span>Arizona Cardinals</span></li><li class="ms-elem-selectable" id="St_Louis_Rams-selectable"><span>St. Louis Rams</span></li><li class="ms-elem-selectable" id="San_Francisco_49ers-selectable"><span>San Francisco 49ers</span></li><li class="ms-elem-selectable" id="Seattle_Seahawks-selectable"><span>Seattle Seahawks</span></li></ul></li></ul></div><div class="ms-selection"><ul class="ms-list" tabindex="-1"><li class="ms-optgroup-container" id="optgroup-selection-NFC_EAST"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>NFC EAST</span></li><li class="ms-elem-selection" id="Dallas_Cowboys-selection" style="display: none;"><span>Dallas Cowboys</span></li><li class="ms-elem-selection" id="New_York_Giants-selection" style="display: none;"><span>New York Giants</span></li><li class="ms-elem-selection" id="Philadelphia_Eagles-selection" style="display: none;"><span>Philadelphia Eagles</span></li><li class="ms-elem-selection" id="Washington_Redskins-selection" style="display: none;"><span>Washington Redskins</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection-NFC_NORTH"><ul class="ms-optgroup"><li class="ms-optgroup-label" style=""><span>NFC NORTH</span></li><li class="ms-elem-selection ms-selected" id="Chicago_Bears-selection" style=""><span>Chicago Bears</span></li><li class="ms-elem-selection ms-selected" id="Detroit_Lions-selection" style=""><span>Detroit Lions</span></li><li class="ms-elem-selection ms-selected ms-hover" id="Green_Bay_Packers-selection" style=""><span>Green Bay Packers</span></li><li class="ms-elem-selection ms-selected" id="Minnesota_Vikings-selection" style=""><span>Minnesota Vikings</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection-NFC_SOUTH"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>NFC SOUTH</span></li><li class="ms-elem-selection" id="Atlanta_Falcons-selection" style="display: none;"><span>Atlanta Falcons</span></li><li class="ms-elem-selection" id="Carolina_Panthers-selection" style="display: none;"><span>Carolina Panthers</span></li><li class="ms-elem-selection" id="New_Orleans_Saints-selection" style="display: none;"><span>New Orleans Saints</span></li><li class="ms-elem-selection" id="Tampa_Bay_Buccaneers-selection" style="display: none;"><span>Tampa Bay Buccaneers</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection-NFC_WEST"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>NFC WEST</span></li><li class="ms-elem-selection" id="Arizona_Cardinals-selection" style="display: none;"><span>Arizona Cardinals</span></li><li class="ms-elem-selection" id="St_Louis_Rams-selection" style="display: none;"><span>St. Louis Rams</span></li><li class="ms-elem-selection" id="San_Francisco_49ers-selection" style="display: none;"><span>San Francisco 49ers</span></li><li class="ms-elem-selection" id="Seattle_Seahawks-selection" style="display: none;"><span>Seattle Seahawks</span></li></ul></li></ul></div></div>');
        $form->addElement(__('Title'), 'title', 'input', array(
            'class' => 'form-control',
            'value' => post('title')
                ), array(
            'is_required' => 1,
            'minlength' => 2
        ));
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
