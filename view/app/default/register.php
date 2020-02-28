<h1>
    <?= $title ?>
</h1>


<form action="#" method="post" style="text-align: center; margin-top: 50px">
    <?php
    echo $form->label('nom', 'Insérez votre nom');
    echo $form->input('text','nom');
    echo $form->error('nom');

    echo $form->label('prenom', 'Insérez votre prénom');
    echo $form->input('text','prenom');
    echo $form->error('prenom');

    echo $form->label('mail', 'Insérez votre mail');
    echo $form->input('email','mail');
    echo $form->error('mail');

    echo $form->label('password1', 'Mot de passe');
    echo $form->input('password','password1');
    echo $form->error('password1');

    echo $form->label('password2', 'Confirmez votre mot de passe');
    echo $form->input('password', 'password2');

    echo $form->label('cgu', 'Veuillez accepter les CGU');
    echo $form->input('checkbox', 'cgu', 'true');

    echo $form->submit();
    ?>
</form>

