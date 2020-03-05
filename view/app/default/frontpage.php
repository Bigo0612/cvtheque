<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<?php use App\Service\View;
$c = new View();
?>

<section class="research">
    <div class="wrap">
        <div class="frame">
            <div class="research_executive">
                <a class="logo2" href="index.php"><img src="../public/assets/img/cv.png" alt=""></a>
                <hr>
                <div class="research_question">
                    <p>Que recherchez vous?</p>
                </div>
                <form class="form">
                    <div class="main_search">
                        <input type="text" class="searchJob2" placeholder="Search jobs">
                        <div class="btn3">
                            <button class="btn4" type="button">
                                <a href="<?= $c->path('databasecv') ?>"><i  class="fas fa-search"></i></a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>
