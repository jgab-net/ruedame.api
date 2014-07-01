$(function(){

    $.ajaxSetup({
        error:function(response){
            if(response.responseJSON && response.responseJSON.messages){

                var messages = response.responseJSON.messages;
                var title = response.responseJSON.code;

                var time=0;

                for(var message in messages){
                    setTimeout(function(message){
                        return function(){
                            new PNotify({
                                title: title,
                                text: messages[message].join(', '),
                                type: 'error',
                                delay: 4000
                            });
                        };

                    }(message),time+=300);
                }
            }
        }
    });

    $('#registration').on('click', function(){

        $.ajax({
            type:'POST',
            url:$('#registration').data('url'),
            data:{
                name:$('#name').val(),
                email:$('#mail').val(),
                phone:$('#phone').val()
            },
            success:function(data){
                $('#name').val('');
                $('#mail').val('');
                $('#phone').val('');

                setTimeout(function(){
                    document.getElementById("modal-form").innerHTML = "<div class='row'> <p id='modal-pink-text'> <b>GRACIAS</b> </p> </br> <p id='modal-gray-text'> <b>BIENVENIDO OFICIALMENTE</b> </p> <img style='margin-left:25%' src='./images/preregistroexito.png'/></br><p id='modal-gray-text-footer'> ¡YA ERES MIEMBRO! </p>";
                    console.log("Prueba");
                    $("#modal-form").css("opacity", "1");
                }, 250);
            }
        })

    });



});
