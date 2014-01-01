<?php

namespace F\PFBC\Element;

class Textarea extends \F\PFBC\Element {

    protected $_attributes = array("rows" => "5");

    public function render() {
        echo "<textarea", $this->getAttributes("value"), ">";
        if (!empty($this->_attributes["value"]))
            echo $this->filter($this->_attributes["value"]);
        echo "</textarea>";
    }

}
