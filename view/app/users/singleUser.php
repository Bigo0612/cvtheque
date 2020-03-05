<?php use App\Controller\UserController;
use App\Model\UserModel;
use App\Service\View;
$acc = new UserController();
$um = new UserModel();
$v = new View();
$c = new \App\Service\Controller();
?>


<h1>
    <?= $title ?>
</h1>

<table class="compte">
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