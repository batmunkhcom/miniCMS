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
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class MySQLAdapter implements \D\DB\DatabaseInterface {

    public function connect() {

    }

    public function delete($table, $where = "") {

    }

    public function disconnect() {

    }

    public function execute(array $parameters = array()) {

    }

    public function fetch($fetchStyle = null, $cursorOrientation = null, $cursorOffset = null) {

    }

    public function fetchAll($fetchStyle = null, $column = 0) {

    }

    public function insert($table, array $bind) {

    }

    public function prepare($sql, array $options = array()) {

    }

    public function select($table, array $bind, $boolOperator = "AND") {

    }

    public function update($table, array $bind, $where = "") {

    }

    public function fetchAllFields($table) {

    }

    public function fetchAllTables() {

    }

}
