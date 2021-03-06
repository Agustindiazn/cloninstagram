// Jquery 
var url = 'http://localhost/laravelapelo/LaravelSolo/public/'



window.addEventListener("load", function(){
    // Agregar css
    $('.btn-like').css('cursor','pointer');
    $('.btn-dislike').css('cursor','pointer')

    function like(){
        // Boton de like
        $('.btn-like').unbind('click').click(function(){

            // Actualizar like
            $('.number_likes').html(
                parseInt($('.number_likes').html()) + 1
            );

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
            // Actualizar like
            $('.number_likes').html(
                parseInt($('.number_likes').html()) - 1
            );

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


    // Chat
    var receiver_id = '';
    var my_id='';
    $(".my_id").val(function() {
        my_id = ($(this).attr("id"));
    });



    $(document).ready(function(){
        // ajax csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('3a7bac4ed8da50205c34', {
            cluster: 'mt1',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');

        channel.bind('my-event', function(data) {
            // alert(JSON.stringify(data));

            if(my_id == data.from){
                // alert('sender');
                $('#'+data.to).click()
            }else if(my_id == data.to){
                if(receiver_id==data.from){
                    $('#' + data.from).click();
                }else{
                    var pending=parseInt($('#'+data.from).find('.pending').html());

                    if(pending){// SI no tiene pendientes pasa
                        $('#' + data.from).find('.pending').html(pending + 1);
                    }else{ // Crea la notificacion
                        $('#'+data.from).append('<span class="pending">1</span>');
                    }
                }

            }
            });

        // Click en el user
        $('.user-chat').click(function(){
            $('.user-chat').removeClass('activate');
            $(this).addClass('activate');
            $(this).find('.pending').remove();
            // Id del user pickeado
            receiver_id = $(this).attr('id');
            // peticion ajax
            $.ajax({
                type: "get",
                url: "chats/" + receiver_id,
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });

        // Enviar mensage
        $(document).on('keyup', '.input-text input', function(e){
            var message = $(this).val();

            // verificar si manda el mensaje y al use correcto
            if(e.keyCode == 13 && message != '' && receiver_id != '' ){
                $(this).val('');//Dejar el input empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: 'post',
                    url: 'chats',
                    data: datastr,
                    cache: false,
                    success: function(data){},
                    error: function (jqXHR, status, err) {},
                    complete: function(){
                        scrollToBottomFunc();
                    }
                });
            };
        });


    });
    // Meotodo para ver los ultimos mensajes
    function scrollToBottomFunc(){
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    };
});
