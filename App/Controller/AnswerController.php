<?php


namespace App\Controller;

use App\Model\AnswerModel;
use App\Service\Controller;

use App\Repository\Form;
use App\Repository\Validation;

class AnswerController extends Controller
{
    public function answer(){
        $title = 'answer';
        $errors =array();
        $form = new Form($errors,'post');
        if (isset($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            //get question en basse de donnée (a faire)
            $v = new Validation();
            $errors['answer'] = $v->textValid($post['answer'],'answer');
            $errors['question'] = $v->textValid($post['question'],'question',2,500);
        }
        if ($v->IsValid($errors)== true){
            AnswerModel::insertAnswer($post['answer'],$post['question']);
        }
        $this->render('app.default.answer',array(
            'title'=>$title,
            'form'=>$form,
            'errors'=>$errors
        ));
    }

}