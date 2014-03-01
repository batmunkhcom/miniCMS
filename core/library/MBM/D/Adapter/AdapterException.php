<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Adapter;

/**
 * @class    : AdapterException
 * @package  : DbAdapter
 * @author   : Satyam Kumawat
 * @use      : For exception handling
 * @version  : $id:1.0
 */
class AdapterException {

    const EXECP_HEADING = 'Error Occured';

    private $exceptionType;
    private $message;
    private $expectionObj;

    public function __construct($expectionObj, $type = 'general') {

        $this->exceptionType = $type;

        if (is_object($expectionObj)) {
            $this->expectionObj = $expectionObj;
            $this->prepareExeception()->throwException();
            ;
        } else {

            $this->simpleException($expectionObj)->throwException();
        }
    }

    public function throwException() {
        $html = "<table width='800px' style='border:1px solid black;color:red;'><tr style='font-size:20px;'><td style='
			text-align:center'><b><u>" . self::EXECP_HEADING . "</u><b></td></tr>";

        foreach ($this->message as $heading => $data):
            $html .="<tr><td><b><u>" . ucwords($heading) . " : </u></b>" . $data . "</td></tr>";
        endforeach;

        $html .='</table>';
        echo $html;
        exit;
    }

    public function prepareExeception() {
        $message = array();
        switch ($this->exceptionType) {
            case 'general':

                $message['message'] = $this->expectionObj->getMessage();
                $message['file'] = $this->expectionObj->getFile();
                $message['line no'] = $this->expectionObj->getLine();

                break;

            case 'query':
                $message['message'] = $this->expectionObj->getMessage();
                $message['file'] = $this->expectionObj->getFile();
                $message['line no'] = $this->expectionObj->getLine();
                $trace = $this->expectionObj->getTrace();

                $message['query'] = $trace[0]['args'][0];
                break;

            default:
                $message['message'] = $this->expectionObj->getMessage();
                $message['file'] = $this->expectionObj->getFile();
                $message['line no'] = $this->expectionObj->getLine();
                break;
        }

        $this->message = $message;
        return $this;
    }

    public function simpleException($msg) {
        $message['message'] = $msg;
        $this->message = $message;
        return $this;
    }

    public function fetchAllTables() {
        $sql = "SHOW TABLES FROM " . $this->database;
        $this->prepare($sql)
                ->execute();

        return $this;
    }

    public function fetchAllFields($table) {
        $sql = "SHOW FIELDS FROM " . $table;
        $this->prepare($sql)
                ->execute();

        return $this;
    }

}
