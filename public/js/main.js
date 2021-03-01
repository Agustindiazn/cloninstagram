// Jquerry 
var url = 'http://localhost/laravelapelo/LaravelSolo/public/'

window.addEventListener("load", function(){
    // Agregar css
    $('.btn-like').css('cursor','pointer');
    $('.btn-dislike').css('cursor','pointer')

    function like(){
        // Boton de like
        $('.btn-like').unbind('click').click(function(){
            // Seleccionar a lo q le doy click
            $(this).addClass('btn-dislike').removeClass('btn-like');
            // Cambiar src
            $(this).attr('src',url + '/img/heart-red.png');
            dislike();

            $.ajax({
                url: url+'like/'+$(this).data('id'),
                type:'GET',
                success: function(response){
                    if(response.like){
                        console.log('Has dado like');
                    }else{
                        console.log('Error al dar like')
                    }
                },
            })

        });
        
    }
    
    function dislike(){
        // Boton de dislike
        $('.btn-dislike').unbind('click').click(function(){
            // Seleccionar a lo q le doy click
            $(this).addClass('btn-like').removeClass('btn-dislike');
            // Cambiar src
            $(this).attr('src',url+'/img/heart-grey.png');
            like();

            $.ajax({
                url: url+'dislike/'+$(this).data('id'),
                type:'GET',
                success: function(response){
                    if(response.like){
                        console.log('Has dado dislike');
                    }else{
                        console.log('Error al dar dislike')
                    }
                },
            })

        });
    }


    like();
    dislike();

    // Buscador

    // capturar evento del formulario Users

    // Buscador
    $('#buscador').submit(function(){
        $(this).attr('action',url + '/users/' + $('#buscador #search').val());
    })

});