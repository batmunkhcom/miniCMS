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
     * Form iin buh field iin submit utgiig hadgalna
     *
     * @var array
     */
    public $fields_data = array();

    /**
     * Form iin buh field iin label,ner utgiig hadgalna
     *
     * @var array
     */
    public $labels = array();

    /**
     * Form iin submit utgiin aldaa
     *
     * @var array
     */
    public $errors = array();

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

    /**
     * @var integer Form iin elemtuudiin haragdah daraalal
     */
    public $session;

    public function __construct($name, $configure) {

        global $session;

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
        $this->session = $session->get($name);
        $this->fields_data = $this->session['fields_data'];
        $this->errors = $this->session['errors'];
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

        $buf = '';

        switch ($element_type) {
            case 'input':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-6">' . "\n";
                $buf .= $this->input($label, $name, $attributes, $validation, $text);
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'datetime':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-6">' . "\n";
                $buf .= '<div class="input-group date form_datetime-component">' . "\n";
                $buf .= $this->input($label, $name, $attributes, $validation, $text);
                $buf .= '<span class="input-group-btn">
                <button type="button" class="btn btn-danger date-set"><i class="fa fa-calendar"></i></button>
                </span>';

                $buf .= '<script>';
                $buf .= '$(".form_datetime-component").datetimepicker({
    format: "yyyy-mm-dd hh:ii"
});';
                $buf .= '</script>';
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'textarea':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-10">' . "\n";
                $buf .= $this->textarea($label, $name, $attributes, $validation, $text);
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'select':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-6">' . "\n";
                $buf .= $this->select($label, $name, $attributes, $validation, $text);
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'checkbox':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-6">' . "\n";
                $buf .= '<div class="checkbox">';
                $buf .= $this->checkbox($label, $name, $attributes, $validation, $text);
                $buf .= '</div>';
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'radio':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group text-right" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-6">' . "\n";
                $buf .= '<div class="checkbox">';
                $buf .= $this->radio($label, $name, $attributes, $validation, $text);
                $buf .= '</div>';
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'html':
                $buf .= '<div classs="row">';
                $buf .= $this->html($label, $name, $text);
                $buf .= '</div>' . "\n";
                break;
            case 'button':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group" id="element_' . $this->fixElementId($name) . '">' . "\n";
                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
                $buf .= $label . "\n";
                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-2">' . "\n";
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
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
            case 'wysiwyg':
                $buf .= '<div classs="row">';
                $buf .= '<div class="form-group" id="element_' . $this->fixElementId($name) . '">' . "\n";
//                $buf .= '<label for="' . $name . '" class="col-lg-2 col-sm-2 control-label">' . "\n";
//                $buf .= $label . "\n";
//                $buf .= '</label>' . "\n";
                $buf .= '<div class="col-lg-12">' . "\n";
                js_set_loadfile('/assets/tinymce/tinymce.min.js');
                $text .= '<script type="text/javascript">
                                tinymce.init({
                                    selector: "textarea#' . $this->fixElementId($name) . '",
                                        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor          autosave layer save tabfocus template"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | forecolor backcolor | bullist numlist outdent indent | ",
    toolbar2: "print preview | image media link emoticons | code fullscreen ",
    image_advtab: true,
    height: 400,
    file_browser_callback : elFinderBrowser
                                 });
                                </script>';
                $buf .= $this->wysiwyg($label, $name, $attributes, $validation, $text);
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                $buf .= '</div>' . "\n";
                break;
        }
        $this->elements[self::$pos] = $buf;
        $this->fields[$name] = $element_type;
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
                    case 'readonly':
                        $buf .= '' . $k . ' ';
                        break;
                    case 'value':
                        if (isset($this->session['fields_data'][$name])) {
                            $buf .= $k . '="' . $this->session['fields_data'][$name] . '" ';
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
            $buf .= $text . "\n";
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
            if ((isset($selected_value) || isset($this->session['fields_data'][$name])) && ($selected_value == $k || $this->session['fields_data'][$name] == $k)) {
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
    public function html($label, $name, $html = '') {


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
    public function dateTimePicker($label, $name, $attributes, $validation, $text) {

        $buf = '';
        $buf .= $this->input($label, $name, $attributes, $validation, $text);

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
        $buf .= '<label class="label_check c_on" for="' . $name . '" >' . "\n";
        $buf .= '<input name="' . $name . '" id="' . $this->fixElementId($name) . '" ';

        if (isset($this->session['fields_data'][$name]) && $this->session['fields_data'][$name] == $attributes['value']) {
            $attributes['checked'] = 'checked';
        }
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
        $buf .= 'type="checkbox" >' . "\n";
        $buf .= $text . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '';

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
    public function radio($label, $name, $attributes, $validation, $text) {
        $buf = '';
        $buf .= '<label class="control-label" for="' . $name . '" >' . "\n";
        $buf .= '<input name="' . $name . '" id="' . $this->fixElementId($name) . '" ';

        if (isset($this->session['fields_data'][$name]) && $this->session['fields_data'][$name] == $attributes['value']) {
            $attributes['checked'] = 'checked';
        }
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
        $buf .= 'type="radio" >' . "\n";
        $buf .= $text . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '';

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
                        if (isset($this->session['fields_data'][$name])) {
                            $value = $this->session['fields_data'][$name];
                        }
                        $value = '' . $v . ' ';
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

    /**
     *
     * @param type $label Hereglegchded haragdah tuhain elementiin ner
     * @param type $name Tuhain element iin ner
     * @param type $attributes Tuhain elementiin attribute uud
     * @param type $text Nemelt text. help text ,html code geh met-d ashiglagdana
     *
     * @return string tuhain elementiig hevleh html iig butsaana
     */
    public function wysiwyg($label, $name, $attributes = array(), $validation, $text = '') {

        $value = '';

        $buf = '<textarea name="' . $name . '" id="' . $this->fixElementId($name) . '" ';
        if (is_array($attributes)) {
            foreach ($attributes as $k => $v) {
                switch ($k) {
                    case 'required':
                        $buf .= '' . $k . ' ';
                        break;
                    case 'value':
                        if (isset($this->session['fields_data'][$name])) {
                            $value = $this->session['fields_data'][$name];
                        }
                        $value = '' . $v . ' ';
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
        $buf .= $text;

        return $buf;
    }

    public function updateSession() {
        global $session;

        $sess = $session->get($this->form_name);
        $sess['fields']['form_name'] = $this->form_name;
        $sess['fields'] = $this->fields;
//        $sess['fields_data'] = $this->fields_data;
        $sess['validations'] = $this->validations;
        $sess['labels'] = $this->labels;
//        $sess['errors'] = $this->errors;

        $session->set($this->form_name, $sess);

//        return true;
    }

    public function updateSessionDataAfterFormSubmit($form_name) {
        global $session;

        $this->form_name = $form_name;
        $sess = $session->get($this->form_name);
        $sess['fields'] = $this->fields;
        $sess['fields_data'] = $this->fields_data;
        $sess['validations'] = $this->validations;
        $sess['errors'] = $this->errors;

        $session->set($this->form_name, $sess);
//        print_r($session->get($this->form_name));
//        die();
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

    /**
     * @param string $isValid Form iin ner
     */
    public function isValid($form_name) {

        global $session;

        $is_valid = 1;
        $sess_data = $session->get($form_name);

        foreach ($sess_data['fields'] as $k => $v) {

            $sess_data['fields_data'][$k] = post($k);

//checkbox bval utgiig onooh
            if ($v == 'checkbox') {
                if (post_exists($k)) {
                    $sess_data['fields_data'][$k] = post($k);
                }
//                echo post($k) . '.....';
//                print_r($_POST);
//                die();
            }
            //validation ehlev
            if (isset($sess_data['validations'][$k]['is_required']) && (int) $sess_data['validations'][$k]['is_required'] == 1 && $sess_data['fields_data'][$k] == '') {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please fill ' . __($sess_data['labels'][$k]) . ' field');
            }
            if (isset($sess_data['validations'][$k]['minlength']) && (int) $sess_data['validations'][$k]['minlength'] > 0 && strlen($sess_data['fields_data'][$k]) < $sess_data['validations'][$k]['minlength']) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('' . __($sess_data['labels'][$k]) . ' field must be longer than you entered') . ' ' . __('Minimum length is') . ' (' . $sess_data['validations'][$k]['minlength'] . ')';
            }
            if (isset($sess_data['validations'][$k]['maxlength']) && (int) $sess_data['validations'][$k]['maxlength'] != 0 && (int) $sess_data['validations'][$k]['maxlength'] > 0 && strlen($sess_data['fields_data'][$k]) > $sess_data['validations'][$k]['maxlength']) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('' . __($sess_data['labels'][$k]) . ' field bust be shorter than you entered') . ' ' . __('Maximum length is') . ' (' . $sess_data['validations'][$k]['maxlength'] . ')';
            }
            if (isset($sess_data['validations'][$k]['is_email']) && (int) $sess_data['validations'][$k]['is_email'] == 1 && strlen($sess_data['fields_data'][$k]) < 10) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please enter valid email');
            }
            if (isset($sess_data['validations'][$k]['is_integer']) && (int) $sess_data['validations'][$k]['is_integer'] == 1 && !is_int($sess_data['fields_data'][$k])) {
                $is_valid = 0;
                $sess_data['errors'][$k] = __('Please enter an integer number in ' . __($sess_data['labels'][$k]) . ' field');
            }
        }
//        echo '<hr>';
//        print_r($sess_data);
//        echo $is_valid;
//        die();

        $this->fields = $sess_data['fields'];
        $this->fields_data = $sess_data['fields_data'];
        $this->validations = $sess_data['validations'];
        $this->errors = $sess_data['errors'];
        $this->updateSessionDataAfterFormSubmit($form_name);

        return $is_valid;
    }

}
