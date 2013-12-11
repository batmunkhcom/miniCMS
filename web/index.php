<?php define('APPMODE', 'dev') ?>

<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php
$router = new M\Router();

// Define routes
$router->get('/hello/(\w+)', function($name) {
    echo 'Hello ' . htmlentities($name);
    echo '<br />';
});
// Run it!
$router->run();


print_r($router->get());
echo '<hr />';

$aa = new M\App();
echo $aa->app;