<?php

$objects = \Object::fetchAll();

$template->set('objects', $objects);
