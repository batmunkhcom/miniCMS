<?php

namespace F\PFBC\Element;

class jQueryUIDate extends Textbox {

    protected $_attributes = array(
        "type" => "text",
        "autocomplete" => "off"
    );
    protected $jQueryOptions;

    public function getCSSFiles() {
        return array(
                //automat aar systemd duudchih uchir uunii hereg bhgui
//                $this->_form->getPrefix() . "://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css"
        );
    }

    public function getJSFiles() {
        //automat aar systemd duudchih uchir uunii hereg bhgui
        return array(
                //$this->_form->getPrefix() . "://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"
        );
    }

    public function jQueryDocumentReady() {
        parent::jQueryDocumentReady();
        echo 'jQuery("#', $this->_attributes["id"], '").datepicker(', $this->jQueryOptions(), ');';
    }

    public function render() {
        $this->validation[] = new \F\PFBC\Validation\Date;
        parent::render();
    }

}
