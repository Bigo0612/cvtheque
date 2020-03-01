<?php
$page = 'home';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'home') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
}
elseif ($page == 'register') {
    $controller = new App\Controller\UserController();
    $controller->register();
}
elseif ($page == 'login') {
    $controller = new \App\Controller\UserController();
    $controller->login();
}
elseif ($page == 'mentionsLegales') {
    $controller = new \App\Controller\defaultController();
    $controller->mentionsLegales();
}
elseif ($page == 'cgu') {
    $controller = new \App\Controller\defaultController();
    $controller->cgu();
}
elseif ($page == 'databasecv') {
    $controller = new \App\Controller\defaultController();
    $controller->databasecv();
}


else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
