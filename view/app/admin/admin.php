<?php use App\Controller\AdminController;
use App\Model\AdminModel;
use App\Service\View;
$ac = new AdminController();
$am = new AdminModel();
$v = new View();
$c = new \App\Service\Controller();
?>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<h1>
    <?= $title ?>
</h1>

<h2>Gérer les users</h2>

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
    </thead>
    <tbody>
       <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->firstname ?></td>
            <td>
                <a href="index.php?page=edit&id=<?= $user->id; ?>" class="btn btn-secondary">Editer</a>
                <a href="index.php?page=delete&id=<?= $user->id; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
