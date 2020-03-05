<?php

namespace App\Controller;

use App\Service\Controller;
use App\Model\UserModel;
use App\Repository\Validation;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = '';
        

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

    public function forgot()
    {
        $title = 'Mot de passe oublié';
        $html = '';
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $check = UserModel::userLogin($post['email']);
            $token = $check->token;
            if (!empty($check && !empty($token))) {
                $html = '<a href="index.php?page=changepwd&token='.$token.'">Changer de MDP</a>';
            } else {
                $html = 'Email inconnu';
            }
        }

        $this->render('app.default.forgot', compact('title', 'html'));
    }

    public function changePwd()
    {
        $title = 'Changer votre mdp';
        $v = new Validation();
        $um = new UserModel();
        $i = $um->checkId($_GET['token']);
        $um->setId($i->id);
        $id = $um->getId();
        var_dump($id);
        if (!empty($id)) {
            if (!empty($_POST['submitted'])) {
                $post = $this->cleanXss($_POST);
                $password = $v->textValid($post['password1'], 'MDP', 5, 20);
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $token = UserModel::generateToken(255);
                UserModel::changePwd($hash, $token, $id);
            }
        } else {
            echo 'Cest pété';
        }

        $this->render('app.default.changepwd', compact('title'));
    }

}
