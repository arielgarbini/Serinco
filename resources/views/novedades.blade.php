<!doctype html>
<html class="no-js" lang="es">
	<head>
		<!--HEAD-->
        @include("head")
		<!--HEAD-->
	</head>
	
	<body>
		<!--GOOGLE TAG MANAGER-->
		<script>
			!function(e,t,a,n,r){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var g=t.getElementsByTagName(a)[0],m=t.createElement(a),s="dataLayer"!=n?"&l="+n:"";m.async=!0,m.src="//www.googletagmanager.com/gtm.js?id="+r+s,g.parentNode.insertBefore(m,g)}(window,document,"script","dataLayer","GTM-P5KGXM")
		</script>
		<!--GOOGLE TAG MANAGER-->

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
                <div class="col-lg-6">
                    <nav>
                        <ul>
                            <li><a id="" href="{{url('nosotros')}}"><i class="fa fa-users"></i> Nosotros</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a id="" href="{{url('nosotros')}}"><i class="fa fa-users"></i> Nosotros</a></li>
                            <li><a id="" href="{{url('soluciones')}}"><i class="fa fa-usd"></i> Soluciones</a></li>
                            <li><a id="" href="{{url('novedades')}}"><i class="fa fa-newspaper-o"></i> Novedades</a></li>
                            <li><a id="" href="" data-location="Home - hero" data-text="Contacto" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto"><i class="fa fa-envelope"></i> Contacto</a></li>
                        </ul>
                        <p>El Valor Cierto desde <br class="hidden-lg hidden-md hidden-sm"/>🏢 desde 1979 🏦</p>
                    </nav>
				</div>
				<div id="guest-btns" class="col-lg-4 btns">
					<a class="btn btn-popsicle pull-right col-xs-12 col-md-7" href="{{url('comparador')}}" data-location="Header" data-text="Créditos Hipotecarios" data-style="Button - Popsicle">Créditos Hipotecarios</a> 
					<a class="btn btn-white pull-right col-xs-12 col-md-4" href="http://www.serinco.com.ar/ServiciosLogin.aspx" data-text="Accesos">Accesos</a>
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
            				<div class="btns"><a class="btn btn-popsicle" data-location="Home - hero" data-text="Ver todas las noticias" data-style="Button - Popsicle" href="#Noticias">Ver todas las noticias</a></div>
            			</div>
            		</div>
            	</div>
            	<small>✍ por el equipo de expertos de Serinco</small>
            </section>
            
            <section>
				<div id="Noticias" style="position:absolute;top:-130px;visibility:hidden;"></div>
            	<div class="container">
            		<div class="content-list">
            			@foreach($news as $noticia)
            			<div class="row">
            				<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
            				    <img src="{{asset('publicaciones/'.$noticia->small_pic)}}"/>
            				</div>
            				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-text-center">
            					<h2 class=""><a href="{{url('noticia/'.$noticia->id)}}">{{$noticia->title}}</a></h2>
            					<p class="md-title-small">{{$noticia->short_description}}</p>
            					<div class="btns md-display-inline-block sm-display-inline-block"><a class="btn btn-white" href="{{url('noticia/'.$noticia->id)}}">Leer más</a></div>
            				</div>
            			</div>
            			<hr>
                        <? $data[] = $noticia->id; ?>
            			@endforeach
            		</div>
            	</div>
            </section>
           
            <section class="hidden-xs">
            	<div class="container">
            		<div class="row animatedParent animateOnce">
            			@foreach($news as $noticia)
                        @if(!in_array($noticia->id, $data))
            			<div class="col-lg-3 col-sm-6 col-xs-12 xs-text-center md-margin-ten-bottom sm-margin-ten-bottom">
            				<img class="hidden-xs img-responsive" src="{{asset('publicaciones/'.$noticia->small_pic)}}"/>
            				<h2 class="lg-title-medium md-title-large sm-title-extra-large-2 xs-title-extra-large-4 lg-margin-ten-top "><a href="{{url('noticia/'.$noticia->id)}}">{{$noticia->title}}</a></h2>
            				<p class="lg-text-medium">{{$noticia->short_description}}</p>
            			</div>
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
                        		<div class="btns"><a class="btn btn-popsicle" data-location="Home - distribution" data-text="Ver más novedades" data-style="Button - Popsicle" href="">Ver más novedades</a> 
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