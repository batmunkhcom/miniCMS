<?php define('APPMODE', 'prod') ?>

<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php
$router = new Router();

// Define routes
$router->get('/hello/(\w+)', function($name) {
    echo 'Hello ' . htmlentities($name);
    echo '<br />';
});
// Run it!
$router->run();

$aa = new \B\Testing();
echo $aa->a();
echo '<hr />';

$cc = new B\C\A();
echo $cc->aa();