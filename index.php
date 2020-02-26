<?php

//session_start();
include ('inc/header.php');
//require('inc/function.php');
//$title = ' cvtheque';

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

<section class="research">
    <div class="wrap">
        <div class="frame">
            <div class="research_executive">
                <a class="logo2" href="index.html"><img src="asset/img/logo.png" alt=""></a>
                <hr>
                <div class="research_question">
                    <p>Que recherchez vous?</p>
                </div>
                <form class="form">
                    <div class="main_search">
                        <input type="text" class="searchJob2" placeholder="Search jobs">
                        <div class="btn3">
                            <button class="btn4" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<?php include('inc/footer.php');
