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

<h2>Les users</h2>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
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
                            <a href="index.php?page=single&id=<?= $user->id; ?>" class="btn btn-primary">Voir</a>
                            <a href="index.php?page=edit&id=<?= $user->id; ?>" class="btn btn-secondary">Editer</a>
                            <a href="index.php?page=delete&id=<?= $user->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm">
            <h2>Les tickets</h2>
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Created At</th>
                    <th>ID Answer</th>
                    <th>Importance</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tickets as $ticket) { ?>
                    <tr>
                        <td><?php echo $ticket->id; ?></td>
                        <td><?php echo $ticket->created_at_contact ?></td>
                        <td><?php echo $ticket->id_answer ?></td>
                        <td><?php echo $ticket->importance ?></td>
                        <td>
                            <a href="index.php?page=single&id=<?= $ticket->id; ?>" class="btn btn-primary">Voir</a>
                            <a href="index.php?page=edit&id=<?= $ticket->id; ?>" class="btn btn-secondary">Editer</a>
                            <a href="index.php?page=delete&id=<?= $ticket->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
