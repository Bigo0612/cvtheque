<?php use App\Service\Controller;
use App\Model\AdminModel;
use App\Service\View;
$am = new AdminModel();
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
    </tr>
    </thead>
    <tbody>
    <?php /*foreach ($users as $user) { */?>
        <tr>
            <td><?= $users->name ?></td>
            <td>
                <a href="<?= $v->path('editUser') ?>" class="btn btn-secondary">Editer</a>
                <form method="post" action="<?= $am->deleteUser($users->id) ?>" style="display: inline-block"
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

<div class="text-right">
    <a href="<?= $a->addUser() ?>"></a>
</div>
