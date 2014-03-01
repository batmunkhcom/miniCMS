<?php

namespace D\Model;

abstract class AbstractEntity implements EntityInterface {

    protected $fields = array();
    protected $allowedFields = array();

    public function __construct(array $fields = array()) {
        if (!empty($fields)) {
            foreach ($fields as $name => $value) {
                $this->$name = $value;
            }
        }
    }

    public function setField($name, $value) {
        return $this->__set($name, $value);
    }

    public function getField($name) {
        return $this->__get($name);
    }

    public function fieldExists($name) {
        return $this->__isset($name);
    }

    public function removeField($name) {
        return $this->__unset($name);
    }

    public function toArray() {
        return $this->fields;
    }

    public function __set($name, $value) {
        $this->checkAllowedFields($name);
        $mutator = "set" . ucfirst(strtolower($name));
        if (method_exists($this, $mutator) &&
                is_callable(array($this, $mutator))) {
            $this->$mutator($value);
        } else {
            $this->fields[$name] = $value;
        }
        return $this;
    }

    public function __get($name) {
        $this->checkAllowedFields($name);
        $accessor = "get" . ucfirst($name);
        if (method_exists($this, $accessor) &&
                is_callable(array($this, $accessor))) {
            return $this->$accessor();
        }
        if (!$this->__isset($name)) {
            throw new \InvalidArgumentException(
            "The field '$name' has not been set for this entity yet.");
        }
        return $this->fields[$name];
    }

    public function __isset($name) {
        $this->checkAllowedFields($name);
        return isset($this->fields[$name]);
    }

    public function __unset($name) {
        $this->checkAllowedFields($name);
        if (!$this->__isset($name)) {
            throw new \InvalidArgumentException(
            "The field \"$name\" has not been set for this entity yet.");
        }
        unset($this->fields[$name]);
        return $this;
    }

    protected function checkAllowedFields($field) {
        if (!in_array($field, $this->allowedFields)) {
            throw new \InvalidArgumentException(
            "The requested operation on the field '$field' is not allowed for this entity.");
        }
    }

}
