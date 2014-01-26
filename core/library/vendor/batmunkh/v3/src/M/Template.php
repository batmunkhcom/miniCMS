<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace M;

/**
 * http://fuelyourcoding.com/roll-your-own-php-framework-part-ii/
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Template extends Core {

    // template file iig render hiisen ur dun.
    // template file ruu damjuulah huvisagchuudiig $page_vars -d hadgalna
    private $page_vars = array();
    // ali template file iig duudahiig $template_file -d zaaj ugnu
    private $template_file;

    // example: $template_file = new Template("helloworld/templates/helloworld.php");

    public function __construct($template_file) {


        // Let's build and set our class var $template_file to the
        // value of $template_file that was passed into our __construct method
        $this->template_file = $template_file;
    }

    public function set_template_file($template_file) {

        $this->template_file = $template_file;
    }

    // Example:
    // action file-d daraah baidlaar templte ruu ilgeene
    // $template_file->set("title", "hello world");
    //
    // template file-d ashiglahdaa daraah baidlaar ashiglana:
    // <h1><?php echo $title; ? ></h1>
    public function set($var, $val) {

        $this->page_vars[$var] = $val;
    }

    // trust me!
    public function render() {

        // For instance:
        //      $this->page_vars["yourVar"]
        // becomes:
        //      $yourVar
        // so basically we are converting all the
        // index keys (with their values), in page_vars to
        // their own respected variables
        extract($this->page_vars);

        ob_start();
        if (file_exists($this->template_file)) {
            require($this->template_file);
        } else {
            require(ERROR_MODULE_DIR . 'templates' . DS . '404_no_template_file.php');
        }

        return ob_get_clean();
    }

    public function display() {

        echo $this->render();
    }

}
