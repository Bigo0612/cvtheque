<?php

namespace App\Controller;

use App\Service\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'CVTEK';
        

        $this->render('app.default.frontpage',array(
            'message' => $message,
        ));
    }
    public function mentionsLegales()
    {
        $this->render('app.default.mentionsLegales',array());
    }

    public function cgu()
    {
        $this->render('app.default.cgu',array());
    }
    public function logout()
    {
        $this->render('app.default.logout',array());
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

    public function databasecv()
    {
        $this->render('app.default.databasecv',array());
    }

}
