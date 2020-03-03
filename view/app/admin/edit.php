<?php
use App\Service\Controller;
$v = new Controller();
?>

<h1>
    <?= $title ?>
</h1>

<form action="#" method="post">
    <label for="nom">Entrer le nom</label>
    <input type="text" name="name"  id="nom" value="<?= $user->name ?>">
    <label for="firstname">Entrer le prénom</label>
    <input type="text" name="firstname" id="firstname" value="<?= $user->firstname ?>">
    <label for="email">Entrer le mail</label>
    <input type="email" name="email" id="email" value="<?= $user->email ?>">
    <label for="roles">Entrer le role</label>
    <input type="number" name="roles" id="roles" value="<?= $user->roles ?>">
    <input type="submit" name="submitted" value="Envoyer">
</form>

<?php
$v->debug($_POST['submitted'])
?>
