<?php


namespace App\Controller;


use App\Service\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'La page admin';
        $truc = '<p>Affiche un truc stp</p>';

        $this->render(
            'app.admin.admin', array(
                'title' => $title,
                'truc'   => $truc
        ));
    }

    public function userAdmin()
    {

    }
}
