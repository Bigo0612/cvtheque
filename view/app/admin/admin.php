<?php use App\Controller\AdminController;
use App\Model\AdminModel;
use App\Service\View;
$ac = new AdminController();
$am = new AdminModel();
$v = new View();
$c = new \App\Service\Controller();
?>

<h1>
    <?= $title ?>
</h1>

<h2>Gérer les users</h2>

<?php
$c->debug($users);
foreach ($users as $user) { ?>
  <p><?php echo $user->name; ?> ( <?php echo $user->firstname ?>)</a></p>
  <a href="index.php?page=edit&id=<?= $user->id; ?>">Edit</a>
<?php }
?>

