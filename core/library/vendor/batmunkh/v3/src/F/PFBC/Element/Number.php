<?php

namespace F\PFBC\Element;

class Number extends Textbox {

    protected $_attributes = array("type" => "number");

    public function render() {
        $this->validation[] = new \F\PFBC\Validation\Numeric;
        parent::render();
    }

}
