$( function() {
    $( "#draggable" ).draggable({
        containment : '#profil'
    });
    $( "#draggable2" ).draggable({
        containment : '#profil'
    });
    $( "#draggable3" ).draggable({
        containment : '#job'
    });
    $( "#draggable4" ).draggable({
        containment : '#job'
    });
    $( "#draggable5" ).draggable({
        containment : '#profil'
    });
    $( "#draggable6" ).draggable({
        containment : '#job'
    });
    $( "#draggable7" ).draggable({
        containment : '#bas'
    });
    $( "#draggable8" ).draggable({
        containment : '.demo'
    });
} );
$( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    $( "#sortable2" ).sortable();
    $( "#sortable2" ).disableSelection();
    $( "#sortable3" ).sortable();
    $( "#sortable3" ).disableSelection();
    $( "#sortable4" ).sortable();
    $( "#sortable4" ).disableSelection();
    $( "#sortable5" ).sortable();
    $( "#sortable5" ).disableSelection();
    $( "#sortable6" ).sortable();
    $( "#sortable6" ).disableSelection();
    $( "#sortable7" ).sortable();
    $( "#sortable7" ).disableSelection();
    $( "#sortable8" ).sortable();
    $( "#sortable8" ).disableSelection();
} );
$('#img1').on('click',function() {
    if($('#nom').val() == ''){

    }else{
        $(this).fadeOut(500, function () {
            $('input[type=text][name=nom]').remove()
            $('#title1').html('Nom <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=nom]').val();
        if (text != '') {
            $('#sortable8').append('<h2>' + text + '</h2>');
        } else {
        }
    }
})
$('#img2').on('click',function(){
    if($('#prenom').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=text][name=prenom]').remove()
            $('#title2').html('Prenom <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=prenom]').val();
        if (text != '') {
            $('#sortable8').append('<h2>' + text + '</h2>');
        } else {

        }
    }
})
$('#img3').on('click',function(){
    if($('#email').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=mail][name=email]').remove()
            $('#title3').html('E-Mail <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=mail][name=email]').val();
        if (text != '') {
            $('#sortable').append('<li class="licv">' + text + '</li>');
        } else {

        }
    }
})
$('#img4').on('click',function(){
    if($('#tel').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=tel][name=tel]').remove()
            $('#title4').html('Télephone Portable <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=tel][name=tel]').val();
        if (text != '') {
            $('#sortable').append('<li class="licv">Portable: ' + text + '</li>');
        } else {

        }
    }
})
$('#img5').on('click',function(){
    if($('#adress').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=text][name=adress]').remove()
            $('#title5').html('Adresse <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=adress]').val();
        if (text != '') {
            $('#sortable').append('<li class="licv">Adresse: ' + text + '</li>');
        } else {

        }
    }
})
$('#img6').on('click',function(){
    if($('#about').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('textarea[name=about]').remove()
            $('#title6').html('Motivation <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('textarea[name=about]').val();
        if (text != '') {
            $('#sortable2').append('<p>' + text + '</p>');
        } else {

        }
    }
})
$('#img14').on('click',function(){
    var recup = $('div#qualifications input[type=text][name="comp[]"]');
    console.log(recup)
    if($('input[name="comp[]"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name="comp[]"]').remove()
            $('#moin').remove();
            $('#ajout_comp').remove();
            $('#title14').html('Competances <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="comp[]"]').each(function(){
            if (text != '') {
                $('#sortable5').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#ajout_comp').on('click',function(){
    var total = $('input[name="comp[]"]').length;

    $('#moin').remove();
    $('#img14').after('<img id="moin" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_comp').before('<input class="cv" id="nom'+total+'" name="comp[]" type="text" value=""/><span class="error"></span>') == ''){

    } else {
        $('#moin').on('click', function () {
            if ($('input[name="comp[]"]').length == 1) {
                $('#moin').remove();
            } else {
                $('input[name="comp[]"]:last').remove();
            }
        })
    }
})
$('#img15').on('click',function(){
    var recup = $('div#qualifications input[type=text][name="lang[]"]');
    if($('input[name="lang[]"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name="lang[]"]').remove()
            $('#moin2').remove();
            $('#ajout_lang').remove();
            $('#title15').html('Langues <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="lang[]"]').each(function(){
            if (text != '') {
                $('#sortable6').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#ajout_lang').on('click',function(){
    var total = $('input[name="lang[]"]').length;

    $('#moin2').remove();
    $('#img15').after('<img id="moin2" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_lang').before('<input class="cv" id="lang'+total+'" name="lang[]" type="text" value=""/><span class="error"></span>') == ''){

    } else {
        $('#moin2').on('click', function () {
            if ($('input[name="lang[]"]').length == 1) {
                $('#moin2').remove();
            } else {
                $('input[name="lang[]"]:last').remove();
            }
        })
    }
})
$('#img16').on('click',function(){
    var recup = $('div#qualifications input[type=text][name="hob[]"]');
    if($('input[name="hob[]"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name="hob[]"]').remove()
            $('#moin3').remove();
            $('#ajout_hob').remove();
            $('#title16').html('<img Hobbies class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="hob[]"]').each(function(){
            if (text != '') {
                $('#sortable7').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#ajout_hob').on('click',function(){
    var total = $('input[name="hob[]"]').length;

    $('#moin3').remove();
    $('#img16').after('<img id="moin3" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_hob').before('<input class="cv" id="hob'+total+'" name="hob[]" type="text" value=""/><span class="error"></span>') == ''){

    } else {
        $('#moin3').on('click', function () {
            if ($('input[name="hob[]"]').length == 1) {
                $('#moin3').remove();
            } else {
                $('input[name="hob[]"]:last').remove();
            }
        })
    }
})
$('#img7').on('click',function(){
    var recup = $('div.experience input[type=text][name=exp_pro]');
    if($('input[name="exp_pro"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=exp_pro]').remove()
            $('#sup_exp').remove();
            $('#ajout_exp').remove();
            $('#title7').html('Experiences <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=exp_pro]').each(function(){
            if (text != '') {
                $('#sortable3').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#img8').on('click',function(){
    var recup = $('div.experience input[type=date][name=exp_d]');
    if($('input[name="exp_d"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=exp_d]').remove()
            $('#moin8').remove();
            $('#ajout_exp').remove();
            $('#title8').html('Debut <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=exp_d]').each(function(){
            if (text != '') {
                $('#sortable3').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#img9').on('click',function(){
    var recup = $('div.experience input[type=date][name=exp_f]');
    if($('input[name="exp_f"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=exp_f]').remove()
            $('#moin9').remove();
            $('#ajout_exp').remove();
            $('#title9').html('Fin <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=exp_f]').each(function(){
            if (text != '') {
                $('#sortable3').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#img10').on('click',function(){
    var recup = $('div.experience input[type=text][name=exp_l]');
    if($('input[name="exp_l"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=exp_l]').remove()
            $('#moin10').remove();
            $('#ajout_exp').remove();
            $('#title10').html('Etablissement <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=exp_l]').each(function(){
            if (text != '') {
                $('#sortable3').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#ajout_exp').on('click',function(){
    var total = $('input[name=exp_pro]').length;

    $('#sup_exp').remove();
    $('#ajout_exp').after('<did id="sup_exp"><label id="moin7" for="experience_aj"><img class="sup" src="assets/img/icons8-effacer-26.png"/></label></did>');
    if($('#ajout_exp').before('<div id="experience[]" class="experience" '+
        '<h3 id="exp_h3_'+total+'">Veuillez rentrer vos experiences professionnelle</h3>' +
        '<input class="cv" id="exp'+total+'" name="exp_pro" type="text" value=""/>' +
        '<span class="error"></span>' +
        '<h3 id="exp_d_h3_'+total+'">Veuillez rentrer date du debut</h3>' +
        '<input class="cv" id="exp_d_'+total+'" name="exp_d" type="date" value=""/>' +
        '<span class="error"></span>' +
        '<h3 id="exp_f_h3_'+total+'">Veuillez rentrer date de fin</h3>' +
        '<input class="cv" id="exp_f_'+total+'" name="exp_f" type="date" value=""/>' +
        '<span class="error"></span>' +
        '<h3 id="exp_l_h3_'+total+'">Veuillez rentrer l\'etablissement</h3>' +
        '<input class="cv" id="exp_l_'+total+'" name="exp_l" type="text" value=""/>' +
        '<span class="error"></span>') == ''){
    } else {
        $('#moin7').on('click', function () {
            if ($('input[name=exp_pro]').length == 1) {
                $('#sup_exp').remove();
            } else {
                $('.experience:last').remove();

            }
        })
    }
})
$('#img11').on('click',function(){
    var recup = $('div.exam input[type=text][name=diplome]');
    if($('input[name="diplome"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=diplome]').remove()
            $('#moin11').remove();
            $('#ajout_diplome').remove();
            $('#title11').html('Diplomes <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=diplome]').each(function(){
            if (text != '') {
                $('#sortable4').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#img12').on('click',function(){
    var recup = $('div.exam input[type=date][name=diplome_a]');
    if($('input[name="diplome_a"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=diplome_a]').remove()
            $('#moin12').remove();
            $('#ajout_diplome').remove();
            $('#title12').html('Année <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=diplome_a]').each(function(){
            if (text != '') {
                $('#sortable4').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#img13').on('click',function(){
    var recup = $('div.exam input[type=text][name=diplome_l]');
    if($('input[name="diplome_l"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=diplome_l]').remove()
            $('#moin13').remove();
            $('#ajout_diplome').remove();
            $('#title13').html('Lieu <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=diplome_l]').each(function(){
            if (text != '') {
                $('#sortable4').append('<li class="licv">' + $(this).val() + '</li>');
            } else {

            }
        });
    }
})
$('#ajout_diplome').on('click',function(){
    var total = $('input[name=diplome]').length;

    $('#moin11').remove();
    $('#ajout_diplome').after('<did id="sup_diplome"><label id="moin11" ><img class="sup" src="assets/img/icons8-effacer-26.png"/></label></did>');
    if($('#ajout_diplome').before('<div id="exam[]" class="exam" '+
        '<h3 id="diplome_h3_'+total+'">Veuillez rentrer vos Diplomes</h3>' +
        '<input class="cv" id="diplome'+total+'" name="diplome" type="text" value=""/>' +
        '<span class="error"></span>' +
        '<h3 id="diplome_a_h3_'+total+'">Veuillez rentrer l\'année de l\'obtention</h3>' +
        '<input class="cv" id="exp_a_'+total+'" name="exp_a" type="date" value=""/>' +
        '<span class="error"></span>' +
        '<h3 id="diplome_l_h3_'+total+'">Veuillez rentrer l\'etablissement</h3>' +
        '<input class="cv" id="diplome_l_'+total+'" name="diplome_l" type="text" value=""/>' +
        '<span class="error"></span>') == ''){

    } else {
        $('#moin11').on('click', function () {
            if ($('input[name=diplome]').length == 1) {
                $('#moin11').remove();
            } else {
                $('.exam:last').remove();

            }
        })
    }
})
function MM_jumpMenu(targ,selObj,restore){
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    if (restore) selObj.selectedIndex=0;
}
$(document).ready(function() {
    $('#profil').click(function() {

        //my colors array
        var colors = new Array();

        //get all elements
        $('*').each(function() {
            if($(this).css('background-color') && $(this).css('background-color') != 'transparent') { colors.push($(this).css('background-color')); }
            if($(this).css('color')) { colors.push($(this).css('color')); }
            if($(this).css('border-color')) { colors.push($(this).css('border-color')); }
        });

        //remove dupes and sort
        colors.sort();

        //create a color block for all of them
        jQuery.each(colors,function(it,value) {

            if(!$('div[rel=\'' + value + '\']').length)
            {

                //inject the wrapper
                var wrapper_id = 'w' + it;
                $('<div class="dwrapper" id="' + wrapper_id + '" rel="' + value + '"> </div>').appendTo('#colors-wrapper');

                //inject the color div
                $('<div class="dcolor" style="background-color:' + value + '"> </div>').appendTo('#' + wrapper_id);

                //inject text div
                $('<div class="text">' + value + '</div>').appendTo('#' + wrapper_id);
            }

        });

    });
});
function changeColor2(obj)
{
    document.getElementById("bas").style.backgroundColor = "#"+obj.value;
}

function changeColor3(obj)
{
    document.getElementById("job").style.backgroundColor = "#"+obj.value;
}

function changeColor(obj)
{
    document.getElementById("profil").style.backgroundColor = "#"+obj.value;
}
function changeColor4(obj)
{
    document.getElementById("draggable").style.backgroundColor = "#"+obj.value;
}

function changeColor5(obj)
{
    document.getElementById("draggable2").style.backgroundColor = "#"+obj.value;
}

function changeColor6(obj)
{
    document.getElementById("draggable3").style.backgroundColor = "#"+obj.value;
}
function changeColor7(obj)
{
    document.getElementById("draggable4").style.backgroundColor = "#"+obj.value;
}

function changeColor8(obj)
{
    document.getElementById("draggable5").style.backgroundColor = "#"+obj.value;
}
function changeColor9(obj)
{
    document.getElementById("draggable6").style.backgroundColor = "#"+obj.value;
}

function changeColor10(obj)
{
    document.getElementById("draggable7").style.backgroundColor = "#"+obj.value;
}
function changeColor11(obj)
{
    document.getElementById("draggable8").style.backgroundColor = "#"+obj.value;
}
function changeColor12(obj)
{
    document.getElementById("h20").style.color = "#"+obj.value;
}
function changeColor13(obj)
{
    document.getElementById("h21").style.color = "#"+obj.value;
}
function changeColor14(obj)
{
    document.getElementById("h22").style.color = "#"+obj.value;
}
function changeColor15(obj)
{
    document.getElementById("h23").style.color = "#"+obj.value;
}
function changeColor16(obj)
{
    document.getElementById("h24").style.color = "#"+obj.value;
}
function changeColor17(obj)
{
    document.getElementById("h25").style.color = "#"+obj.value;
}function changeColor18(obj)
{
    document.getElementById("h26").style.color = "#"+obj.value;
}
function changeColor19(obj)
{
    document.getElementById("sortable").style.color = "#"+obj.value;
}
function changeColor20(obj)
{
    document.getElementById("sortable2").style.color = "#"+obj.value;
}
function changeColor21(obj)
{
    document.getElementById("sortable3").style.color = "#"+obj.value;
}
function changeColor22(obj)
{
    document.getElementById("sortable4").style.color = "#"+obj.value;
}
function changeColor23(obj)
{
    document.getElementById("sortable5").style.color = "#"+obj.value;
}
function changeColor24(obj)
{
    document.getElementById("sortable6").style.color = "#"+obj.value;
}
function changeColor25(obj)
{
    document.getElementById("sortable7").style.color = "#"+obj.value;
}
function changeColor26(obj)
{
    document.getElementById("sortable8").style.color = "#"+obj.value;
}
