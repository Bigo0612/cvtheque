<?php use App\Service\Controller;
use App\Model\UserModel;
use App\Service\View;
$um = new UserModel();
$c = new Controller();
$c->debug($users);
$v = new View();
?>

<h1>
    <?= $title ?>
</h1>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
        <th>Adresse</th>
        <th>Adresse email</th>
        <th>Numero de téléphone</th>
    </tr>
    </thead>
    <tbody>
    <?php /*foreach ($users as $user) { */?>
    <tr>
        <td><?= $users->name ?></td>
        <td>
            <a href="<?= $v->path('usersEdit') ?>" class="btn btn-secondary">Editer</a>
            <form method="post" action="<?= /*$um->deleteUser($users->id) */?>" style="display: inline-block"
                  onsubmit="return confirm('Etes vous vraiment sûr ?')">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ property.id) }}">
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php  ?>
    </tbody>
</table>

