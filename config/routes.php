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
    $controller = new App\Controller\UserController();
    $controller->login();
}
elseif ($page == 'cv') {
    $controller = new App\Controller\CvController();
    $controller->cv();
}elseif ($page == 'contact'){
    $controller =new App\Controller\ContactController();
    $controller->contact();
}elseif ($page == 'answer'){
    $controller=new App\Controller\AnswerController();
    $controller->answer();
}elseif ($page == 'ticket'){
    $controller=new \App\Controller\TicketController();
    $controller->ticket();
}
else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
