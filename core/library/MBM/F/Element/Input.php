<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace F\Element;

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Input extends \F\Form {

    public $label;
    public $name;
    public $attributes;
    public $validation;
    public $text;

    public function __construct($label, $name, $attributes = array(), $validation = array(
        'is_required' => 0,
        'minlength' => 0,
        'maxlength' => 0,
        'is_email' => 0,
        'is_integer' => 0
    ), $text = '') {

        $this->label = $label;
        $this->name = $this->fixElementId($name);
        $this->attributes = $attributes;
        $this->validation = $validation;
        $this->text = $text;

        return $this->input();
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
    public function input($span1 = 2, $span2 = 10) {
        $buf = '<div class="form-group" id="element_' . $this->name . '">' . "\n";
        $buf .= '<label for="' . $this->name . '" class="col-lg-' . $span1 . ' col-sm-' . $span1 . ' control-label">' . "\n";
        $buf .= $this->label . "\n";
        $buf .= '</label>' . "\n";
        $buf .= '<div class="col-lg-' . $span2 . '">' . "\n";
        $buf .= '<input name="' . $$this->name . '" id="' . $this->name . '" ';
        if (is_array($this->attributes)) {
            foreach ($this->attributes as $k => $v) {
                switch ($k) {
                    case 'required':
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
        if (strlen($this->text) > 0) {
            $buf .= '<p class="help-block">' . $this->text . '</p>' . "\n";
        }

        return $buf;
    }

}
