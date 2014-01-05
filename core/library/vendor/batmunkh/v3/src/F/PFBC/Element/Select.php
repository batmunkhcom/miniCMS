<?php

namespace F\PFBC\Element;

class Select extends \F\PFBC\OptionElement {

    protected $_attributes = array();

    public function render() {
        if (isset($this->_attributes["value"])) {
            if (!is_array($this->_attributes["value"])) {
                $this->_attributes["value"] = array($this->_attributes["value"]);
            }
        } else {
            $this->_attributes["value"] = array();
        }

        if (!empty($this->_attributes["multiple"]) && substr($this->_attributes["name"], -2) != "[]") {
            $this->_attributes["name"] .= "[]";
        }

        echo '<select', $this->getAttributes(array("value", "selected")), '>';
        $selected = false;
        foreach ($this->options as $value => $text) {
//            $this->renderOptions($this->options);
            $value = $this->getOptionValue($value);
            echo '<option value="', $this->filter($value), '"';
            if (!$selected && in_array($value, $this->_attributes["value"])) {
                echo ' selected="selected"';
                $selected = true;
            }
            echo '>' . $text . '</option>';
        }
        echo '</select>';
    }

    //multi array avahaar bichiv... demii shig bna.
    public function renderOptions($values = array()) {
        if (count($values) == 0) {
            $values = $this->options;
        }
        foreach ($values as $value => $text) {
            if (is_array($values[$value])) {
                echo '<optgroup label="' . $text . '">';
                echo $this->renderOptions($values[$value]);
                echo '</optgroup>';
            } else {
                $value = $this->getOptionValue($value);
                echo '<option value="', $this->filter($value), '"';
                if (!$selected && in_array($value, $this->_attributes["value"])) {
                    echo ' selected="selected"';
                    $selected = true;
                }
                echo '>' . $text . '</option>';
            }
        }
    }

}
