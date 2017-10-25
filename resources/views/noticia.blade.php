<!doctype html>
<html class="no-js" lang="es">
	<head>
		<!--HEAD-->
        @include("head")
		<!--HEAD-->

        <!-- META -->
        <meta property="og:title" content="{{$noticia->title}}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.serinco.com.ar/noticia/{{$noticia->id}}">
        <meta property="og:description" content="{{$noticia->short_description}}">
        <meta property="og:site_name" content="Serinco">
        <meta property="og:image" content="{{asset('publicaciones/'.$noticia->big_pic)}}">
        <meta property="og:image:secure_url" content="{{asset('publicaciones/'.$noticia->big_pic)}}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@">
        <meta name="twitter:title" content="{{$noticia->title}}">
        <meta name="twitter:description" content="{{$noticia->short_description}}">
        <meta name="twitter:image" content="">
        <meta property="twitter:account_id" content="">    
        <!-- META -->
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
		<header data-spy="affix" data-offset-top="210" class="white-page affix-top">
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
            <section>
            	<div class="container">
            		<div class="content-list">
            			<div class="row">
            				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 centered">
            					<h1 class="lg-title-extra-large-2 xs-title-extra-large-2 lg-margin-three-bottom">{{$noticia->title}}</h1>
            					<h4 class="lg-title-medium md-title-small color-grey lg-margin-five-two ">{{$noticia->short_description}}</h4>
            					<div class="sharethis-inline-share-buttons lg-margin-five-bottom"></div>
            				    <img class="width-75 lg-margin-three-bottom hidden-xs" title="{{$noticia->title}}" alt="{{$noticia->title}}" src="{{asset('publicaciones/'.$noticia->big_pic)}}"/>
            					<p><?php echo $noticia->body; ?></p>
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
                        		<div class="btns"><a class="btn btn-popsicle" data-location="Home - distribution" data-text="Ver más novedades" data-style="Button - Popsicle" href="{{url('novedades')}}">Ver más novedades</a> 
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