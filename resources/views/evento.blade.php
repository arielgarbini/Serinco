<!doctype html>
<html class="no-js" lang="es">
<head>
    @include("head")
    <title>Serinco | Evento</title>
    <meta name="description" content="Ayudamos a personas y empresas a simplificar su gestión y responder a los requerimientos de los diversos mercados de Argentina.">
    <meta name="keywords" content="tasaciones, gestoria, creditos hipotecarios, creditos uva, prestamos hipotecarios, procrear, proyectos de inversión, inspecciones,">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffff76">

    <!-- META -->
    <meta property="og:title" content="{{$evento->name}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.serinco.com.ar/cf/noticia/{{$evento->id}}">
    <meta property="og:description" content="{{$evento->description}}">
    <meta property="og:site_name" content="Serinco">
    <meta property="og:image" content="{{asset('events/'.$evento->image)}}">
    <meta property="og:image:secure_url" content="{{asset('events/'.$evento->image)}}">
    <meta property="og:image:type" content="image/jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="{{$evento->name}}">
    <meta name="twitter:description" content="{{$evento->description}}">
    <meta name="twitter:image" content="{{asset('events/'.$evento->image)}}">
    <meta property="twitter:account_id" content="">
    <!-- META -->

    <style>.wf-loading {
            opacity: 0;
            visibility: hidden;
        }
        .ie.wf-loading {
            visibility: hidden;
        }
        .ie.wf-active {
            visibility: visible;
        }
        .wf-active {
            visibility: visible;
            opacity: 1;
            -webkit-transition: opacity 0.5s ease-in-out;
            -moz-transition: opacity 0.5s ease-in-out;
            transition: opacity 0.5s ease-in-out;
        }
    </style>

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <!--FAVICON-->
    <!--ANIMACIÓN INICIAL-->
    <script>if(window.docCookies={getItem:function(e){return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(e).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null},getDomain:function(e,o){return o=o||!1,e=e.replace(/(https?:\/\/)?(www.)?/i,""),o||(e=e.split("."),e=e.slice(e.length-2).join(".")),e.indexOf("/")!==-1?e.split("/")[0]:e},setItem:function(e,o,n,t,i,x){if(!e||/^(?:expires|max\-age|path|domain|secure)$/i.test(e))return!1;var c="";if(n)switch(n.constructor){case Number:c=n===1/0?"; expires=Fri, 31 Dec 9999 23:59:59 GMT":"; max-age="+n;break;case String:c="; expires="+n;break;case Date:c="; expires="+n.toUTCString()}return document.cookie=encodeURIComponent(e)+"="+encodeURIComponent(o)+c+(i?"; domain="+i:"")+(t?"; path="+t:"")+(x?"; secure":""),!0},hasItem:function(e){return new RegExp("(?:^|;\\s*)"+encodeURIComponent(e).replace(/[\-\.\+\*]/g,"\\$&")+"\\s*\\=").test(document.cookie)}},!docCookies.hasItem("clientid")){var guid="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(e){var o=16*Math.random()|0,n="x"==e?o:3&o|8;return n.toString(16)}),domain=docCookies.getDomain(document.location.host);docCookies.setItem("clientId",guid,1/0,"/","."+domain,!0)}
    </script>
    <!--ANIMACIÓN INICIAL-->

    <!--FUENTES-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!--FUENTES-->

    <!--ESTILOS-->
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!--ESTILOS-->

    <!--REDES-->
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59d2aff520f64600117ce987&product=inline-share-buttons"></script>
    <!--REDES-->

    <!--GOOGLE ANALYTICS-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42187424-20"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-42187424-20');
    </script>
    <!--GOOGLE ANALYTICS-->

    <!--FACEBOOK PIXEL-->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1329033300446121');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1329033300446121&ev=PageView&noscript=1"/></noscript>
    <!--FACEBOOK PIXEL-->
</head>

<body>
<!--[if lt IE 11]>
<p class="browserupgrade">Estás utilizando un navegador <strong>anticuado</strong>. Por favor, <a href="http://browsehappy.com/">actualizalo aquí</a> y mejorá tu experiencia digital.</p>
<![endif]-->

<!--HEADER-->
<header data-spy="affix" data-offset-top="210" class="white-page affix-top">
    <div class="row">
        <div class="col-lg-2">
            <a id="logo" href="{{url('/')}}" title="Serinco, el Valor Cierto"></a>
            <button id="menu-button"></button>
        </div>
        <div class="col-lg-7">
            <nav>
                <ul>
                    <li><a id="" href="{{url('nosotros')}}"><i class="fa fa-users"></i> Nosotros</a></li>
                    <li class="hidden-lg hidden-md hidden-sm"><a id="" href="{{url('nosotros')}}"><i class="fa fa-users"></i> Nosotros</a></li>
                    <li><a id="" href="{{url('soluciones')}}"><i class="fa fa-usd"></i> Soluciones</a></li>
                    <li><a id="" href="{{url('novedades')}}"><i class="fa fa-newspaper-o"></i> Novedades</a></li>
                    <li><a id="" href="{{url('eventos')}}"><i class="fa fa-newspaper-o"></i> Eventos</a></li>
                    <li><a id="" href="" data-location="Home - hero" data-text="Contacto" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto"><i class="fa fa-envelope"></i> Contacto</a></li>
                </ul>
                <p>El Valor Cierto desde <br class="hidden-lg hidden-md hidden-sm"/>🏢 desde 1979 🏦</p>
            </nav>
        </div>
        <div id="guest-btns" class="col-lg-3 btns">
            <a class="btn btn-popsicle pull-right col-xs-12 col-md-7 hidden" href="{{url('comparador')}}" data-location="Header" data-text="Créditos Hipotecarios" data-style="Button - Popsicle">Créditos Hipotecarios</a>
            <a class="btn btn-white pull-right col-xs-12 col-md-4" href="http://www.serinco.com.ar/ServiciosLogin.aspx" target="_blank" data-text="Accesos">Login</a>
        </div>
    </div>
</header>
<!--HEADER-->

<!--MAIN-->
<main>
    <section>
        <div class="container">
            <div class="content-list">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 centered">
                        <h1 class="lg-title-extra-large-2 xs-title-extra-large-2 lg-margin-three-bottom">{{$evento->name}}</h1>
                        @if($evento->price)
                        <h5 style="font-size: 18px !important;" class="lg-title-medium md-title-small color-grey lg-margin-five-two "><b>{{number_format($evento->price, 2)}}</b></h5>
                        @else
                            <h5 style="font-size: 18px !important;" class="lg-title-medium md-title-small color-grey lg-margin-five-two "><b>Gratis!</b></h5>
                        @endif
                        <h5 style="font-size: 18px !important;" class="lg-title-medium md-title-small color-grey lg-margin-five-two ">{{$evento->type}}</h5>
                        <h4 class="lg-title-medium md-title-small color-grey lg-margin-five-two ">{{$evento->place}}</h4>
                        <div class="sharethis-inline-share-buttons lg-margin-five-bottom"></div>
                        <img class="width-75 lg-margin-three-bottom hidden-xs" title="{{$evento->name}}" alt="{{$evento->name}}" src="{{asset('events/'.$evento->image)}}"/>
                        <p><?php echo $evento->description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="content-list no-margin">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="btns">
                            <a class="btn btn-popsicle" data-location="Home - distribution" data-text="Ver más novedades" data-toggle="modal" data-target="#Inscribirse" data-style="Button - Popsicle" >Inscribirse</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="content-list no-margin">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <hr>
                        <div class="btns"><a class="btn btn-popsicle" data-location="Home - distribution" data-text="Ver más novedades" data-style="Button - Popsicle" href="{{url('eventos')}}">Ver más eventos</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<!--MAIN-->

<!--FOOTER-->
<footer>
    <div class="container">
        <div class="row footer-links xs-text-center sm-text-center md-text-center">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <h4>Nosotros</h4>
                <nav>
                    <ul>
                        <li><a href="{{url('nosotros')}}#Mision" target="_self">Misión</a></li>
                        <li><a href="{{url('nosotros')}}#Clientes">Clientes</a></li>
                        <li><a href="{{url('nosotros')}}#RRHH">RRHH</a></li>
                        <li><a href="{{url('nosotros')}}#Equipo">Equipo</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <h4>Soluciones</h4>
                <nav>
                    <ul>
                        <li><a href="{{url('tasaciones')}}">Tasaciones</a></li>
                        <li><a href="{{url('gestoria')}}">Gestoría</a></li>
                        <li><a href="{{url('proyectos-de-inversion')}}">Proyectos de inversión</a></li>
                        <li><a href="{{url('inspecciones')}}">Inspecciones</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <h4>Novedades</h4>
                <nav>
                    <ul>
                        <li><a href="{{url('comparador')}}">Comparador de Créditos</a></li>
                        <li><a href="{{url('novedades')}}">Noticias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <h4>Información de contacto</h4>
                <nav>
                    <ul>
                        <li><a href="tel:+541153522390" target="_blank"><i class="fa fa-phone"></i> Llamanos al 5352-2390</a></li>
                        <li><a href="https://www.google.com.ar/maps/place/SERINCO/@-34.604662,-58.376873,15z/data=!4m2!3m1!1s0x0:0x5c4937ec188034cd?sa=X&ved=0ahUKEwjnjdSij4LXAhWJipAKHbuhAV4Q_BIIdTAN" target="_blank"><i class="fa fa-map-marker"></i> Sarmiento 732 Piso 8</a></li>
                        <li><a href="" data-location="Home - hero" data-text="Contacto" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto"><i class="fa fa-envelope"></i> Envianos un mensaje</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row footer-social">
            <div class="col-lg-12">
                <ul>
                    <li><a class="footer-facebook" href="https://www.facebook.com/serincosa" target="_blank" title="Serinco en Facebook"><img src="../img/social/facebook.svg" alt="Facebook"></a></li>
                    <li class="hidden"><a class="footer-instagram" href="" target="_blank" title="Serinco en Instagram"><img src="../img/social/instagram.svg" alt="Instagram"></a></li>
                    <li class="hidden"><a class="footer-twitter" href="" target="_blank" title="Serinco en Twitter"><img src="../img/social/twitter.svg" alt="Twitter"></a></li>
                    <li class="hidden"><a class="footer-youtube" href="" target="_blank" title="Serinco en YouTube"><img src="../img/social/youtube.svg" alt="YouTube"></a></li>
                    <li><a class="footer-linkedin" href="https://www.linkedin.com/company/2243241/" target="_blank" title="Serinco en LinkedIn"><img src="../img/social/linkedin.svg" alt="LinkedIn"></a></li>
                </ul>
                <p>El Valor Cierto 🏢 desde 1979 🏦</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="col-lg-12">
            <p>Copyright &copy; 2017 Serinco. Diseñador por <a href="http://www.coffeetalk.com.ar" target="_blank">CoffeeTalk</a></p>
        </div>
    </div>
</footer>
<!--FOOTER-->

<!--CONTACTO-->
<div id="Contacto" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="" autocomplete="off" class="no-margin">
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Nombre completo</label>
                        <input id="" name="name" type="text" autocomplete="off" placeholder="Nombre y apellido" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Correo electrónico</label>
                        <input id="" name="email" type="email" autocomplete="off" placeholder="Por ejemplo: nombre@serinco.com" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Teléfono de contacto</label>
                        <input id="" name="tel" type="number" autocomplete="off" placeholder="Por ejemplo: +54111234567" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btns text-center">
                    <a class="btn btn-popsicle" data-style="Button - Popsicle" href="" onclick="enviarContacto()" target="_blank" data-dismiss="modal">Envianos tu consulta</a>
                    <a class="btn btn-white" data-dismiss="modal">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CONTACTO-->

<!--CONTACTO-->
<div id="Inscribirse" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="" autocomplete="off" class="no-margin">
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Nombre completo</label>
                        <input id="" name="nameI" type="text" autocomplete="off" placeholder="Nombre y apellido" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Correo electrónico</label>
                        <input id="" name="emailI" type="email" autocomplete="off" placeholder="Por ejemplo: nombre@serinco.com" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Teléfono de contacto</label>
                        <input id="" name="telI" type="number" autocomplete="off" placeholder="Por ejemplo: +54111234567" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btns text-center">
                    <a class="btn btn-popsicle" data-style="Button - Popsicle" href="" onclick="enviarInscripcion()" target="_blank" data-dismiss="modal">Inscribirse</a>
                    <a class="btn btn-white" data-dismiss="modal">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CONTACTO-->

<!--UNITE-->
<div id="Unite" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="sendcv" method="POST" enctype="multipart/form-data" autocomplete="off" class="no-margin">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Nombre completo</label>
                        <input id="" name="name" type="text" autocomplete="off" placeholder="Nombre y apellido" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Correo electrónico</label>
                        <input id="" name="email" type="email" autocomplete="off" placeholder="Por ejemplo: nombre@serinco.com" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Teléfono de contacto</label>
                        <input id="" name="number" type="number" autocomplete="off" placeholder="Por ejemplo: +54111234567" required>
                    </div>
                    <div class="">
                        <label for="" class="xs-title-large sm-title-large md-title-large">Envianos tu CV</label>
                        <input id="" name="cv" type="file" autocomplete="off" placeholder="Envianos tu CV" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="btns text-center">
                        <button type="submit" class="btn btn-popsicle" data-text="Quiero comprar" data-style="Button - Popsicle" >Envianos tu consulta</button>
                        <a class="btn btn-white" data-dismiss="modal">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--UNITE-->

<!--JS-->
<script src="{{asset('js/base.js')}}"></script>
<script src="{{asset('js/jquery.smooth-scroll.min.js')}}"></script>
<script type="text/javascript">window.cookieconsent_options={message:"Utilizamos Cookies para mejorar y asegurar la mejor experiencia digital de nuestros usuarios.",dismiss:"¡Acepto!",theme:"dark-top"}</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<script src="{{asset('js/mask.js')}}"></script>
<!--JS-->
<script>
    $(document).ready(function(){
        $('.bank-selected').click(function(){
            $('#bank').val($(this).attr('data-value'));
            $('#resul').val($(this).attr('data-resul'));

        });

        $('#delete-inputs').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $("#ingreso_mensual").val('');
            $("#valor_inmueble").val('');
            $("#monto_financiar").val('');
            $("#plazo_solicitado").val('');
            $('#pricing-table').css('display','none');
            return false;
        })
    });
    function enviarContacto() {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'email'              : $('input[name=email]').val(),
            'name'             : $('input[name=name]').val(),
            'tel'             : $('input[name=tel]').val(),
            '_token'          : "{{ csrf_token() }}",
        };

        // process the form
        $.post('{{url("contacto")}}',formData,function(data){
            alert('Muchas gracias. En breve nos pondremos en contacto con usted.');})

        // stop the form from submitting the normal way and refreshing the page
        //event.preventDefault();
        window.location.replace("{{url('thankyou')}}");

    }

    function enviarInscripcion(){
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'email'              : $('input[name=emailI]').val(),
            'name'             : $('input[name=nameI]').val(),
            'tel'             : $('input[name=telI]').val(),
            'event': "{{$evento->id}}",
            '_token'          : "{{ csrf_token() }}",
        };

        // process the form
        $.post('{{url("eventoContacto")}}',formData,function(data){
            alert('Muchas gracias por su inscripción. En breve nos pondremos en contacto con usted.');})

        // stop the form from submitting the normal way and refreshing the page
        //event.preventDefault();
        window.location.replace("{{url('thankyou')}}");
    }

    function calcularCuota(){


        if($('#ingreso_mensual')[0].checkValidity()==true && $('#valor_inmueble')[0].checkValidity()==true && $('#monto_financiar')[0].checkValidity()==true && $('#plazo_solicitado')[0].checkValidity()==true) {
            if($("#monto_financiar").val()>($("#valor_inmueble").val()*0.65)){
                alert("El monto a financiar no puede superar el 65% del valor del inmueble");
            } else if(parseFloat($('#ingreso_mensual').val()) < 9500) {
                alert("El salario minimo permitido es de $9.500,00");
            }else if(parseFloat($('#valor_inmueble').val()) < 1200000) {
                alert("El valor minimo de la propiedad permitido es de $1.200.000,00");
            }else{
                $('#pricing-table').css('display','');
                var ingreso_mensual = $("#ingreso_mensual").val();
                var valor_inmueble = $("#valor_inmueble").val();
                var monto_financiar = $("#monto_financiar").val();
                var plazo_solicitado = $("#plazo_solicitado").val();
                @if(isset($banks))
                        @foreach($banks as $bank)
                if((parseInt("{{$bank->time}}") >=parseInt(plazo_solicitado) && parseFloat(monto_financiar)<=parseFloat("{{$bank->max_finance}}")) || "{{$bank->max_finance}}"=="") {
                    var tasa_{{$bank->id}} = {{$bank->tasa_anual}}/100;
                            @if($bank->max_finance=='')
                    var data_{{$bank->id}} = [(valor_inmueble * 75) / 100,{{$bank->finance}},{{$bank->time}},{{$bank->percentaje_cuota}}]
                            @else
                    var data_{{$bank->id}} = [{{$bank->max_finance}},{{$bank->finance}},{{$bank->time}},{{$bank->percentaje_cuota}}]
                            @endif
                    var montoCuota_{{$bank->id}} = (ingreso_mensual * data_{{$bank->id}}[3]) / 100;
                    var tiempo_{{$bank->id}} = Math.min(data_{{$bank->id}}[2], plazo_solicitado);
                    var max_{{$bank->id}} = parseInt(((1 - Math.pow((1 + tasa_{{$bank->id}}/ 12), -(tiempo_{{$bank->id}}* 12))) / (tasa_{{$bank->id}}/ 12)) * montoCuota_{{$bank->id}});
                    var financiar_{{$bank->id}} = Math.min((valor_inmueble * data_{{$bank->id}}[1]) / 100, data_{{$bank->id}}[0], monto_financiar, max_{{$bank->id}});
                    var resul_{{$bank->id}} = parseInt(financiar_{{$bank->id}}/ ((1 - Math.pow((1 + tasa_{{$bank->id}}/ 12), -(tiempo_{{$bank->id}}* 12))) / (tasa_{{$bank->id}}/ 12))) + 1;
                    $('#cuota_{{$bank->id}}').html('$' + resul_{{$bank->id}});
                    $('#cuota_hidden_{{$bank->id}}').attr('data-resul', '$' + resul_{{$bank->id}});
                    $('#monto_financiar_{{$bank->id}}').html('$' + financiar_{{$bank->id}});
                    $("#bank-display-{{$bank->id}}").show();
                } else {
                    $("#bank-display-{{$bank->id}}").hide();
                }
                @endforeach
                        @endif

                    window.location.href = "#Pricing";
            }
        }else{

            alert("Por favor, complete todos los datos.");
        }

    }
</script>
<!--CHAT-->
<script>(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/59daa269e4b0752008455e8e/59daa26ee4b0752008455e96.js' ; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>
<!--CHAT-->
<!--FOOTER-->
</body>
</html>