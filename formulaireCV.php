<link rel="stylesheet" href="assets/css/cvform.css">
<?php
spl_autoload_register();

use \src\Services\FormCV;
use \src\Services\Validation;
$errors = array();
$array = array(
    array('name' => 'nom', 'type' => 'text', 'h3' => 'votre nom'),
    array('name' => 'prenom', 'type' => 'text', 'h3' => 'votre prenom'),
    array('name' => 'email', 'type' => 'mail', 'h3' => 'votre email'),
    array('name' => 'tel', 'type' => 'tel', 'h3' => 'votre numero de telephone'),
    array('name' => 'adress', 'type' => 'text', 'h3' => 'votre adresse'),
    array('name' => 'about', 'type' => 'text', 'h3' => 'vos motivation'),
    array('name' => 'exp_pro', 'type' => 'text', 'h3' => 'vos experiences professionnelle'),
    array('name' => 'exp_d', 'type' => 'date', 'h3' => 'date du début'),
    array('name' => 'exp_f', 'type' => 'date', 'h3' => 'date de fin'),
    array('name' => 'exp_l', 'type' => 'text', 'h3' => 'le nom de l\'établissement'),
    array('name' => 'diplome_a', 'type' => 'date', 'h3' => 'l\année de l\'obtention du diplome'),
    array('name' => 'diplome_l', 'type' => 'text', 'h3' => 'l\'établissement'),
    array('name' => 'diplome', 'type' => 'text', 'h3' => 'vos diplomes'),
    array('name' => 'comp', 'type' => 'text', 'h3' => 'vos compétances'),
    array('name' => 'lang', 'type' => 'text', 'h3' => 'le niveau et langues métrisées'),
    array('name' => 'hob', 'type' => 'text', 'h3' => 'vos hobbys')
);
if(!empty($_POST['submitted'])) {
    for ($i=0; $i < count($array); $i++) {
        $array[$i]['name'] = trim(strip_tags($_POST[$array[$i]['name']]));

        $v = new Validation();
        if ($array[$i]['type'] === 'text' OR $array[$i]['type'] === 'mail') {
            $errors = $v->validChamp($errors, $array[$i]['name'], $array[$i]['name'], 3, 120);
        } elseif ($array[$i]['type'] === 'tel') {

        }
    }
}
$formcv = new \src\services\FormCV($errors);




//echo '<pre>';
//var_dump($array);
//echo '</pre>';

?>
<form action="" method="post">

    <?php
    $html = '<div class="bloc">';
    for ($i=0; $i < count($array); $i++){

     if ($array[$i]['type'] === 'tel'){
         $html .= $formcv->h3($array[$i]['h3']);
         $html .= '<input id="tel" name="tel" type="tel" Pattern="^0[0-9]{9}"/>';
         $html .= $formcv->label($array[$i]['name']);
         $html .= $formcv->error($array[$i]['name']);
        }else{
         $html .= $formcv->h3($array[$i]['h3']);
         $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
         $html .= $formcv->label($array[$i]['name']);
         $html .= $formcv->error($array[$i]['name']);
            }
        }
        $html .= $formcv->submit();
        $html .= '</div>';
    echo $html ?>


</form>