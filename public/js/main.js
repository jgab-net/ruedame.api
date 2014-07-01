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

                new PNotify({
                    text: data.code,
                    delay: 4000
                });
                $('#modal-registro').modal('hide');
            }
        })

    });



});
