<?php

namespace D\DB;

interface DatabaseInterface {

    public function connect();

    public function disconnect();

    public function prepare($sql, array $options = array());

    public function execute(array $parameters = array());

    public function fetch($fetchStyle = null, $cursorOrientation = null, $cursorOffset = null);

    public function fetchAll($fetchStyle = null, $column = 0);

    public function select($table, $bind = array(), $where = "");

    public function insert($table, array $bind);

    /**
     * SQL query. PS: turshih heregtei!!!
     *
     * @param string $sql Query. Ex : SELECT * FROM table WHERE id=:tmp_id
     * @param array $bind bind values. Ex: array('tmp_id'=>1)
     */
    public function query($sql, array $bind = array());

    public function update($table, array $bind, $where = "");

    public function delete($table, $where = "");

    public function fetchAllTables();

    public function fetchAllFields($table);
}
