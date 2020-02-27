<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/cvform.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
spl_autoload_register();

use \src\Services\FormCV;
use \src\Services\Validation;
$errors = array();
$array = array(
    array('name' => 'nom', 'type' => 'text', 'h3' => 'votre nom', 'img' => 'img1', 'id_title' => 'title1'),
    array('name' => 'prenom', 'type' => 'text', 'h3' => 'votre prenom', 'img' => 'img2', 'id_title' => 'title2'),
    array('name' => 'email', 'type' => 'mail', 'h3' => 'votre email', 'img' => 'img3', 'id_title' => 'title3'),
    array('name' => 'tel', 'type' => 'tel', 'h3' => 'votre numero de telephone portable', 'img' => 'img4', 'id_title' => 'title4'),
    array('name' => 'adress', 'type' => 'text', 'h3' => 'votre adresse', 'img' => 'img5', 'id_title' => 'title5'),
    array('name' => 'about', 'type' => 'about', 'h3' => 'vos motivation', 'img' => 'img6', 'id_title' => 'title6'),
    array('name' => 'exp_pro', 'type' => 'text', 'h3' => 'vos experiences professionnelle', 'img' => 'img7', 'id_title' => 'title7'),
    array('name' => 'exp_d', 'type' => 'date', 'h3' => 'date du début', 'img' => 'img8', 'id_title' => 'title8'),
    array('name' => 'exp_f', 'type' => 'date', 'h3' => 'date de fin', 'img' => 'img9', 'id_title' => 'title9'),
    array('name' => 'exp_l', 'type' => 'text', 'h3' => 'le nom de l\'établissement', 'img' => 'img10', 'id_title' => 'title10'),
    array('name' => 'diplome', 'type' => 'text', 'h3' => 'vos diplomes', 'img' => 'img13', 'id_title' => 'title11'),
    array('name' => 'diplome_a', 'type' => 'date', 'h3' => 'l\année de l\'obtention du diplome', 'img' => 'img11', 'id_title' => 'title12'),
    array('name' => 'diplome_l', 'type' => 'text', 'h3' => 'l\'établissement', 'img' => 'img12', 'id_title' => 'title13'),
    array('name' => 'comp[]', 'type' => 'text', 'h3' => 'vos compétances', 'img' => 'img14', 'id_title' => 'title14'),
    array('name' => 'lang', 'type' => 'text', 'h3' => 'le niveau et langues métrisées', 'img' => 'img15', 'id_title' => 'title15'),
    array('name' => 'hob', 'type' => 'text', 'h3' => 'vos hobbys', 'img' => 'img16', 'id_title' => 'title16')
);
if(!empty($_POST['submitted'])) {
    for ($i=0; $i < count($array); $i++) {
        $array[$i]['value'] = trim(strip_tags($_POST[$array[$i]['name']]));

        $v = new Validation();
        if ($array[$i]['type'] === 'text' OR $array[$i]['type'] === 'mail') {
            $errors = $v->validChamp($errors, $array[$i]['value'], $array[$i]['name'], 3, 120);
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
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= '<input id="tel" name="tel" type="tel" Pattern="^0[0-9]{9}"/>';
         $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
         $html .= $formcv->error($array[$i]['name']);
        } elseif ($array[$i]['type'] === "about") {
            $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
            $html .= $formcv->textarea($array[$i]['name']);
            $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
            $html .= $formcv->error($array[$i]['name']);

            } elseif ($array[$i]['name'] === 'exp_pro'){
                $html .= '<div id="experience">';
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_pro','text');
                $html .= $formcv->label('exp_pro','img7');
                $html .= $formcv->error('exp_pro');
                } elseif ($array[$i]['name'] === 'exp_d'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_d','date');
                $html .= $formcv->label('exp_d','img8');
                $html .= $formcv->error('exp_f');
                }elseif ($array[$i]['name'] === 'exp_f'){
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input('exp_f','date');
                $html .= $formcv->label('exp_f','img9');
                $html .= $formcv->error('exp_f');
                } elseif ($array[$i]['name'] === 'exp_l') {
         $html .= $formcv->h3($array[$i]['h3'], $array[$i]['id_title']);
         $html .= $formcv->input('exp_l', 'text');
         $html .= $formcv->label('exp_l', 'img10');
         $html .= $formcv->error('exp_l');
         $html .= '</div>';
         $html .= '<div id="ajout_exp">';
         $html .= $formcv->label('experience_aj','image1');
         $html .= '</div>';


     }elseif ($array[$i]['name'] === 'diplome'){
         $html .= '<div id="exam">';
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input('diplome','text');
         $html .= $formcv->label('diplome','img11');
         $html .= $formcv->error('diplome');
     } elseif ($array[$i]['name'] === 'diplome_a'){
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input('diplome_a','date');
         $html .= $formcv->label('diplome_a','img12');
         $html .= $formcv->error('diplome_a');
     }elseif ($array[$i]['name'] === 'diplome_l'){
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input('diplome_l','text');
         $html .= $formcv->label('diplome_l','img13');
         $html .= $formcv->error('diplome_l');
         $html .= '</div>';
         $html .= '<div id="ajout_diplome">';
         $html .= $formcv->label('diplome_aj','image2');
         $html .= '</div>';
            } elseif ($array[$i]['name'] === 'comp[]'){
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
         $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
         $html .= $formcv->error($array[$i]['name']);
         $html .= '<div id="ajout_comp">';
         $html .= $formcv->label('comp_aj','image2');
         $html .= '</div>';
            } elseif ($array[$i]['name'] === 'lang'){
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
         $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
         $html .= $formcv->error($array[$i]['name']);
         $html .= '<div id="ajout_lang">';
         $html .= $formcv->label('lang_aj','image2');
         $html .= '</div>';
            } elseif ($array[$i]['name'] === 'hob'){
         $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
         $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
         $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
         $html .= $formcv->error($array[$i]['name']);
         $html .= '<div id="ajout_hob">';
         $html .= $formcv->label('hob_aj','image2');
         $html .= '</div>';
     }else{
                $html .= $formcv->h3($array[$i]['h3'],$array[$i]['id_title']);
                $html .= $formcv->input($array[$i]['name'],$array[$i]['type']);
                $html .= $formcv->label($array[$i]['name'],$array[$i]['img']);
                $html .= $formcv->error($array[$i]['name']);
            }
        }
        $html .= $formcv->submit();
        $html .= '</div>';
    echo $html ?>


</form>
<div class="demo">
<div id="draggable" class="ui-widget-content">
    <p id="bravo"></p>
</div>
</div>

<style>
    .demo { width: 90%; padding-left: 5%; height: 400px; padding: 10px; z-index: 100; border: solid}
    #draggable { width: 150px; height: 150px; padding: 0.5em;}
    #experience { width: 90%; height: 380px; border: solid; padding:5px;margin-top: 5px; }
    #exam { width: 90%; height: 290px; border: solid; padding:5px;margin-top: 5px; margin-top: 0;}
    #ajout_exp,#ajout_diplome,#ajout_comp,#ajout_hob,#ajout_lang {width: 90%;margin-bottom: 30px;padding:5px; padding: 10px 5px; border: solid;text-align: center}
</style>

<script>
    $( function() {
        $( "#draggable" ).draggable({
            containment : '.demo'
        });
    } );

    $('#img1').on('click',function() {
        if($('#nom').val() == ''){

        }else{
        $(this).fadeOut(500, function () {
            $('input[type=text][name=nom]').remove()
            $('#title1').html('Nom <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=nom]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
        } else {
        }
    }
    })
    $('#img2').on('click',function(){
        if($('#prenom').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('input[type=text][name=prenom]').remove()
                $('#title2').html('Prenom <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('input[type=text][name=prenom]').val();
            if (text != '') {
                $('#bravo').append('<p>' + text + '</p>');
            } else {

            }
        }
    })
    $('#img3').on('click',function(){
        if($('#email').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('input[type=mail][name=email]').remove()
                $('#title3').html('E-Mail <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('input[type=mail][name=email]').val();
            if (text != '') {
                $('#bravo').append('<p>' + text + '</p>');
            } else {

            }
        }
    })
    $('#img4').on('click',function(){
        if($('#tel').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('input[type=tel][name=tel]').remove()
                $('#title4').html('Télephone Portable <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('input[type=tel][name=tel]').val();
            if (text != '') {
                $('#bravo').append('<p>Portable: ' + text + '</p>');
            } else {

            }
        }
    })
    $('#img5').on('click',function(){
        if($('#adress').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('input[type=text][name=adress]').remove()
                $('#title5').html('Adresse <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('input[type=text][name=adress]').val();
            if (text != '') {
                $('#bravo').append('<p>Adresse: ' + text + '</p>');
            } else {

            }
        }
    })
    $('#img6').on('click',function(){
        if($('#about').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('textarea[name=about]').remove()
                $('#title6').html('Motivation <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('textarea[name=about]').val();
            if (text != '') {
                $('#bravo').append('<p>' + text + '</p>');
            } else {

            }
        }
    })
    $('#img14').on('click',function(){
        if($('#comp').val() == ''){

        }else {
            $(this).fadeOut(500, function () {
                $('input[type=text][name=comp]').remove()
                $('#title14').html('Competances <img src="assets/img/icons8-coche-26.png" />')
            })
            var text = $('input[type=text][name=comp]').val();
            if (text != '') {
                $('#bravo').append('<p>' + text + '</p>');
            } else {

            }
        }
    })
    $('#ajout_comp').on('click',function(){
        var total = $('input[name="comp[]"]').length;
            $('#ajout_comp').before('<input id="nom'+total+'" name="comp[]" type="text"/><label name="image6"><img id="plus'+total+'" src="assets/img/plus.png"/><img id="moin'+total+'" src="assets/img/icons8-effacer-26.png"/> </label>')

    })
</script>