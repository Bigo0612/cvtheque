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
        $questions = AnswerModel::all();

        if (isset($_POST['submitted'])){
            $post = $this->cleanXss($_POST);
            $v = new Validation();

            $errors['answer'] = $v->textValid($post['answer'],'answer',2,250);

            if ($v->IsValid($errors)== true){
                AnswerModel::updateAnswer($post['answer_id'],$post['answer']);

            }
        }

        $this->render('app.default.answer',array(
            'questions' => $questions,
            'title'=>$title,
            'form'=>$form,
            'errors'=>$errors
        ));
    }

}