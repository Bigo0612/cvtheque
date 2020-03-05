<?php
use App\Service\Controller;
?>

<h1>
    <?= $title ?>
</h1>

<form action="#" method="post">
    <label for="nom">Entrer le nom</label>
    <input type="text" name="name"  id="nom" value="<?= $user->name ?>">
    <label for="firstname">Entrer le prénom</label>
    <input type="text" name="firstname" id="firstname" value="<?= $user->firstname ?>">
    <label for="age">Entrer votre age</label>
    <input type="number" name="age" id="age" value="<?= $user->age ?>">
    <label for="adresse">Entrer votre adresse postale</label>
    <input type="text" name="adresse" id="adresse" value="<?= $user->adresse ?>">
    <label for="email">Entrer le mail</label>
    <input type="email" name="email" id="email" value="<?= $user->email ?>">
    <label for="tel">Entrer votre numero de téléphone</label>
    <input type="number" name="tel" id="tel" value="<?= $user->tel ?>">
    <input type="submit" name="submitted" value="Envoyer">
</form>