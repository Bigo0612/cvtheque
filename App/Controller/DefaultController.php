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

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
