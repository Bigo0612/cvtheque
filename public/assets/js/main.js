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
            $('#title1').html('Nom <img class="valid" src="assets/img/icons8-coche-26.png" />')
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
            $('#title2').html('Prenom <img class="valid" src="assets/img/icons8-coche-26.png" />')
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
            $('#title3').html('E-Mail <img class="valid" src="assets/img/icons8-coche-26.png" />')
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
            $('#title4').html('Télephone Portable <img class="valid" src="assets/img/icons8-coche-26.png" />')
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
            $('#title5').html('Adresse <img class="valid" src="assets/img/icons8-coche-26.png" />')
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
            $('#title6').html('Motivation <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('textarea[name=about]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
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
            $('#title14').html('Competances <img class="valid" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="comp[]"]').each(function(){
            if (text != '') {
                $('#bravo').append('<p>' + $(this).val() + '</p>');
            } else {

            }
        });
    }
})
$('#ajout_comp').on('click',function(){
    var total = $('input[name="comp[]"]').length;

    $('#moin').remove();
    $('#img14').after('<img id="moin" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_comp').before('<input id="nom'+total+'" name="comp[]" type="text" value=""/><span class="error"></span>') == ''){

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
            $('#title15').html('Competances <img id="moin2" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="lang[]"]').each(function(){
            if (text != '') {
                $('#bravo').append('<p>' + $(this).val() + '</p>');
            } else {

            }
        });
    }
})
$('#ajout_lang').on('click',function(){
    var total = $('input[name="lang[]"]').length;

    $('#moin2').remove();
    $('#img15').after('<img id="moin2" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_lang').before('<input id="lang'+total+'" name="lang[]" type="text" value=""/><span class="error"></span>') == ''){

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
            $('#title16').html('Competances <img id="moin3" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="hob[]"]').each(function(){
            if (text != '') {
                $('#bravo').append('<p>' + $(this).val() + '</p>');
            } else {

            }
        });
    }
})
$('#ajout_hob').on('click',function(){
    var total = $('input[name="hob[]"]').length;

    $('#moin3').remove();
    $('#img16').after('<img id="moin3" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_hob').before('<input id="hob'+total+'" name="hob[]" type="text" value=""/><span class="error"></span>') == ''){

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
    var recup = $('div#qualifications input[type=text][name=exp_pro]');
    if($('input[name="exp_pro"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name=exp_pro]').remove()
            $('#moin7').remove();
            $('#title7').html('Competances <img id="moin7" src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name=exp_pro]').each(function(){
            if (text != '') {
                $('#bravo').append('<p>' + $(this).val() + '</p>');
            } else {

            }
        });
    }
})
$('#ajout_exp').on('click',function(){
    var total = $('input[name=exp_pro]').length;

    $('#moin7').remove();
    $('#img7').after('<img id="moin7" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_exp').before('<h3 id="exp_h3_'+total+'">Veuillez rentrer vos experiences professionnelle</h3><input id="exp'+total+'" name="exp_pro" type="text" value=""/><span class="error"></span>') == ''){

    } else {
        $('#moin7').on('click', function () {
            if ($('input[name=exp_pro]').length == 1) {
                $('#moin7').remove();
            } else {
                $('input[name=exp_pro]:last').remove();
            }
        })
    }
})
