<?php

namespace D\Storage;

interface ObjectStorageInterface extends \Countable, \Iterator, \ArrayAccess {

    public function attach($object, $data = null);

    public function detach($object);

    public function clear();
}
