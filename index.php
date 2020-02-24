<?php

include ('inc/header.php');

define('PROJECT_FOLDER', getcwd());
define('SRC_FOLDER', PROJECT_FOLDER . '/src/');
$return = 'NOP';

if (isset($_GET['controller']) && file_exists(SRC_FOLDER . '/Controllers/' . $_GET['controller'] . 'Controller.php')) {
    require_once(SRC_FOLDER . '/Controllers/' . $_GET['controller'] . 'Controller.php');
    $targetController = $_GET['controller'] . 'Controller';
    $controller = new $targetController();

    $targetMethod = isset($_GET['action']) ? $_GET['action'] : 'index';
    $return = method_exists($controller, $targetMethod) ? $controller->$targetMethod() : '';

}
//die($return);
?>

<script src="asset/js/main.js"></script>
<script src="https://kit.fontawesome.com/5d1ae1daad.js" crossorigin="anonymous"></script>

</html>
