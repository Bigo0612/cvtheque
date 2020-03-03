<?php

//session_start();
include ('inc/header.php');
//require('inc/function.php');
//$title = ' cvtheque';

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
//die($return);
?>

<section class="advanced">
    <div class="wrap">
        <div class="option">
            <div class="research_executive">
                <a class="logo2" href="index.html"><img src="asset/img/cv.png" alt=""></a>
                <hr>
                <div class="research_question">
                    <p>Liste de CV</p>
                </div>
                <form method="POST" action="">
                    <input type="text" name="recherche" placeholder="Metier" id="search">
                </form>
                <div class="custom_select">
                    <select name="level" id="chose">
                        <option value="0">Votre niveau d'étude</option>
                        <option value="1">Non diplomé</option>
                        <option value="2">Niveau 5 (CAP/BEP)</option>
                        <option value="3">Niveau 4 (BAC)</option>
                        <option value="4">Niveau 3 (DEUG/BTS/DUT/DEUST)(BAC +2)</option>
                        <option value="5">Niveau 2 (Licence)(BAC +3)</option>
                        <option value="6">Niveau 2 (Master 1)(BAC +4)</option>
                        <option value="7">Niveau 1 (Master 2)(BAC +5)</option>
                        <option value="8">Niveau 1 (Doctorat)(BAC +8)</option>
                    </select>
                    <select name="experience" id="chose">
                        <option value="0">Année d'experience</option>
                        <option value="1">Moins d'un ans</option>
                        <option value="2">1 ans</option>
                        <option value="3">2 ans</option>
                        <option value="4">3 ans</option>
                        <option value="5">4 ans</option>
                        <option value="6">5 ans</option>
                        <option value="7">5 à 10 ans</option>
                        <option value="8">10 ans et plus</option>
                    </select>
                    <select name="durée" id="chose">
                        <option value="0">Type de contrat</option>
                        <option value="1">CDD</option>
                        <option value="2">CDI</option>
                        <option value="3">Formation</option>
                    </select>
                </div>
                <div class="valid">
                    <input type="submit">
                </div>
            </div>
    <div class="clear"></div>
</section>
<?php $pdo = new PDO('mysql:host=localhost;dbname=wasted', "root", "");
$niveau = isset($_POST['niveau']) ? $_POST['niveau'] : '';
$experience = isset($_POST['experience']) ? $_POST['experience'] : '';
$contrat = isset($_POST['contrat']) ? $_POST['contrat'] : '';

if(!empty($niveau) || !empty($experience) || !empty($contrat)){
    $recup = $pdo->prepare("SELECT * FROM users WHERE niveau =" . $niveau . " AND experience =" . $experience . " AND contrat =" . $contrat . " LIMIT 10");
    $recup->execute();

    $results = $recup->fetch(PDO::FETCH_ASSOC);

    foreach($results as $UnCV){
        echo 'Résultat de la recherche: '.$unCv['niveau'].', '.$unCv['experience'].', '.$unCv['contrat'].' <br />';
    }
}

?>
<?php include('inc/footer.php');
