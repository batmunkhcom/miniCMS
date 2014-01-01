<?php

namespace D\Storage;

class ObjectStorage extends ObjectStorageMapper {

    public function clear() {
        $tempStorage = clone $this;
        $this->addAll($tempStorage);
        $this->removeAll($tempStorage);
        $tempStorage = null;
    }

}
