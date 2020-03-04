<?php use App\Controller\UserController;
use App\Model\UserModel;
use App\Service\View;
$uc = new UserController();
$um = new UserModel();
$v = new View();
$c = new \App\Service\Controller();
?>
<div class="cadre">

    <div class="cv">
        <button class="btncv">
            <!--$view->path('cv');-->
            <a href="cv.php" >Créer votre cv</a>
        </button>
    </div>


    <div class="profil">
        <div class="photo">
            <a class="logo3"><img src="../public/assets/img/cv.png" alt=""></a>
            <button class="uplaod">
                <a href="#">Uplaod</a>
            </button>

        </div>


        <div class="uplaodfichier">

            <?php
            /*$dossier = 'upload/';
            $fichier = basename($_FILES['avatar']['name']);
            $taille_maxi = 100000;
            $taille = filesize($_FILES['avatar']['tmp_name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['avatar']['name'], '.');
            //Début des vérifications de sécurité...
            if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
            {
                $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
            }
            if($taille>$taille_maxi)
            {
                $erreur = 'Le fichier est trop gros...';
            }
            if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
            {
                //On formate le nom du fichier ici...
                $fichier = strtr($fichier,
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                {
                    echo 'Upload effectué avec succès !';
                }
                else //Sinon (la fonction renvoie FALSE).
                {
                    echo 'Echec de l\'upload !';
                }
            }
            else
            {
                echo $erreur;
            }*/
            ?>
        </div>
    </div>



    <hr class="hr">



    <div class="infoperso">
        <div class="info">
            <p>Information personnel</p>
        </div>

        <table class="compte">
            <thead>
            <tr class="info2">
                <th class="table3">Nom:</th>
                <th class="table3">Prenom:</th>
                <th class="table3">Age:</th>
            </tr>
            <tr class="info3">
                <th class="table4">Adresse:</th>
                <th class="table4">Adresse email:</th>
                <th class="table4">Téléphone:</th>
            </tr>
            </thead>
        </table>

        <table class="compte">
            <tbody>
            <tr class="btngeneral">
                <td>
                    <a href="index.php?page=single&id=" class="btnprimary">Voir</a>
                    <a href="index.php?page=edit&id=" class="btnsecondary">Editer</a>
                    <a href="index.php?page=delete&id=" class="btndanger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <hr class="hr">

    <div class="infoperso">
        <div class="info">
            <p>Comptétences</p>
        </div>

        <table class="compte">
            <thead>
            <tr class="info2">
                <th class="table3">Comptétences:</th>
                <th class="table3">Comptétences:</th>
                <th class="table3">Comptétences:</th>
            </tr>
            <tr class="info3">
                <th class="table4">Comptétences:</th>
                <th class="table4">Comptétences:</th>
                <th class="table4">Comptétences:</th>
            </tr>
            </thead>
        </table>

        <table class="compte">
            <tbody>
            <tr class="btngeneral">
                <td>
                    <a href="index.php?page=single&id=" class="btnprimary">Voir</a>
                    <a href="index.php?page=edit&id=" class="btnsecondary">Editer</a>
                    <a href="index.php?page=delete&id=" class="btndanger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <hr class="hr">

    <div class="infoperso">
        <div class="info">
            <p>Diplômes</p>
        </div>

        <table class="compte">
            <thead>
            <tr class="info2">
                <th class="table3">Diplômes:</th>
                <th class="table3">Diplômes:</th>
                <th class="table3">Diplômes:</th>
            </tr>
            <tr class="info3">
                <th class="table4">Diplômes:</th>
                <th class="table4">Diplômes:</th>
                <th class="table4">Diplômes:</th>
            </tr>
            </thead>
        </table>

        <table class="compte">
            <tbody>
            <tr class="btngeneral">
                <td>
                    <a href="index.php?page=single&id=" class="btnprimary">Voir</a>
                    <a href="index.php?page=edit&id=" class="btnsecondary">Editer</a>
                    <a href="index.php?page=delete&id=" class="btndanger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <hr class="hr">

    <div class="infoperso">
        <div class="info">
            <p>Experiences</p>
        </div>

        <table class="compte">
            <thead>
            <tr class="info2">
                <th class="table3">Experiences:</th>
                <th class="table3">Experiences:</th>
                <th class="table3">Experiences:</th>
            </tr>
            <tr class="info3">
                <th class="table4">Experiences:</th>
                <th class="table4">Experiences:</th>
                <th class="table4">Experiences:</th>
            </tr>
            </thead>
        </table>

        <table class="compte">
            <tbody>
            <tr class="btngeneral">
                <td>
                    <a href="index.php?page=single&id=" class="btnprimary">Voir</a>
                    <a href="index.php?page=edit&id=" class="btnsecondary">Editer</a>
                    <a href="index.php?page=delete&id=" class="btndanger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



