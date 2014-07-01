$(function(){

    $('#carousel').on('slid.bs.carousel', function(){

        var publicPath = $('body').data('public');

        var left_color = $("#left-line").css("border-color");
        var right_color = $("#right-line").css("border-color");
        if(left_color == "rgb(220, 0, 226)"){
            $("#left-line").css("border-color", "rgb(0, 174, 239)");
            $("#left-circle").css("border-color", "rgb(0, 174, 239)");
            $("#left-circle-back").css("background", "rgb(0, 174, 239)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(236, 0, 140)");
            $("#right-circle").css("border-color", "rgb(236, 0, 140)");
            $("#right-circle-back").css("background", "rgb(236, 0, 140)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g2.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p2.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
        else if(left_color == "rgb(0, 174, 239)"){
            $("#left-line").css("border-color", "rgb(0, 170, 173)");
            $("#left-circle").css("border-color", "rgb(0, 170, 173)");
            $("#left-circle-back").css("background", "rgb(0, 170, 173)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(128, 29, 128)");
            $("#right-circle").css("border-color", "rgb(128, 29, 128)");
            $("#right-circle-back").css("background", "rgb(128, 29, 128)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g3.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p3.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
        else if(left_color == "rgb(0, 170, 173)"){
            $("#left-line").css("border-color", "rgb(236, 0, 140)");
            $("#left-circle").css("border-color", "rgb(236, 0, 140)");
            $("#left-circle-back").css("background", "rgb(236, 0, 140)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(0, 174, 239)");
            $("#right-circle").css("border-color", "rgb(0, 174, 239)");
            $("#right-circle-back").css("background", "rgb(0, 174, 239)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g4.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p4.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
        else if(left_color == "rgb(236, 0, 140)"){
            $("#left-line").css("border-color", "rgb(98, 108, 178)");
            $("#left-circle").css("border-color", "rgb(98, 108, 178)");
            $("#left-circle-back").css("background", "rgb(98, 108, 178)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(0, 170, 173)");
            $("#right-circle").css("border-color", "rgb(0, 170, 173)");
            $("#right-circle-back").css("background", "rgb(0, 170, 173)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g5.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p5.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
        else if(left_color == "rgb(98, 108, 178)"){
            $("#left-line").css("border-color", "rgb(211, 18, 128)");
            $("#left-circle").css("border-color", "rgb(211, 18, 128)");
            $("#left-circle-back").css("background", "rgb(211, 18, 128)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(236, 0, 145)");
            $("#right-circle").css("border-color", "rgb(236, 0, 145)");
            $("#right-circle-back").css("background", "rgb(236, 0, 145)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g6.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p6.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
        else if(left_color == "rgb(211, 18, 128)"){
            $("#left-line").css("border-color", "rgb(220, 0, 226)");
            $("#left-circle").css("border-color", "rgb(220, 0, 226)");
            $("#left-circle-back").css("background", "rgb(220, 0, 226)");
            $("#img-left").css("opacity", "0");
            $("#img-right").css("opacity", "0");
            $("#right-line").css("border-color", "rgb(255, 68, 0)");
            $("#right-circle").css("border-color", "rgb(255, 68, 0)");
            $("#right-circle-back").css("background", "rgb(255, 68, 0)");
            setTimeout(function(){
                $("#img-left").attr("src",publicPath+"/images/foto_g6.png");
                $("#img-right").attr("src",publicPath+"/images/foto_p6.png");
                $("#img-left").css("opacity", "1");
                $("#img-right").css("opacity", "1");
            }, 250);
        }
    });

    $('.carousel').carousel({
        interval: 0
    });

    $("#button-home").hover(
        function(){
            $("#button-home").popover({ content: "Home", placement: "bottom" });
            $("#button-home").popover('show');
        },function(){
            $('#button-home').popover('hide');
        }
    );
    $("#button-2").hover(
        function(){
            $("#button-2").popover({ content: "Proyecto", placement: "bottom" });
            $("#button-2").popover('show');
        },function(){
            $('#button-2').popover('hide');
        }
    );
    $("#button-3").hover(
        function(){
            $("#button-3").popover({ content: "¿Cómo me afilio?", placement: "bottom" });
            $("#button-3").popover('show');
        },function(){
            $('#button-3').popover('hide');
        }
    );
    $("#button-4").hover(
        function(){
            $("#button-4").popover({ content: "¿Qué tan lejos puedo ir?", placement: "bottom" });
            $("#button-4").popover('show');
        },function(){
            $('#button-4').popover('hide');
        }
    );
    $("#button-5").hover(
        function(){
            $("#button-5").popover({ content: "¿Cuánto cuesta el servicio?", placement: "bottom" });
            $("#button-5").popover('show');
        },function(){
            $('#button-5').popover('hide');
        }
    );
    $("#button-6").hover(
        function(){
            $("#button-6").popover({ content: "Preguntas Frecuentes", placement: "bottom" });
            $("#button-6").popover('show');
        },function(){
            $('#button-6').popover('hide');
        }
    );
    $("#button-7").hover(
        function(){
            $("#button-7").popover({ content: "Contacto", placement: "bottom" });
            $("#button-7").popover('show');
        },function(){
            $('#button-7').popover('hide');
        }
    );
    $("#button-8").hover(
        function(){
            $("#button-8").popover({ content: "Login", placement: "bottom" });
            $("#button-8").popover('show');
        },function(){
            $('#button-8').popover('hide');
        }
    );
    $(function(){
        $('body').on('click','.submit',function(){
            var empty=false;
            $.each($('.get-value'),function(){
                if($(this).val()==''){
                    empty=true;
                }
            });
            if(empty){
                alert('Llene todos los campos');
            }else{
                mail = document.getElementById('mail').value;
                filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (filter.test(mail)){



                    // Correo valido
                    $("#modal-form").css("opacity", "0");
                    // Enviar formulario!
                    // Si todo sale bien hacer:
                    setTimeout(function(){
                        document.getElementById("modal-form").innerHTML = "<div class='row'> <p id='modal-pink-text'> <b>GRACIAS</b> </p> </br> <p id='modal-gray-text'> <b>BIENVENIDO OFICIALMENTE</b> </p> <img style='margin-left:25%' src='./images/preregistroexito.png'/></br><p id='modal-gray-text-footer'> ¡YA ERES MIEMBRO! </p>";
                        console.log("Prueba");
                        $("#modal-form").css("opacity", "1");
                    }, 250);
                }
                else{
                    alert('Formato de correo invalido');
                }
            }
        });
    });
});
