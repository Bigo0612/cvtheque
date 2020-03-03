<?php


namespace App\Controller;


use App\Model\AdminModel;
use App\Service\Controller;
use App\Repository\Validation;
use App\Repository\Form;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'La page admin';
        $truc = '<p>Affiche un truc stp</p>';
        $users = AdminModel::findAllUsers();

        $this->render(
            'app.admin.admin', array(
                'title' => $title,
                'truc'   => $truc,
                'users' => $users
        ));
    }

    public function listingUser()
    {
        $title = 'Listing des User';

        $count      = AdminModel::count();

        $this->render('app.admin.listing', array(
            'title' => $title,
            'users' => $users
        ));
    }

    public function editUserById($id)
    {
        $title = "Editer l'utilisateur";

        $user = AdminModel::findById($_GET['id']);
        $errors = array();
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            if($v->isValid($errors)) {
                AdminModel::editUser($id, $post);
            }
        }
        $form = new Form($errors);
        $this->render('app.admin.edit' ,compact('user','form'));
    }

}
