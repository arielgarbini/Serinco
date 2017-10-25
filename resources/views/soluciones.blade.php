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
        @include("header")
        <!--HEADER-->

        <!--MAIN-->
        <main>
            <section id="Soluciones" class="circles">
                <div class="container animatedParent" data-sequence="200">
                    <div class="circle circle-1 outer popsicle animated fadeInLeftShort go" data-id="1"></div>
                    <div class="circle circle-1 inner raspberry animated fadeInLeftShort go" data-id="2" style="background-color:#005FB1;"></div>
                    <div class="row animatedParent">
                        <div class="col-lg-12 animated fadeInLeftShort go xs-text-center sm-text-center text-white">
                            <h1 class="text-white">Ayudamos a las personas y empresas en los mercados de Argentina</h1>
                            <p class="text-white">Brindamos soluciones que <a class="text-yellow">simplifican la gestión</a> de nuestros clientes y que responden a los requerimientos del mercado local.</p>
                            <div class="btns">
                                <a class="btn btn-white" data-location="Home - hero" data-text="Tasaciones" data-style="Button - Popsicle" href="#Tasaciones">Tasaciones</a>
                                <a class="btn btn-white" data-location="Home - hero" data-text="Servicios de Gestoría" data-style="Button - Popsicle" href="#Gestoria">Gestoría</a>
                                <a class="btn btn-white" data-location="Home - hero" data-text="Proyectos de inversión" data-style="Button - Popsicle" href="#Proyectos">Evaluaciones</a>
                                <a class="btn btn-white" data-location="Home - hero" data-text="Inspección para compañías de seguros" data-style="Button - Popsicle" href="#Inspecciones">Inspecciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="Tasaciones" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs animatedParent animateOnce">
                            <img src="img/sections/img-tasaciones-002.jpg" class="img-responsive animated fadeInLeftShort go">
                        </div>
                        <div class="col-lg-8 col-md-8 md-text-center xs-text-center">
                            <h2>Tasaciones con el valor cierto</h2>
                            <p>Realizamos un promedio anual de 38.000 valuaciones de inmuebles, maquinarias e instalaciones en toda la República Argentina y Latinoamérica por más de U$S 5.700.000.000. Todas bajo los más altos estándares de calidad a nivel nacional e internacional.</p>
                            <div class="btns">
                                <a id="" class="btn btn-popsicle mpStartsSignup" href="" data-location="Soluciones" data-text="Asesorate con uno de nuestros expertos" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto">Programá una tasación ahora</a>
                                <a id="" class="btn btn-white" href="{{url('tasaciones')}}" data-location="Soluciones" data-text="Más información" data-style="Button - Popsicle">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section>
                <div id="Gestoria" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 md-text-center xs-text-center">
                            <h2>Gestoría para<br class="hidden-md hidden-sm hidden-xs"/> personas y empresas</h2>
                            <p>Realizamos la búsqueda y verificación patrimonial en los registros de la propiedad de todas las provincias de Argentina: inmuebles, automotores, buques y aeronaves.</p>
                            <div class="btns">
                                <a id="" class="btn btn-popsicle mpStartsSignup" href="" data-location="Soluciones" data-text="Solicitá tu certificado de titularidad" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto">Solicitá tu certificado de titularidad</a>
                                <a id="" class="btn btn-white" href="{{url('gestoria')}}" data-location="Soluciones" data-text="Más información" data-style="Button - Popsicle">Más información</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs animatedParent animateOnce">
                            <img src="img/sections/img-gestoria-002.jpg" class="img-responsive animated fadeInRightShort go">
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section>
                <div id="Proyectos" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs animatedParent animateOnce">
                            <img src="img/sections/img-proyectos-002.jpg" class="img-responsive animated fadeInLeftShort go">
                        </div>
                        <div class="col-lg-8 col-md-8 md-text-center xs-text-center">
                            <h2>Evaluación de proyectos de inversión</h2>
                            <p>Acompañamos a las entidades financieras, desarrollistas y/o constructoras, en el análisis de razonabilidad técnica y económica de sus proyectos de inversión.</p>
                            <div class="btns">
                                <a id="" class="btn btn-popsicle mpStartsSignup" href="" data-location="Soluciones" data-text="Asesorate con uno de nuestros expertos" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto">Asesorate con nuestros expertos</a>
                                <a id="" class="btn btn-white" href="{{url('inversiones')}}" data-location="Soluciones" data-text="Más información" data-style="Button - Popsicle">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section>
                <div id="Inspecciones" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 md-text-center xs-text-center">
                            <h2>Servicios de inspecciones</h2>
                            <p>Ayudamos a las empresas en el relevamiento y análisis de la información clave: inspecciones de puntos operativos y comerciales; inspecciones previas a la suscripción de pólizas de seguros; e inspecciones y certificación de obras.</p>
                            <div class="btns">
                                <a id="" class="btn btn-popsicle mpStartsSignup" href="" data-location="Soluciones" data-text="Comunicate uno de nuestros especialistas" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto">Comunicate con nuestros especialistas</a>
                                <a id="" class="btn btn-white" href="{{url('inspecciones')}}" data-location="Soluciones" data-text="Más información" data-style="Button - Popsicle">Más información</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs animatedParent animateOnce">
                            <img src="img/sections/img-inspecciones-002.jpg" class="img-responsive animated fadeInRightShort go">
                        </div>
                    </div>
                </div>
            </section>
            <hr class="hidden-xs">
            <section class="hidden-xs">
                <div class="container">
                    <div class="row animatedParent animateOnce " data-sequence="500">
                        <div class="col-lg-12 text-center xs-text-center sm-text-center xs-margin-ten-top sm-margin-five-top">
                            <h2 class="">Nuestros clientes dicen...</h2>
                            <div class="row">
                                <div class="col-lg-8 artist-qoutes centered">
                                    <div class="row">
                                        <div class="col-lg-12 animatedParent animateOnce">
                                            <blockquote>
                                                <div class="pic">
                                                    <img src="https://www.recordunion.com/img/artists/cleo.jpg" alt="Cleo" title="Cleo" class="animated fadeIn go">
                                                    <small>Photo: Isabel Minou</small>
                                                </div>
                                                <div class="text">
                                                    <p>“Since I started with music I’ve been independent, and I wish I’ll always be – it gives me confidence and control over my career. Record Union is an important reason that I can still do this on my own, without the backup from a major label.”</p>
                                                    <h3>Cleo</h3>
                                                    <span>Artist</span>
                                                </div>
                                            </blockquote>
                                            <hr>
                                            <blockquote>
                                                <div class="text">
                                                    <p>“Thanks to Record Union I'm able to reach more listeners, which in turn allows for more opportunity.”</p>
                                                    <h3>WebsterX</h3>
                                                    <span>Artist</span>
                                                </div>
                                                <div class="pic">
                                                    <img src="https://www.recordunion.com/img/artists/cleo.jpg" alt="WebsterX" title="WebsterX" class="animated fadeIn go">
                                                </div></blockquote>
                                            <hr>
                                            <blockquote>
                                                <div class="pic">
                                                    <img src="https://www.recordunion.com/img/artists/cleo.jpg" alt="Hana Oceans" title="Hana Oceans" class="animated fadeIn go"> 
                                                    <small>Photo: Hilma Lundwall</small>
                                                </div>
                                                <div class="text">
                                                    <p>“Record Union is a team of true enthusiasts who work hard for their artists’ music.”</p>
                                                    <h3>Hana Oceans</h3>
                                                    <span>Spotify Spotlight artist</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
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