<h1>
    <?= $title ?>
</h1>


<form action="#" method="post" style="text-align: center; margin-top: 50px">
<?php
echo $form->label('mail','Insérez votre mail');
echo $form->input('email','mail','mail');
if (!empty($errors['mail'])){
    echo '<span class="error">'.$errors['mail'].'</span>';
}
echo $form->label('name', 'Insérez votre nom');
echo $form->input('text','name','name');
if (!empty($errors['name'])) {
    echo '<span class="error">'.$errors['name'].'</span>';
}

echo $form->label('firstname', 'Insérez votre prénom');
echo $form->divStart('nomdeclasse');
echo $form->input('text','firstname','firstname');
echo $form->divEnd();
if (!empty($errors['firstname'])) {
    echo '<span class="error">'.$errors['firstname'].'</span>';
}
echo $form->label('message', 'Insérez votre message');
echo $form->input('text','message','message');
if (!empty($errors['message'])) {
    echo '<span class="error">'.$errors['message'].'</span>';
}
echo $form->submit();
?>
    </form>
