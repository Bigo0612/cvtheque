<h1>
    <?= $title ?>
</h1>

<ul>
    <?php

    //$this->debug($questions);
    foreach ($questions as $value) {
        if ($value->answer === NULL) {
            echo '<li>' . $value->question . '</li>';
            if ($value->question != NULL) {
                echo '<form action="#" method="post" style="text-align: center; margin-top: 50px">';
                $formulaire = $form->label('answer', 'Insérez votre réponse');
                $formulaire .= $form->input('text', 'answer', 'answer');
                $formulaire .= '<input type="hidden" name="answer_id" value="' . $value->id . '">';
                $formulaire .= $form->submit();
                echo $formulaire;
                echo '</form>';
            }
        }
        /*echo $form->label('answer', 'Insérez votre réponse');
        echo $form->input('text','answer','answer');
        if (!empty($errors['answer'])) {
            echo '<span class="error">'.$errors['answer'].'</span>';
        }
        echo $form->submit();*/
    }
    ?>
</ul>