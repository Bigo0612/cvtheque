<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&display=swap" rel="stylesheet">
    <title>Framework POO</title>
<!--    <link rel="stylesheet" type="text/css" href="../public/assets/css/styles.css">
-->    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>cvtheque</title>
</head>
<body>

<header>

    <nav class="navbar">
        <div class="container">
            <a class="logo" href="<?= $view->path('home'); ?>"><img src="../public/assets/img/cv.png" alt=""></a>
            <form class="form">
                <div class="search">
                    <input type="text" class="searchJob" placeholder="Search jobs">
                    <div class="btn">
                        <button class="btn2" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar2">
                <li class="contact">
                    <a class="job-contact" href="<?= $view->path('contact'); ?>">
                        <i class="fas fa-pencil-alt"></i>
                        <span class="contact-me">Contact</span></a>
                </li>

                <li class="nav-job">
                    <a class="job-link" href="<?= $view->path('jobs'); ?>">
                        <i class="fas fa-briefcase"></i>
                        <span class="jobs">Jobs</span></a>

                    <select class="divers-jobs" onchange="MM_jumpMenu('parent',this,0)">
                        <option value="jobs0.php">Jobs0</option>
                        <option value="jobs1.php">Jobs1</option>
                        <option value="jobs2.php">Jobs2</option>
                        <option value="jobs3.php">Jobs3</option>
                        <option value="jobs4.php">Jobs4</option>
                        <option value="jobs5.php">Jobs5</option>
                        <option value="jobs6.php">Jobs6</option>
                    </select>
                </li>

                <?php if (empty($_SESSION)) { ?>
                <li class="inscription">
                        <a class="inscription-link" href="<?= $view->path('register'); ?>">Inscription</a>
                        <i class="fas fa-user-friends"></i>
                </li>
                <li class="connexion">
                     <a class="connexion-link" href="<?= $view->path('login'); ?>">Connexion</a>
                </li>
                <?php } elseif ($_SESSION['role'] == "admin") { ?>
                <li class="connexion">
                    <a href="<?= $view->path('logout') ?>">Déconnexion</a>
                </li>
                <li>
                    <a href="<?= $view->path('admin') ?>">Admin</a>
                </li>
                <?php } else { ?>
                <li class="connexion">
                    <a href="<?= $view->path('account') ?>">Mon compte</a>
                </li>
                <li class="connexion">
                    <a href="<?= $view->path('logout') ?>">Déconnexion</a>
                </li>
                <?php } ?>

                <li><a href="<?= $view->path('cv'); ?>">CV</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">
    <?= $content; ?>
</div>

<footer>
    <div class="foot">
        <p>&copy; 2020 - cvtheque &reg;</p>
        <a href="index.php">Accueil</a>
        <a href="contact.php">Contact</a>
        <a href="<?= $view->path('cgu'); ?>">CGU</a>
        <a href="<?= $view->path('mentionsLegales'); ?>">Mentions légales</a>
    </div>
</footer>

<script src="../public/assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/5d1ae1daad.js" crossorigin="anonymous"></script>
<script src="../public/assets/js/jscolor.js"></script>
<script src='../public/assets/js/spectrum.js'></script>

</body>
</html>
