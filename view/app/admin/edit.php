<h1>
    Edit un user
</h1>

<form action="">
    <label for="nom">Entrer le nom</label>
    <input type="text" id="nom" value="<?= $user->name ?>">
    <label for="firstname">Entrer le prénom</label>
    <input type="text" id="firstname" value="<?= $user->firstname ?>">
    <label for="email">Entrer le mail</label>
    <input type="email" id="email" value="<?= $user->email ?>">
    <label for="password1">Entrer le mdp</label>
    <input type="password" id="password1">
    <label for="password2">Confirmer le mdp</label>
    <input type="password" id="password2">
</form>
