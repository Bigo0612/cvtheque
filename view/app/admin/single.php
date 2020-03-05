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

<table class="table table-stripped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Créé le</th>
        <th>Modifié le</th>
        <th>Role</th>
        <th>Token</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->firstname ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->created_at ?></td>
            <td><?php echo $user->modified_at ?></td>
            <td><?php echo $user->roles ?></td>
            <td><?php echo $user->token ?></td>
        </tr>
    </tbody>
</table>
