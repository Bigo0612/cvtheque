<?php

namespace App\Controller;

use App\Service\Controller;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Inscription';

        $this->render('app.default.register', array(
            'title' => $title
        ));
    }

    public function listing()
    {

    }

    public function Register()
    {
        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['nom'] = $v->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $v->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['password1'] = $v->textValid($post['password1'], 'password', 5, 20);
            $errors['password2'] = $v->generateErrorRepeat($password1, $password2, 'Les mots de passe ne correspondent pas.');
            $errors['cgu'] = $v->generateErrorCheckBox($cgu, "Veuillez accepter les Conditions générales d’utilisation.");

            if ($v->IsValid($errors) == true) {
                $hash = password_hash($password1, PASSWORD_BCRYPT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }
    }
}
