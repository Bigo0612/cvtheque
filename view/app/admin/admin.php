<h1>
    <?= $title ?>
</h1>

<h2>Gérer les users</h2>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?= $this->nom ?></td>
        <td>
            <a href="<?= $a->editUser($this->id) ?>" class="btn btn-secondary">Editer</a>
            <form method="post" action="<?= $a->deleteUser($this->id) ?>" style="display: inline-block"
                  onsubmit="return confirm('Etes vous vraiment sûr ?')">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ property.id) }}">
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<div class="text-right">
    <a href="<?= $a->addUser() ?>"></a>
</div>

