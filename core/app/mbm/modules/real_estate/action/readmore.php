<?php

$object = \Object::getById(get('id'));
$template->set('object', $object);
