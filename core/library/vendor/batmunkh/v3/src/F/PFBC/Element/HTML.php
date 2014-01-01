<?php

namespace F\PFBC\Element;

class HTML extends \F\PFBC\Element {

    public function __construct($value) {
        $properties = array("value" => $value);
        parent::__construct("", "", $properties);
    }

    public function render() {
        echo $this->_attributes["value"];
    }

}
