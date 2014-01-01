<?php

namespace F\PFBC\Element;

class Url extends Textbox {

    protected $_attributes = array("type" => "url");

    public function render() {
        $this->validation[] = new \F\PFBC\Validation\Url;
        parent::render();
    }

}
