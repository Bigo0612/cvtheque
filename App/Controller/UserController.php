<?php

namespace App\Controller;

use App\Service\Controller;
use App\Model\UserModel;
use App\Repository\Form;
use App\Repository\Validation;

class UserController extends Controller
{
    public function index()
    {

    }

    public function listing()
    {

    }

    public function register()
    {
        $title = 'Inscription';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['nom'] = $v->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $v->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['password1'] = $v->textValid($post['password1'], 'password', 5, 20);
            $errors['password2'] = $v->generateErrorRepeat($post['password1'], $post['password2'], 'Les mots de passe ne correspondent pas.');
            $errors['cgu'] = $v->generateErrorCheckBox($post['cgu'], "Veuillez accepter les Conditions générales d’utilisation.");

            if ($v->IsValid($errors) == true) {
                $hash = password_hash($post['password1'], PASSWORD_DEFAULT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.default.register', array(
            'title' => $title,
            'form' => $form
        ));
    }

    public function login()
    {
        $title = 'Connexion';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $this->debug($post);
            $v = new Validation();
            $errors['email'] = $v->emailValid($post['mail']);

            if ($v->IsValid($errors) == true) {
                $user = UserModel::userLogin($post['mail']);
                $this->debug($user);
                if ($user->email === $post['mail'] && password_verify($post['password'], $user->pass)) {
                    $_SESSION = array(
                        'id'    => $user->id,
                        'nom'   => $user->name,
                        'prenom'=> $user->firstname,
                        'role'  => $user->role,
                        'email' => $user->email,
                        'ip'    => $_SERVER['REMOTE_ADDR']
                    );
                } else {
                        $errors['password'] = 'Mot de passe ou mail incorrect';
                }
            }
        } else {
            $errors['email'] = 'Erreur dans le fomulaire';
        }

        $this->debug($_SESSION);

        $this->render('app.default.login', array(
            'title' => $title,
            'form'  => $form
        ));
    }
}
