<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="asset/css/style.css">
    <title></title>
</head>
<body>
<?php
// Barre de recherche //
require('inc/pdo.php');

$article = $pdo->query('SELECT title FROM article ORDER BY id DESC');

if (isset($_GET['q']) AND !empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);

    $article = $pdo->query('SELECT title FROM article WHERE title LIKE "%' . $q . '%" ORDER BY is DESC');

    if ($article->rowCount() == 0) {
        $article = $pdo->query('SELECT title FROM article WHERE CONCAT(title, contenu) LIKE "%' . $q . '%" ORDER BY is DESC');
    }
}
?>

<form action="GET">
    <input type="search" name="q" placeholder="CV..."/>
    <input type="submit" value="Valider"/>
</form>
<?php
if ($article->rowCount() > 0) { ?>
    <ul>
        <?php while ($a = $article->fetch()) { ?>
            <li><?= $a['title'] ?></li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <?= $q ?>
<?php } ?>
</body>
</html>









<?php
define('PROJECT_FOLDER', getcwd());
define('SRC_FOLDER', PROJECT_FOLDER . '/src/');
$return = 'NOP';

if (isset($_GET['controller']) && file_exists(SRC_FOLDER . '/Controllers/' . $_GET['controller'] . 'Controller.php')) {
    require_once(SRC_FOLDER . '/Controllers/' . $_GET['controller'] . 'Controller.php');
    $targetController = $_GET['controller'] . 'Controller';
    $controller = new $targetController();

    $targetMethod = isset($_GET['action']) ? $_GET['action'] : 'index';
    $return = method_exists($controller, $targetMethod) ? $controller->$targetMethod() : '';

}
die($return);
?>
