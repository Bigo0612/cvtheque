<?php


namespace App\Controller;


use App\Service\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'La page admin';

        $this->render(
            'app.admin.admin', array(
                'title' => $title,
        ));
    }
}
