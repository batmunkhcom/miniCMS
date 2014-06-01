<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/' . APP_ENABLED . '/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php

\Category::convertToArray();
print_r(\Category::$treeArray);
