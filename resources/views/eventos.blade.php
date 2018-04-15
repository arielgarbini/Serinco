<!doctype html>
<html class="no-js" lang="es">
<head>
    <!--HEAD-->
    @include("head")
    <title>Serinco | Eventos</title>
    <!-- META -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta property="og:title" content="Novedades Serinco">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.serinco.com.ar/novedades">
    <meta property="og:description" content="Enterate primero que nadie de todo lo que sucede en los 📈 mercados 📊 de Argentina">
    <meta property="og:site_name" content="Serinco">
    <meta property="og:image" content="http://www.serinco.com.ar/img/sections/home-opportunities.jpg">
    <meta property="og:image:secure_url" content="http://www.serinco.com.ar/img/sections/home-opportunities.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="Novedades Serinco">
    <meta name="twitter:description" content="Enterate primero que nadie de todo lo que sucede en los 📈 mercados 📊 de Argentina">
    <meta name="twitter:image" content="http://www.serinco.com.ar/img/sections/home-opportunities.jpg">
    <meta property="twitter:account_id" content="">
    <!-- META -->
    <!--HEAD-->
</head>

<body>
<!--[if lt IE 11]>
<p class="browserupgrade">Estás utilizando un navegador <strong>anticuado</strong>. Por favor, <a href="http://browsehappy.com/">actualizalo aquí</a> y mejorá tu experiencia digital.</p>
<![endif]-->

<!--HEADER-->
<header data-spy="affix" data-offset-top="180">
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
    <section id="home-opportunities" class="hero">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-12 animated fadeInUp go xs-text-center md-text-center sm-text-center">
                    <h1>Las decisiones correctas se toman con la información adecuada</h1>
                    <p>Enterate primero que nadie de todo lo que sucede en los 📈 mercados 📊 de Argentina</p>
                    <div class="btns"><a class="btn btn-popsicle" data-location="Home - hero" data-text="Ver todos los eventos" data-style="Button - Popsicle" href="#Eventos">Ver todos los eventos</a></div>
                </div>
            </div>
        </div>
        <small>✍ por el equipo de expertos de Serinco</small>
    </section>

    <section>
        <div id="Eventos" style="position:absolute;top:-130px;visibility:hidden;"></div>
        <div class="container">
            <div class="content-list">
                <?php $i = 0; ?>
                @foreach($events as $n)
                    @if($i < 3)
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                                <img src="{{asset('events/'.$n->image)}}"/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-text-center">
                                <h2 class=""><a href="{{url('evento/'.$n->id)}}">{{$n->name}}</a></h2>
                                @if($n->price)
                                    <p style="font-size: 12px !important;" class="md-title-small"><b>Precio: </b>{{number_format($n->price, 2)}}</p>
                                @else
                                    <p style="font-size: 12px !important;" class="md-title-small"><b>Gratis! </b></p>
                                @endif
                                <p class="md-title-small">{{$n->description}}</p>
                                <div class="btns md-display-inline-block sm-display-inline-block"><a class="btn btn-white" href="{{url('evento/'.$n->id)}}">Leer más</a></div>
                            </div>
                        </div>
                        <hr>
                        <?php $data[] = $n->id; ?>
                        <?php $i++; ?>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="hidden-xs">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <?php $i = 0; ?>
                @foreach($events as $n)
                    @if($i < 4)
                        @if(!in_array($n->id, $data))
                            <div class="col-lg-3 col-sm-6 col-xs-12 xs-text-center md-margin-ten-bottom sm-margin-ten-bottom">
                                <img class="hidden-xs img-responsive" src="{{asset('events/'.$n->image)}}"/>
                                <h2 class="lg-title-medium md-title-large sm-title-extra-large-2 xs-title-extra-large-4 lg-margin-ten-top "><a href="{{url('evento/'.$n->id)}}">{{$n->name}}</a></h2>
                                @if($n->price)
                                    <p style="font-size: 12px !important;" class="md-title-small"><b>Precio: </b>{{number_format($n->price, 2)}}</p>
                                @else
                                    <p style="font-size: 12px !important;" class="md-title-small"><b>Gratis! </b></p>
                                @endif
                                <p class="lg-text-medium lg-line-height-20 md-line-height-20">{{$n->description}}</p>
                            </div>
                            <?php $i++; ?>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="content-list no-margin">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <hr class="hidden-xs">
                        <div class="btns"><a class="btn btn-popsicle" data-location="Home - distribution" data-text="Ver más eventos" data-style="Button - Popsicle" href="">Ver más eventos</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<!--MAIN-->

<!--FOOTER-->
@include("footer")
<!--FOOTER-->
</body>
</html>