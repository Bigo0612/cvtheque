<h1>
    <?= $title ?>
</h1>


<form action="#" method="post" style="text-align: center; margin-top: 50px">
<?php
echo $form->label('question','Question de l\'utilisateur');
echo $form->input('text','question','question');
if (!empty($errors['question'])){
    echo '<span class="error">'.$errors['question'].'</span>';
}
echo $form->label('answer', 'Insérez votre réponse');
echo $form->input('text','answer','answer');
if (!empty($errors['answer'])) {
    echo '<span class="error">'.$errors['answer'].'</span>';
}
echo $form->submit();
?>
</form>