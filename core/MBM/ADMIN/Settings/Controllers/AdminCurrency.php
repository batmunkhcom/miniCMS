<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * admind currency-uudiin jagsaaltiig haruulna
 *
 * @package    miniCMS
 * @subpackage -
 * @author     JAVKHLANTUR Ganbaatar <javkhlantur.g@gmail.com>
 * @version    SVN: $Id
 */

namespace MBM\ADMIN\Settings\Controllers;

use \MBM\ADMIN\Settings\Models\Currency;
use \MBM\Lib\Language;
use \MBM\Entity\Currencies;

class AdminCurrency extends \MBM\Lib\Controller {

    public static function instance() {

        static $instance = null;
        if (null === $instance) {
            $instance = new static(DIR_TEMPLATE . 'flatlab' . TEMPLATE_ADMIN);
        }
        return $instance;
    }

    private function saveMe($request, $newCurrency, $isNew) {
        $newCurrency->setName($request->param("name"));        
        $newCurrency->setPrefix($request->param("prefix"));
        $newCurrency->setSuffix($request->param("suffix"));
        $newCurrency->setSymbol($request->param("symbol"));
        $newCurrency->setCurrencyCode($request->param("currencyCode"));
        $newCurrency->setOneUsd($request->param("oneUsd"));

        if($isNew){$this->model->save($newCurrency);} 
        else { $this->model->update($newCurrency);}
    }

    /**
     * Hereglegchiin medeellig hadaglana.
     * @param object $request
     * @param object $response
     */
    function save($request, $response) {
        $newCurrency = new Currencies();
        $this->saveMe($request, $newCurrency, true);
        $response->redirect("/admin/currency", $code = 302);
    }

    /*
     * currency-iin list
     */
    public function index() {

        $allCurrency = Currency::instance()->getCurrencyList();
        $this->view->prependPath(DIR_ADMIN . 'Settings' . DS . 'Views' . DS . TEMPLATE_ADMIN); // Currency module-m view hawtasiig templatdir-d urd ni nemj bn
        $this->view->loadTemplate('AdminCurrencyList.twig');
        $this->view->render(array('base_url' => URL,
            'lang' => Language::instance()->getTranslation(array('currency')),
            'title' => 'Currency list',
            'allCurrency' => $allCurrency,
            'sessName' => \MBM\Lib\Auth::instance()->getSession()));
    }

    /**
     * Mungunii temdegt nemeh tsonh haruulna.
     * @param object $request
     * @param object $response
     */
    function add($request, $response) {
        $this->view->prependPath(DIR_ADMIN . 'Settings' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminCurrencyAdd.twig');
        $this->view->render(array('base_url' => URL, 'lang' => Language::instance()->getTranslation(array('currency'))));
    }

// 2014/06/20 23:33    
//    /**
//     * Uurchlultiig hadgalana.
//     * @param object $request
//     * @param object $response 
//     */
//    function update($request, $response){
//        $editMe = $this->model->db->getRepository('\MBM\Entity\Currencies')->find($request->param("id"));
//        $this->saveMe($request, $editMe, false);
//        $response->redirect("/admin/currency", $code = 302);
//    }

        /**
     * Hereglegch ustgah function
     * @param object $request
     * @param object $response
     * @return String Amjilttai bolbol hereglegchin ID butsaana, ugui bol -1 butsaana
     */
    function delete($request, $response) {
        try {
            $deleteMe = $this->model->db->getRepository('\MBM\Entity\Currencies')->find($request->param("currencyId"));
            $this->model->delete($deleteMe);
            return "#" . $request->param("currencyId");
        } catch (Exception $e) {
            return -1;
        }
    }

        /**
     * Hereglegchin medeelel zasvarlah form haruulna.
     * @param object $request
     * @param object $response
     */
    function edit($request, $response) {
        $currency = Currency::instance()->find($request->param("id"));
        $this->view->prependPath(DIR_ADMIN . 'Settings' . DS . 'Views' . DS . TEMPLATE_ADMIN);
        $this->view->loadTemplate('AdminCurrencyEdit.twig');
        $this->view->render(array('base_url' => URL,
            'allCurrency' => $allCurrency, 'lang' => Language::instance()->getTranslation(array('currency'))));
    }

        /**
     * Currency medeellig zasna.
     * @param object $request
     * @param object $response
     */
    function update($request, $response) {
        $editMe = Currency::instance()->find($request->param("id"));
        $this->saveMe($request, $editMe, false);
        $response->redirect("/admin/currency", $code = 302);
    }
}
