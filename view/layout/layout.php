<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&display=swap" rel="stylesheet">
    <title>Framework POO</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/css/styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>cvtheque</title>
</head>
<body>

<header>
    <nav class="navbar">
        <div class="container">
            <a class="logo" href="<?= $view->path('home'); ?>"><img src="asset/img/logo.png" alt=""></a>
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

                <li class="inscription">
                        <a class="inscription-link" href="<?= $view->path('register'); ?>">
                        <i class="fas fa-user-friends"></i>
                        <span class="inscript">Inscription</span></a>
                </li>

                <li class="connexion">
                        <a class="connexion-link" href="<?= $view->path('login'); ?>">
                        <span class="connex">Connexion</span></a>
                </li>
                <li><a href="<?= $view->path('cv'); ?>">CV</a></li>
            </ul>
        </div>
    </nav>
    <div class="clear"></div>
</header>

<div class="container">
    <?= $content; ?>
</div>

<footer>

</footer>

<script src="../public/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
