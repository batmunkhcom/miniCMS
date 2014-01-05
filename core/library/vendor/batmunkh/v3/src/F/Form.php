<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace F;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Form {

    /**
     * Form iin ner
     *
     * @var string
     */
    public $form_name;

    /**
     * form tag iin attribute uud
     *
     * @var array
     */
    public $form_attributes;

    /**
     * Form iin buh elementiin html iig aguulj bui huvisagch
     *
     * @var array
     */
    public $elements = array();

    /**
     * Form iin buh field iin ner utgiig hadgalna
     *
     * @var array
     */
    public $fields = array();

    /**
     * Form iin buh field iin label,ner utgiig hadgalna
     *
     * @var array
     */
    public $labels = array();

    /**
     * Form iin buh field iin validation iig
     *
     * @var array
     */
    public $validations = array();

    /**
     * @var integer Form iin elemtuudiin haragdah daraalal
     */
    static $pos = 0;

    public function __construct($name, $configure) {

        if (count($configure) == 0) {
            $configure = array(
                'class' => 'form-horizontal',
                'role' => 'form',
                'method' => 'post',
                'action' => ''
            );
        }
        $this->form_attributes = $configure;
        $this->form_name = $name;
        $this->fields['form_name'] = $name;
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $element_type Tuhain element iin turul. Ex: input,checkbox,textarea....
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $validation Validate hiih nuhtsluud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function addElement($label, $name, $element_type, $attributes = array(), $validation = array(
        'is_required' => 0,
        'minlength' => 0,
        'maxlength' => 0,
        'is_email' => 0,
        'is_integer' => 0
    ), $text = '') {

        $buf = '<div class="form-group" id="element_' . $this->fixElementId($name) . '">' . "\n";
        $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
        $buf .= $label . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '<div class="col-lg-10">' . "\n";
        switch ($element_type) {
            case 'input':
                $buf .= $this->input($label, $name, $attributes, $validation, $text);
                break;
            case 'textarea':
                break;
            case 'select':
                $buf .= $this->select($label, $name, $attributes, $validation, $text);
                break;
            case 'checkbox':
                $buf .= '<div class="checkboxes">';
                $buf .= $this->checkbox($label, $name, $attributes, $validation, $text);
                $buf .= '</div>';
                break;
            case 'button':
                $buf .= '<button name="' . $name . '" id="' . $this->fixElementId($name) . '" ';
                foreach ($attributes as $k => $v) {
                    switch ($k) {
                        case 'value':
                            break;
                        default:
                            $buf .= $k . '="' . $v . '" ';
                            break;
                    }
                }
                $buf .= '>' . $attributes['value'] . '</button>' . "\n";
                break;
            case 'ckeditor':
                $buf .= $this->textarea($label, $name, $attributes, $validation, $text);
                break;
        }
        $buf .= '</div>' . "\n";
        $buf .= '</div>' . "\n";
        $this->elements[self::$pos] = $buf;
        $this->fields[$name] = $name;
        $this->labels[$name] = $label;
        $this->validations[$name] = $validation;
        self::$pos++;

        return $buf;
    }

    /**
     * @return string DescriptionForm iin buhel html iig butsaana
     */
    public function render() {

        $html = '<form name="' . $this->form_name . '" id="' . $this->form_name . '" ';
        foreach ($this->form_attributes as $k => $v) {
            $html .= $k . '="' . $v . '" ';
        }
        $html .= '>' . "\n";
        $html .= '<input type="hidden" name="form_name" id="form_name" value="' . $this->form_name . '">' . "\n";
        foreach ($this->elements as $k => $v) {
            $html .= $v;
        }
        $html .= '</form>' . "\n";

        $this->updateSession();

        return $html;
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function input($label, $name, $attributes = array(), $validation, $text = '') {

        $buf = '<input name="' . $name . '" id="' . $name . '" ';
        if (is_array($attributes)) {
            foreach ($attributes as $k => $v) {
                switch ($k) {
                    case 'required':
                        $buf .= '' . $k . ' ';
                        break;
                    case 'value':
                        if (post_exists($name)) {
                            $buf .= $k . '="' . post($name) . '" ';
                        } else {
                            $buf .= '' . $k . ' ';
                        }
                        break;
                    default:
                        $buf .= $k . '="' . $v . '" ';
                        break;
                }
            }
        }
        $buf .= ' >' . "\n";
        if (strlen($text) > 0) {
            $buf .= '<p class="help-block">' . $text . '</p>' . "\n";
        }

        return $buf;
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function select($label, $name, $attributes = array(), $validation, $text = '') {

        $options = $attributes['value'];
        if (isset($attributes['selected'])) {
            $selected_value = $attributes['selected'];
        }
        unset($attributes['value']);

        $buf = '<select name="' . $name . '" id="' . $this->fixElementId($name) . '" ';
        foreach ($attributes as $k => $v) {
            switch ($k) {
                case 'multipe':
                    $buf .= 'multiple ';
                    break;
                default:
                    $buf .= $k . '="' . $v . '" ';
                    break;
            }
        }
        $buf .= '>' . "\n";

        foreach ($options as $k => $v) {
            $buf .= '<option value="' . $k . '" ';
            if (isset($selected_value) && ($selected_value == $k || post($name) == $v)) {
                $buf .= ' selected';
            }
            $buf .= '>';
            $buf .= $v;
            $buf .= '</option>' . "\n";
        }

        $buf .='</select>' . "\n";

        return $buf;
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function checkbox($label, $name, $attributes, $validation, $text) {
        $buf = '';
        $buf .= '<label class="label_check" for="' . $name . '">' . "\n";
        $buf .= '<input name="' . $name . '" id="' . $this->fixElementId($name) . '" ';
        foreach ($attributes as $k => $v) {
            switch ($k) {
                case 'checked':
                    $buf .= 'checked ';
                    break;
                default :
                    $buf .= $k . '="' . $v . '" ';
                    break;
            }
        }
        $buf .= 'type="checkbox" />' . "\n";
        $buf .= $text . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '';

        return $buf;
    }

    /**
     * @param string $isValid Form iin ner
     */
    public function isValid($form_name) {

        global $session;

        $is_valid = 1;
        $sess_data = $session->get($form_name);

        foreach ($sess_data['fields'] as $k => $v) {
            $sess_data['fields'][$k] = post($k);
            //validation ehlev
            if (isset($sess_data['validations'][$k]['is_required']) && (int) $sess_data['validations'][$k]['is_required'] == 1 && $sess_data['fields'][$k] == '') {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please fill ' . __($sess_data['labels'][$k]) . ' field');
            }
            if (isset($sess_data['validations'][$k]['minlength']) && (int) $sess_data['fields'][$k] != 0 && (int) strlen($sess_data['fields'][$k]) < $sess_data['validations'][$k]['minlength']) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('' . __($sess_data['labels'][$k]) . ' field must be longer than you entered') . ' (' . $sess_data['validations'][$k]['minlength'] . ')';
            }
            if (isset($sess_data['validations'][$k]['maxlength']) && (int) $sess_data['validations'][$k]['maxlength'] != 0 && (int) $sess_data['validations'][$k]['maxlength'] > 0 && strlen($sess_data['fields'][$k]) > $sess_data['validations'][$k]['maxlength']) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('' . __($sess_data['labels'][$k]) . ' field bust be shorter than you entered') . ' (' . $sess_data['validations'][$k]['maxlength'] . ')';
            }
            if (isset($sess_data['validations'][$k]['is_email']) && (int) $sess_data['validations'][$k]['is_email'] == 1 && strlen($sess_data['fields'][$k]) < 10) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please enter valid email');
            }
            if (isset($sess_data['validations'][$k]['is_integer']) && (int) $sess_data['validations'][$k]['is_integer'] == 1 && !is_int($sess_data['fields'][$k])) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please enter an integer number in ' . __($sess_data['labels'][$k]) . ' field');
            }
        }
        $this->fields = $sess_data['fields'];
        $this->validations = $sess_data['validations'];

        $this->updateSession();
        if ($is_valid == 0) {
            echo 'form is invalid';
            return false;
        }

        return true;
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function textarea($label, $name, $attributes = array(), $validation, $text = '') {

        $value = '';

        $buf = '<textarea name="' . $name . '" id="' . $this->fixElementId($name) . '" ';
        if (is_array($attributes)) {
            foreach ($attributes as $k => $v) {
                switch ($k) {
                    case 'required':
                        $buf .= '' . $k . ' ';
                        break;
                    case 'value':
                        if (post_exists($name)) {
                            $value = post($name);
                        }
                        $value = '' . $k . ' ';
                        break;
                    default:
                        $buf .= $k . '="' . $v . '" ';
                        break;
                }
            }
        }
        $buf .= ' >' . "\n";
        $buf .= $value;
        $buf .= '</textarea>' . "\n";

        return $buf;
    }

    public function updateSession() {
        global $session;

        $sess = $session->get($this->form_name);
        $sess['fields']['form_name'] = $this->form_name;
        $sess['fields'] = $this->fields;
        $sess['validations'] = $this->validations;
        $sess['labels'] = $this->labels;

        $session->set($this->form_name, $sess);

//        return true;
    }

    /**
     * @param string $name Element iin id attribute iin neriig yanzalna
     */
    public function fixElementId($name) {

        $name = str_replace(array('[', ']'), '', $name);
        $name = str_replace(array('-'), '_', $name);

        return $name;
    }

}