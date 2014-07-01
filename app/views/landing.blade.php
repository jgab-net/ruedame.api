<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#f0d911">
    <title>Ruédame</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pnotify.custom.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body data-public="{{ URL::to('/') }}">
<div class="row" id="top-bar">
<div class="col-xs-4 col-xs-offset-0">
    <img class="img-responsive logo" src="{{ asset('images/logo.png') }}"/>
</div>
<div class="col-xs-offset-3 col-xs-5" id="links" >
    <div class="row scale-80 ">
        <div class="div-relative">
            <a href="#">
                <div id="button-home" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-1-img').src='{{ asset('images/home.png') }}'" onmouseout="document.getElementById('button-1-img').src='{{ asset('images/home.png') }}">
                    <img id="button-1-img" src="{{ asset('images/home.png') }}"/>
                </div>
            </a>
        </div>
        <div class="div-relative">
            <a href="#">
                <div id="button-2" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-2-img').src='{{ asset('images/icon2_h.png') }}" onmouseout="document.getElementById('button-2-img').src='{{ asset('images/icon2.png') }}">
                    <img id="button-2-img" src="{{ asset('images/icon2.png') }}"/>
                </div>
            </a>
        </div>
        <div class="div-relative">
            <a href="#">
                <div id="button-3" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-3-img').src='{{ asset('images/icon3_h.png') }}" onmouseout="document.getElementById('button-3-img').src='{{ asset('images/icon3.png') }}">
                    <img id="button-3-img" src="{{ asset('images/icon3.png') }}"/>
                </div>
            </a>
        </div>
        <div class="div-relative">
            <a href="#">
                <div id="button-4" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-4-img').src='{{ asset('images/icon4_h.png') }}" onmouseout="document.getElementById('button-4-img').src='{{ asset('images/icon4.png') }}">
                    <img id="button-4-img" src="{{ asset('images/icon4.png') }}"/>
                </div>
            </a>
        </div>
        <div class="div-relative">
            <div id="button-5" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-5-img').src='{{ asset('images/icon5_h.png') }}" onmouseout="document.getElementById('button-5-img').src='{{ asset('images/icon5.png') }}">
                <img id="button-5-img" src="{{ asset('images/icon5.png') }}"/>
            </div>
        </div>
        <div class="div-relative">
            <a href="#">
                <div id="button-6" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-6-img').src='{{ asset('images/icon6_h.png') }}" onmouseout="document.getElementById('button-6-img').src='{{ asset('images/icon6.png') }}">
                    <img id="button-6-img" src="{{ asset('images/icon6.png') }}"/>
                </div>
            </a>
        </div>
        <div class="div-relative">
            <a href="#">
                <div id="button-7" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-7-img').src='{{ asset('images/icon7_h.png') }}" onmouseout="document.getElementById('button-7-img').src='{{ asset('images/icon7.png') }}">
                    <img id="button-7-img" src="{{ asset('images/icon7.png') }}"/>
                </div>
            </a>
            <div class="div-relative">
                <a href="#">
                    <div id="button-8" class="col-xs-1 top-bar-button" onmouseover="document.getElementById('button-8-img').src='{{ asset('images/icon8_h.png') }}" onmouseout="document.getElementById('button-8-img').src='{{ asset('images/icon8.png') }}">
                        <img id="button-8-img" src="{{ asset('images/icon8.png') }}"/>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row" id="content-row">
<div id="right-line" class="line-orange"> </div>
<div id="right-circle-container">
    <div id="right-circle" class="small-orange">
    </div>
    <div id="right-circle-back">
    </div>
    <img style="position:absolute; margin-top:14.5%; left:402.5%; z-index:1" id="img-right" class="img-responsive" src="{{ asset('images/foto_p1.png') }}"/>
</div>
<div id="left-line" class="line-purple"> </div>
<div id="left-circle-container">
    <div id="left-circle" class="big-purple ">
    </div>
    <div id="left-circle-back">
    </div>
    <img style="position:absolute; left:74.7%; margin-top:29.5%; z-index:1" id="img-left" class="img-responsive" src="{{ asset('images/foto_g6.png') }}"/>
</div>
<div id="gray-line"></div>
<div class="circle-text">
    <div>
        <div id="contenido">
            <div id="carousel" class="carousel slide vertical">
                <div class="carousel-inner">
                    <div class="active item" id="first-slide">
                        <img id="moto-landing" class="img-responsive" src="{{ asset('images/moto.png') }}"/>
                        <div id="first-text">
                            <p class="title-yellow">ÉPALE!</p> <br> <p class="sub-title-white">ANÓTATE AQUÍ</p>
                        </div>
                    </div>
                    <div class="item" style="text-align:left">
                        <div style="padding-left:15%; padding-right:15%; margin-top:-10%">
                            <div class="number-container">
                                <p> 1 </p>
                            </div>
                            <h2 class="item-h2">Regístrate en el Sistema</h2>
                            <p class="item-p"> Realiza el pre registro en la web www.ruedamesb.com <br>
                                Debes ser mayor de edad.<br>
                                Dírigete a la sede ppal. de Ruédame en el CC Mata de Coco.<br><br>
                                <b> Lleva los requisitos de afiliación: </b><br><br>
                                a. Copia de Cédula de Identidad.<br>
                                b. Copia del RIF. <br>
                                c. Carta de trabajo o constancia de residencia en Chacao.<br>
                                d. Instrumento de pago.<br><br>
                                Firma las condiciones de uso y haz el registro biométrico.</p>
                        </div>
                    </div>
                    <div class="item" style="text-align:left">
                        <div style="padding-left:15%; padding-right:15%; margin-top:-10%">
                            <div class="number-container">
                                <p> 2 </p>
                            </div>
                            <h2 class="item-h2">Curso de Inducción</h2>
                            <p class="item-p"> Debes realizar el curso que te certifique que conoces
                                y dominas el sistema.<br>
                                Se te entregará certificado de aprobación.
                                <img id="img-induccion" class="img-responsive" src="{{ asset('images/curso_induccion.png') }}"/>
                            </p>
                        </div>
                    </div>
                    <div class="item" style="text-align:left">
                        <div style="padding-left:15%; padding-right:20%; margin-top:-10%">
                            <div class="number-container">
                                <p> 3 </p>
                            </div>
                            <h2 class="item-h2">Ingreso en el Sistema</h2>
                            <p class="item-p"> Una vez aprobado el curso, podrás comenzar
                                a usar el sistema Ruédame.
                                <img id="img-ingreso" class="img-responsive" src="{{ asset('images/ingreso_sistema.png') }}"/>
                            </p>
                        </div>
                    </div>
                    <div class="item" style="text-align:left">
                        <div style="padding-left:15%; padding-right:18%; margin-top:-10%">
                            <div class="number-container">
                                <p> 4 </p>
                            </div>
                            <h2 class="item-h2">Equipamiento</h2>
                            <p class="item-p"> Bicicleta Eléctrica, Protección (casco y chaleco son obligatorios)
                                y Accesorios (no obligatorios): guantes, zapatos SB.
                                <img id="img-instructions" class="img-responsive" src="{{ asset('images/instructions.png') }}"/>
                            </p>
                        </div>
                    </div>
                    <div class="item" style="text-align:left">
                        <div style="padding-left:15%; padding-right:15%; margin-top:-10%">
                            <div class="number-container">
                                <p> 5 </p>
                            </div>
                            <h2 class="item-h2">Normativa de Uso (Bicicleta SB)</h2>
                            <p class="item-p"> La bicicleta es intransferible.<br><br>
                                Sólo puedes utilizarla en los municipios:<br><br>
                                Chacao, Baruta, Hatillo, Libertador y Sucre.<br><br>
                                En caso de emergencia o accidente, utiliza el botón de pánico
                                <img id="img-alert" class="img-responsive" src="{{ asset('images/alert.png') }}"/></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#carousel" data-toggle="modal" data-target="#modal-registro">
            <div id="registrate-button">
                <p id="registrate-text">
                    REGÍSTRATE
                </p>
            </div>
        </a>
        <div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="modal-form" style="color:#5a5a5c; text-align:left">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align:center; font-family:'Century Gothic Bold';"> PRE-REGISTRO </h2>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:10px">
                            <div class="col-md-2">
                                <img class="img-responsive" src="{{ asset('images/icon-name.png') }}"/>
                            </div>
                            <div class="col-md-4" style="padding-top:20px; margin-left:-5%">
                                <p> NOMBRE Y APELLIDO </p>
                            </div>
                            <div class="col-md-6" style="padding-top:10px;">
                                <input id="name" type="text" class="form-control get-value"/>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:10px">
                            <div class="col-md-2">
                                <img class="img-responsive" src="{{ asset('images/icon-mail.png') }}"/>
                            </div>
                            <div class="col-md-4"  style="padding-top:20px; margin-left:-5%">
                                <p> CORREO ELECTRÓNICO</p>
                            </div>
                            <div class="col-md-6"  style="padding-top:10px;">
                                <input id="mail" type="email" class="form-control get-value"/>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:10px">
                            <div class="col-md-2">
                                <img class="img-responsive" src="{{ asset('images/icon-phone.png') }}"/>
                            </div>
                            <div class="col-md-4"  style="padding-top:20px; margin-left:-5%">
                                <p> TELÉFONO</p>
                            </div>
                            <div class="col-md-6"  style="padding-top:10px;">
                                <input id="phone" type="text" class="form-control get-value"/>
                            </div>
                        </div>

                        <div class="row" style="margin-top:25px">
                            <div class="col-md-5 col-md-offset-1">
                                <a href="#carousel" data-dismiss="modal">
                                    <div class="modal-button">
                                        <p class="modal-text">
                                            SALIR
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <button class="modal-button" id="registration" data-url="{{ URL::to('users') }}">
                                    <p class="modal-text">
                                        REGÍSTRATE
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href=".carousel" data-slide="prev">
            <div class="small-arrow1">
                <img src="{{ asset('images/small_arrow.png') }}"/>
            </div>
        </a>
        <a   href=".carousel" data-slide="next">
            <div class="small-arrow2">
                <img src="{{ asset('images/small_arrow2.png') }}"/>
            </div>
        </a>
    </div>
</div>
<div id="red-text">
    <div id="carousel-text" class="carousel carousel-text slide vertical">
        <!--  items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2 id="red">MOVERTE POR CARACAS </br> NUNCA HABIA SIDO TAN FÁCIL</h2>
            </div>
            <div class="item">
                <h2 id="red">SE PARTE DE NUESTRO NUEVO MUNDO</h2>
            </div>
            <div class="item">
                <h2 id="red">ATRÉVETE A SER DIFERENTE</h2>
            </div>
            <div class="item">
                <h2 id="red">LA MOVILIDAD EN TUS MANOS</h2>
            </div>
            <div class="item">
                <h2 id="red">RUEDA EN LA URBE CON PRUDENCIA</h2>
            </div>
            <div class="item">
                <h2 id="red">BIENVENIDO A TU VIAJE</h2>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<div class="row" id="footer-row">
    <div class="col-md-6">
        <p style="color: #2F3C3D;font-family: 'Century Gothic Bold';">
            Ruédame es un sistema de alquiler de bicicletas eléctricas asistidas, <br>
            encuentra el bunker más cerca de ti y empieza a tener<br>
            el control de tu tiempo y ve a donde quieras. <br>
        </p>
        <p class="footer-text-light">
            TODOS LOS DERECHOS RESERVADOS POR RUÉDAME SB ® 2014. RIF: J-31465617-1
        </p>
    </div>
    <div class="col-md-1  col-md-offset-4">
        <a href="#">
            <img class="img-responsive social-button" src="{{ asset('images/twitter.png') }}"/>
        </a>
    </div>
    <div class="col-md-1">
        <a href="#">
            <img class="img-responsive social-button"  style="margin-left:-80%" src="{{ asset('images/facebook.png') }}"/>
        </a>
    </div>
</div>
<!-- </div> -->
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript"   src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/pnotify.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fun.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
