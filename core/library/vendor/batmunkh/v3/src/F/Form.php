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
     * Form iin buh elementiin tohirgoog session-d hadgalah
     *
     * @var array
     */
    public $session = array();

    /**
     * @var integer Form iin elemtuudiin haragdah daraalal
     */
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

        $this->session = array($name => array());
    }

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $element_type Tuhain element iin turul. Ex: input,checkbox,textarea....
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function addElement($label, $name, $element_type, $attributes = array(), $text = '') {

        $this->fields[$name] = $name;
        $buf = '<div class="form-group" id="element_' . $name . '">' . "\n";
        $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
        $buf .= $label . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '<div class="col-lg-10">' . "\n";
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
                break;
        }
        $buf .= '</div>' . "\n";
        $buf .= '</div>' . "\n";
        $this->elements[self::$pos] = $buf;
        self::$pos++;

        return $buf;
    }

    /**
     * @return string DescriptionForm iin buhel html iig butsaana
     */
    public function render() {

        global $session;

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

        $session->set($name, $this->fields);

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
    public function select($label, $name, $attributes = array(), $text = '') {

        $options = $attributes['value'];
        $selected_value = $attributes['selected'];
        unset($attributes['value']);

        $buf = '<select name="' . $name . '" id="' . $name . '" ';
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
            if ($selected_value == $k || post($name) == $v) {
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
    public function checkbox($label, $name, $attributes, $text) {
        $buf = '';
        $buf .= '<label class="label_check" for="' . $name . '">' . "\n";
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
        $buf .= 'type="checkbox" />' . "\n";
        $buf .= $text . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '';

        return $buf;
    }

    public function isSubmitted() {

        global $session;

        $this->session = $session->get($this->form_name);

        foreach ($this->fields as $k => $v) {
            $this->fields[$k] = post($k);
        }
        print_r($this->session);

        echo post('form_name') . '---' . $this->form_name;
        die();
        if (post('form_name') == $this->form_name) {
            return true;
        }

        return false;
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
        $buf .= ' >' . "\n";
        $buf .= $value;
        $buf .= '</textarea>' . "\n";

        return $buf;
    }

    public function updateSession() {
        global $session;

        $sess = $session->get($this->form_name);
        $session->set($this->form_name, $this->fields);
    }

}
