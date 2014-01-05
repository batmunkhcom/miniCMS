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

    public $form_name;
    public $form_attributes;
    public $elements = array();
    static $pos = 0;

    public function __construct($name, $configure) {
        if (count($configure) == 0) {
            $configure = array(
                'class' => 'form-horizontal',
                'role' => 'form'
            );
        }
        $this->form_attributes = $configure;
        $this->form_name = $name;
    }

    public function addElement($label, $name, $element_type, $attributes = array(), $text = '') {

        $buf = '<div class="form-group" id="element_' . $name . '">';
        $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">';
        $buf .= $label;
        $buf .= '</label>';
        $buf .= '<div class="col-lg-10">';
        switch ($element_type) {
            case 'input':
                $buf .= $this->input($label, $name, $attributes, $text);
                break;
            case 'textarea':
                break;
            case 'select':
                $buf .= $this->select($label, $name, $attributes, $text);
                break;
            case 'checkbox':
                $buf .= '<div class="checkboxes">';
                $buf .= $this->checkbox($label, $name, $attributes, $text);
                $buf .= '</div>';
                break;
            case 'button':
                $buf .= '<button name="' . $name . '" id="' . $name . '" ';
                foreach ($attributes as $k => $v) {
                    $buf .= $k . '="' . $v . '" ';
                }
                $buf .= '>' . $label . '</button>';
                break;
            case 'ckeditor':
                break;
        }
        $buf .= '</div>';
        $buf .= '</div>';
        $this->elements[self::$pos] = $buf;
        self::$pos++;

        return $buf;
    }

    public function render() {
        $html = '<form name="' . $this->form_name . '" id="' . $this->form_name . '"';
        foreach ($this->form_attributes as $k => $v) {
            $html .= $k . '="' . $v . '" ';
        }
        $html .= '>';
        $html .= '<input type="hidden" name="form_name" id="form_name" value="' . $this->form_name . '">';
        foreach ($this->elements as $k => $v) {
            $html .= $v;
        }
        $html .= '</form>';

        return $html;
    }

    public function input($label, $name, $attributes = array(), $text = '') {

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
        $buf .= ' >';
        if (strlen($text) > 0) {
            $buf .= '<p class="help-block">' . $text . '</p>';
        }

        return $buf;
    }

    /**
     *
     * @param type $name Description
     * @param type $name Description
     * @param type $attributes Description
     * @param type $name Description
     */
    public function select($label, $name, $attributes = array(), $text = '') {

        $options = $attributes['value'];
        $selected_value = $attributes['selected'];
        unset($attributes['value']);

        $buf = '<select name="' . $name . '" id="' . $name . '"';
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
        $buf .= '>';

        foreach ($options as $k => $v) {
            $buf .= '<option value="' . $k . '" ';
            if ($selected_value == $k || post($name) == $v) {
                $buf .= ' selected';
            }
            $buf .= '>';
            $buf .= $v;
            $buf .= '</option>';
        }

        $buf .='</select>';

        return $buf;
    }

    public function checkbox($label, $name, $attributes, $text) {
        $buf = '';
        $buf .= '<label class="label_check" for="' . $name . '">';
        $buf .= '<input name="' . $name . '" id="' . $name . '" ';
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
        $buf .= 'type="checkbox" />';
        $buf .= $text;
        $buf .= '</label>';
        $buf .= '';

        return $buf;
    }

    public function isSubmitted() {
        if (post('form_name') == $this->form_name) {
            return true;
        }

        return false;
    }

    public function textarea($label, $name, $attributes = array(), $text = '') {

        $value = '';

        $buf = '<textarea name="' . $name . '" id="' . $name . '" ';
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
        $buf .= ' >';
        $buf .= $value;
        $buf .= '</textarea>';

        return $buf;
    }

}
