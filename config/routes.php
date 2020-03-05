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
elseif ($page == 'cv') {
    $controller = new \App\Controller\CvController();
    $controller->cv();
}
elseif ($page == 'cv') {
    $controller = new \App\Controller\UserController();
    $controller->cv();
}
elseif ($page == 'account') {
    $controller = new \App\Controller\UserController();
    $controller->account();
}
elseif ($page == 'logout') {
    $controller = new \App\Controller\DefaultController();
    $controller->logout();
}
elseif ($page == 'mentionsLegales') {
    $controller = new \App\Controller\DefaultController();
    $controller->mentionsLegales();
}
elseif ($page == 'cgu') {
    $controller = new \App\Controller\DefaultController();
    $controller->cgu();
}
elseif ($page == 'databasecv') {
    $controller = new \App\Controller\DefaultController();
    $controller->databasecv();
}
elseif ($page == 'admin') {
    $controller = new \App\Controller\AdminController();
    $controller->index();
}
elseif ($page == 'usersEdit') {
    $controller = new \App\Controller\UserController();
    $controller->usersEditById($_GET['id']);
}
elseif ($page == 'delete') {
    $controller = new \App\Controller\UserController();
    $controller->deleteUserById($_GET['id']);
}
elseif ($page == 'singleUser') {
    $controller = new \App\Controller\UserController();
    $controller->single($_GET['id']);
}
else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
