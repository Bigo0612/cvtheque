<?php


include ('inc/header.php');
?>

<section class="research">
    <div class="wrap">
        <div class="frame">
            <div class="research_executive">
                <a class="logo2" href="index.html"><img src="asset/img/logo.png" alt=""></a>
                <hr>
                <div class="research_question">
                    <p>Inscrivez vous</p>
                </div>
                <form class="form">
                    <label class="lab" for="nom">Nom</label>
                    <div class="inscrip">
                        <input type="text" class="searchJob2" placeholder="Tarantino">
                    </div>
                    <label class="lab" for="prenom">prénom</label>
                    <div class="inscrip">
                        <input type="text" class="searchJob2" placeholder="Quentin">
                    </div>
                    <label class="lab" for="email">Email</label>
                    <div class="inscrip">
                        <input type="text" class="searchJob2" placeholder="Tarantino@gmail.com">
                    </div>
                    <label class="lab" for="password">mot de passe</label>
                    <div class="inscrip">
                        <input type="text" class="searchJob2" placeholder="">
                    </div>
                    <label class="lab" for="password2">Répétez votre mot de passe</label>
                    <div class="inscrip">
                        <input type="text" class="searchJob2" placeholder="">
                    </div>
                    <div class="cgu">
                        <a href="cgu.php">Conditions générales d’utilisation</a>
                        <input type="checkbox" name="cgu" id="cgu" value="yes">
                    </div>
                    <div class="sub">
                        <input id="susub" type="submit" name="submitted" value="Inscrivez vous">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>

<?php include('inc/footer.php');