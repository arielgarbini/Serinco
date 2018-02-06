<!doctype html>
<html class="no-js" lang="es">
    <head>
		<!--HEAD-->
        @include("head")
        <title>Serinco | El Valor Cierto</title>
        <!-- META -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf8">
        <meta property="og:title" content="Te damos la bienvenida a Serinco">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.serinco.com.ar/">
        <meta property="og:description" content="Ayudamos a bancos, empresas y consumidores finales a simplificar su gestión y responder a los requerimientos de los diversos mercados de Argentina.">
        <meta property="og:site_name" content="Serinco">
        <meta property="og:image" content="img/sections/bg-home.jpg">
        <meta property="og:image:secure_url" content="img/sections/bg-home.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@">
        <meta name="twitter:title" content="Te damos la bienvenida a Serinco">
        <meta name="twitter:description" content="Ayudamos a bancos, empresas y consumidores finales a simplificar su gestión y responder a los requerimientos de los diversos mercados de Argentina.">
        <meta name="twitter:image" content="img/sections/bg-home.jpg">
        <meta property="twitter:account_id" content="">    
        <!-- META -->
		<!--HEAD-->
    </head>
    
    <body>
        <!--[if lt IE 11]>
        <p class="browserupgrade">Estás utilizando un navegador <strong>anticuado</strong>. Por favor, <a href="http://browsehappy.com/">actualizalo aquí</a> y mejorá tu experiencia digital.</p>
        <![endif]-->
        
        <!--HEADER-->
        @include("header")
        <!--HEADER-->

        <!--MAIN-->
        <main>
            <section id="home-welcome" class="circles">
                <div class="container animatedParent" data-sequence="200">
                    <div class="circle circle-1 outer popsicle animated fadeInLeftShort go" data-id="1"></div>
                    <div class="circle circle-1 inner raspberry animated fadeInLeftShort go" data-id="2" style="background-image:url('img/sections/slider.jpg');background-repeat:no-repeat;background-size:cover;"></div>
                    <div class="row animatedParent">
                        <div class="col-lg-12 animated fadeInLeftShort go xs-text-center sm-text-center"> 
                            <h1>Te damos la bienvenida.<br/>Descubrí el valor cierto.</h1>
                            <p>Ayudamos a bancos, empresas y consumidores finales a simplificar su gestión y responder a los requerimientos de los diversos mercados de Argentina.</p>
                            <div class="btns">
                                <a class="btn btn-popsicle" data-location="Home - hero" data-text="Vivienda única" data-style="Button - Popsicle" href="{{url('soluciones')}}">Nuestros servicios</a>
                                <a class="btn btn-white hidden" data-location="Home - hero" data-text="Segunda vivienda" data-style="Button - Popsicle" href="{{url('comparador')}}">Comparador de créditos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="top-dsps" class="dsps hidden-sm hidden-xs">
                <div class="container">
                    <div class="row animatedParent animateOnce">
                        <div class="col-lg-9 animated fadeInLeftShort go">
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="bancos/logo-nacion.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="bancos/logo-ciudad.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="bancos/logo-provincia.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="bancos/logo-hipotecario.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/clientes/img-clientes-ypf.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="bancos/logo-macro.png"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 animated fadeInLeftShort go">
                            <a class="inpage" href="{{url('nosotros')}}#Clientes">...y muchos más ›</a>
                        </div>
                        </div>
                    </div>
                </div>    
            </section>
            <section id="">
                <div class="container">
                    <div class="row animatedParent animateOnce">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 sm-text-center md-margin-five-top sm-margin-ten-top sm-margin-ten-bottom xs-margin-twenty-top xs-margin-twenty-bottom">
                            <img src="img/sections/img-tasaciones-001.jpg" class="side-illustration home-distribution animated fadeInDownShort go img-responsive d-inline-block"/>
                            <h2 class="lg-title-large md-title-large sm-title-large xs-title-extra-large-2 lg-margin-ten-top md-margin-ten-top sm-margin-ten-top xs-margin-ten-top"><a href="{{url('tasaciones')}}">Tasaciones</a></h2>
                            <p class="xs-title-small">Valuación de propiedades inmuebles, maquinarias e instalaciones.</p>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 md-margin-five-top sm-text-center sm-margin-ten-top sm-margin-ten-bottom xs-margin-ten-top xs-margin-twenty-bottom">
                            <img src="img/sections/img-gestoria-001.jpg" class="side-illustration home-distribution animated fadeInDownShort go img-responsive d-inline-block"/>
                            <h2 class="lg-title-large md-title-large sm-title-large xs-title-extra-large-2 lg-margin-ten-top md-margin-ten-top sm-margin-ten-top xs-margin-ten-top"><a href="{{url('gestoria')}}">Gestoría</a></h2>
                            <p class="xs-title-small">Búsqueda y verificación patrimonial en todos los registros de la propiedad inmueble o automotores.</p>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 md-margin-five-top sm-text-center sm-margin-ten-top sm-margin-ten-bottom xs-margin-twenty-bottom">
                            <img src="img/sections/img-proyectos-001.jpg" class="side-illustration home-distribution animated fadeInDownShort go img-responsive d-inline-block"/>
                            <h2 class="lg-title-large md-title-large sm-title-large xs-title-extra-large-2 lg-margin-ten-top md-margin-ten-top sm-margin-ten-top xs-margin-ten-top"><a href="{{url('inversiones')}}">Inversiones</a></h2>
                            <p class="xs-title-small">Análisis de factibilidad económica y técnica de  proyectos de inversión inmobiliarios.</p>
                        </div>
                        <div class="col-lg-3 hidden-md col-sm-6 col-xs-12 md-margin-five-top sm-text-center sm-margin-ten-top sm-margin-ten-bottom xs-margin-twenty-bottom">
                            <img src="img/sections/img-inspecciones-001.jpg" class="side-illustration home-distribution animated fadeInDownShort go img-responsive d-inline-block"/>
                            <h2 class="lg-title-large md-title-large sm-title-large xs-title-extra-large-2 lg-margin-ten-top md-margin-ten-top sm-margin-ten-top xs-margin-ten-top"><a href="{{url('inspecciones')}}">Inspecciones</a></h2>
                            <p class="xs-title-small">Certificación de obras. Auditoría de puntos comerciales, operativos y para seguros.</p>
                        </div>
                    </div>
                    <hr/>
                </div>    
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 text-center">
                            <h1>Nuestra propuesta de valor</h1>
                            <p>Te ayudamos a responder a los requerimientos de los principales mercados. ¿Cómo?</p>
                        </div>
                    </div>
                    <div class="content-list sm-text-center xs-text-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3><i class="fa fa-map-marker"></i> Presentes a lo largo y ancho del país</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">No importa donde estés. Siempre vas a tener el respaldo de nuestro equipo. Contamos con más de 500 expertos en todas las provincias de Argentina.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3><i class="fa fa-laptop"></i> Con el respaldo de Serinco digital</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">Los mercados evolucionan. Nuestras soluciones también. En Serinco, trabajamos con las últimas tecnologías para garantizar los resultados que esperás.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3><i class="fa fa-building"></i> Soluciones corporativas</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">Ayudamos a entidades financieras, empresas, compañías de seguros, y desarrollistas a simplificar su gestión y obtener resultados de alto impacto.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3><i class="fa fa-user"></i> Soluciones para consumidores finales</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">Entendemos la complejidad que enfrentan las personas en el proceso de búsqueda de inmuebles y créditos hipotecarios. Por eso, los ayudamos de principio a fin.</p>
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