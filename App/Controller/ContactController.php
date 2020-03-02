<?php


namespace App\Controller;

use App\App;
use App\Service\Controller;
use App\Model\ContactModel;
use App\Repository\Form;
use App\Repository\Validation;

class ContactController extends Controller
{
    public function contact()
    {
        $title = 'contact';
        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['name'] = $v->textValid($post['name'], 'name', 2, 250);
            $errors['firstname'] = $v->textValid($post['firstname'], 'firstname', 2, 150);
            $errors['message'] = $v->textValid($post['message'], 'message', 2, 500);
            $question = $v->textValid($post['message'], 'message', 2, 500);
        }
        if ($v->IsValid($errors) == true) {
            ContactModel::insertContact($post['mail'], $post['name'], $post['firstname'], $post['message']);
            $sql = "INSERT INTO answer VALUES ('". $question."')WHERE question";
            App::getDatabase()->prepareInsert($sql,[$question]);

        }
        $this->render('app.default.contact',array(
            'title'=>$title,
            'form' => $form,
            'errors'=> $errors
        ));
    }


}