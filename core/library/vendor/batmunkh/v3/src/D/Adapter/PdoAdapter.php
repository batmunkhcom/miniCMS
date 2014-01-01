<?php

namespace D\Adapter;

class PdoAdapter implements \D\DB\DatabaseInterface {

    protected $config = array();
    protected $database;
    protected $connection;
    protected $statement;
    protected $fetchMode = \PDO::FETCH_ASSOC;

    public function __construct($dsn, $username = null, $password = null, array $driverOptions = array()) {
        $this->config = compact("dsn", "username", "password", "driverOptions");
        $this->database = DB_NAME;
    }

    public function getStatement() {
        if ($this->statement === null) {
            throw new \PDOException(
            "There is no PDOStatement object for use.");
        }
        return $this->statement;
    }

    public function connect() {
        // if there is a PDO object already, return early
        if ($this->connection) {
            return;
        }

        try {
            $this->connection = new \PDO(
                    $this->config["dsn"], $this->config["username"], $this->config["password"], $this->config["driverOptions"]);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(
                    \PDO::ATTR_EMULATE_PREPARES, false);
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function disconnect() {
        $this->connection = null;
    }

    public function prepare($sql, array $options = array()) {
        $this->connect();
        try {
            $this->statement = $this->connection->prepare($sql, $options);
            return $this;
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function execute(array $parameters = array()) {
        try {
            $this->getStatement()->execute($parameters);
            return $this;
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function countAffectedRows() {
        try {
            return $this->getStatement()->rowCount();
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function getLastInsertId($name = null) {
        $this->connect();
        return $this->connection->lastInsertId($name);
    }

    public function fetch($fetchStyle = null, $cursorOrientation = null, $cursorOffset = null) {
        if ($fetchStyle === null) {
            $fetchStyle = $this->fetchMode;
        }

        try {
            return $this->getStatement()->fetch($fetchStyle, $cursorOrientation, $cursorOffset);
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function fetchAll($fetchStyle = null, $column = 0) {
        if ($fetchStyle === null) {
            $fetchStyle = $this->fetchMode;
        }

        try {
            return $fetchStyle === \PDO::FETCH_COLUMN ? $this->getStatement()->fetchAll($fetchStyle, $column) : $this->getStatement()->fetchAll($fetchStyle);
        } catch (\PDOException $e) {
            throw new \RunTimeException($e->getMessage());
        }
    }

    public function select($table, array $bind = array(), $boolOperator = "AND") {
        if ($bind) {
            $where = array();
            foreach ($bind as $col => $value) {
                unset($bind[$col]);
                $bind[":" . $col] = $value;
                $where[] = $col . " = :" . $col;
            }
        }

        $sql = "SELECT * FROM " . $table
                . (($bind) ? " WHERE "
                        . implode(" " . $boolOperator . " ", $where) : " ");
        $this->prepare($sql)
                ->execute($bind);
        return $this;
    }

    public function insert($table, array $bind) {
        $cols = implode(", ", array_keys($bind));
        $values = implode(", :", array_keys($bind));
        foreach ($bind as $col => $value) {
            unset($bind[$col]);
            $bind[":" . $col] = $value;
        }

        $sql = "INSERT INTO " . $table
                . " (" . $cols . ")  VALUES (:" . $values . ")";
        return (int) $this->prepare($sql)
                        ->execute($bind)
                        ->getLastInsertId();
    }

    public function update($table, array $bind, $where = "") {
        $set = array();
        foreach ($bind as $col => $value) {
            unset($bind[$col]);
            $bind[":" . $col] = $value;
            $set[] = $col . " = :" . $col;
        }

        $sql = "UPDATE " . $table . " SET " . implode(", ", $set)
                . (($where) ? " WHERE " . $where : " ");
        return $this->prepare($sql)
                        ->execute($bind)
                        ->countAffectedRows();
    }

    public function delete($table, $where = "") {
        $sql = "DELETE FROM " . $table . (($where) ? " WHERE " . $where : " ");
        return $this->prepare($sql)
                        ->execute()
                        ->countAffectedRows();
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
