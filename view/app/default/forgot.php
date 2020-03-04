<h1>
    <?= $title ?>
</h1>

<?php if (empty($_POST)) { ?>
<form action="#" method="post">
    <label for="email">Votre adresse mail</label>
    <input type="email" name="email" id="email">
    <input type="submit" name="submitted" value="Envoyer">
</form>
<?php } else {
    echo $html;
}
