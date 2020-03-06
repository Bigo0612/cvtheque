<?php

namespace App\Controller;

use App\Service\Controller;
use App\Model\UserModel;
use App\Repository\Form;
use App\Repository\Validation;

class UserController extends Controller
{
    public function register()
    {
        $title = '';

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
            'form' => $form,
            'errors' => $errors
        ));
    }

    public function account()
    {
        $this->render('app.users.account', array(
        ));
    }

    public function cv()
    {
        $this->render('app.cv.cv', array(
        ));
    }
    public function login()
    {
        $title = 'Connexion';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['mail'] = $v->emailValid($post['mail']);

            if ($v->IsValid($errors) == true) {
                $user = UserModel::userLogin($post['mail']);
                if ($user->email === $post['mail'] && password_verify($post['password'], $user->pass)) {
                    $_SESSION = array(
                        'id'    => $user->id,
                        'nom'   => $user->name,
                        'prenom'=> $user->firstname,
                        'role'  => $user->role,
                        'email' => $user->email,
                        'ip'    => $_SERVER['REMOTE_ADDR']
                    );
                    header('Location: index.php?page=home');
                } else {
                        $errors['password'] = 'Mot de passe ou mail incorrect';
                }
            } else {
                $errors['login'] = 'Erreur dans les identifiants';
            }
        } else {
            $errors['email'] = 'Erreur dans le fomulaire';
        }

        $this->render('app.default.login', array(
            'title' => $title,
            'form'  => $form,
            'errors' => $errors
        ));
    }

    public function index()
    {
        $title = 'La page Users Edit';
        $users = UserModel::findAllUsers();

        $this->render(
            'app.users.account', array(
            'title' => $title,
            'users' => $users
        ));
    }


    public function usersEditById($id)
    {
        $title = "Editer l'utilisateur";

        $user = UserModel::findById($_GET['id']);
        $errors = array();

        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            if($v->isValid($errors)) {
                UserModel::usersEdit($id, $post);
            }
        }
        $form = new Form($errors);
        $this->render('app.users.usersEdit' , compact('user','form','title'));
    }

    public function deleteUserById($id)
    {
        UserModel::delete($id);
        header('Location: index.php?page=account');
    }

    private function ifExist($id){
        $user = UserModel::findById($id);
        if(empty($user)) { $this->Abort404(); }
        return $user;
    }

    public function single($id)
    {
        $user = $this->ifExist($id);
        $title = $user->name;
        $this->render('app.users.singleUser', compact('user', 'title'));
    }
}
