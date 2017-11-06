<!doctype html>
<html class="no-js" lang="es">
    <head>
		<!--HEAD-->
        @include("head")
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
            <section id="Comparador" class="circles">
                <div class="container animatedParent" data-sequence="200">
                    <div class="circle circle-1 outer popsicle animated fadeInLeftShort go" data-id="1"></div>
                    <div class="circle circle-1 inner raspberry animated fadeInLeftShort go" data-id="2" style="background-image:url('img/sections/slider.jpg');background-repeat:no-repeat;background-size:cover;"></div>
                    <div class="row animatedParent">
                        <div class="col-lg-12 animated fadeInLeftShort go xs-text-center sm-text-center">
                            <h1>Encontrá el crédito <br/>que más te conviene</h1>
                            <p>Con nuestro <a>Comparador de Créditos</a>, vas a descubrir las mejores opciones en los principales bancos de Argentina 😉</p>
                            <div class="btns">
                                <a class="btn btn-popsicle" data-location="Home - hero" data-text="Vivienda única" data-style="Button - Popsicle" href="#ViviendaUnica">Buscar para Vivienda Única ahora</a>
                                <a class="btn btn-white hidden" data-location="Home - hero" data-text="Segunda vivienda" data-style="Button - Popsicle" href="#SegundaVivienda">Segunda vivienda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <section id="top-dsps" class="dsps hidden-md hidden-sm hidden-xs">
                <div class="container">
                    <div class="row animatedParent animateOnce">
                        <div class="col-lg-9 animated fadeInLeftShort go">
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-bbva.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-ciudad.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-galicia.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-santander.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-icbc.png"></a>
                            </div>
                            <div class="col-lg-2 col-xs-3">
                                <a><img class="img-responsive logos-home" src="img/bancos/logo-nacion.png"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 animated fadeInLeftShort go">
                            <a class="inpage" href="{{url('nosotros')}}">...y muchos más ›</a>
                        </div>
                        </div>
                    </div>
                </div>    
            </section>
            <section>
                <div id="ViviendaUnica" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row animatedParent animateOnce " data-sequence="500">
                        <div class="col-lg-12 text-center xs-text-center sm-text-center xs-margin-ten-top sm-margin-five-top">
                            <h1 class="">Créditos para vivienda única</h1>
                            <p class="xs-margin-ten-bottom">¡Es muy fácil! Completá con tus datos y elegí si el crédito hipotecario es para comprar una vivienda o para construir una nueva. ¡En segundos tendrás el comparativo!</p>
                            <form action="" method="" autocomplete="off" class="">
                                <div class="col-xs-12 col-sm-12 col-md-3 xs-no-padding sm-no-padding no-padding-left">
                                    <label for="" class="xs-title-large sm-title-large">Ingreso mensual en pesos</label>
                                    <input id="ingreso_mensual" name="" type="number" autocomplete="off" placeholder="Individual o familiar" required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 xs-no-padding sm-no-padding">
                                    <label for="" class="xs-title-large sm-title-large">Valor del inmueble</label>
                                    <input id="valor_inmueble" name="" type="number" autocomplete="off" placeholder="Monto en pesos" required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 xs-no-padding sm-no-padding">
                                    <label for="" class="xs-title-large sm-title-large">Monto a financiar</label>
                                    <input id="monto_financiar" class="number" name="" type="number" autocomplete="off" placeholder="Valor en pesos" required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 xs-no-padding sm-no-padding no-padding-right">
                                    <label for="" class="xs-title-large sm-title-large">Plazo solicitado</label>
                                    <input id="plazo_solicitado" name="" type="number" autocomplete="off" placeholder="Crédito a cuántos años" required>
                                </div>
                             </form>
                        </div>
                    </div>
                    <div class="row animatedParent animateOnce" data-sequence="500">
                        <div class="col-lg-8 col-lg-offset-2 text-center xs-margin-ten-top sm-margin-five-top">
                            <div class="btns text-center">
                                <a class="btn btn-popsicle" data-text="Quiero comprar" onClick="calcularCuota()" data-style="Button - Popsicle">Quiero comprar</a> 
                                <a class="btn btn-white" data-text="Borrar datos"  href="#" id="delete-inputs" data-style="Button - Popsicle">Borrar datos</a>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </section>      
            <section id="pricing-table" style="display:none;">
                <div id="Pricing" style="position:absolute;top:-100px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row animatedParent animateOnce" data-sequence="500">
                        <!--BANCO BBVA-->
                        @foreach($banks as $bank)
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 animated bounceInDown bancos" id="bank-display-{{$bank->id}}" data-id="{{$bank->id}}">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2" class="xs-text-center xs-padding-twenty-five sm-padding-twenty-five md-padding-twenty-five">
                                            <img class="img-responsive xs-display-inline-block" src="/bancos/{{$bank->imagen}}"/>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="">
                                            <h2 class="xs-title-medium sm-title-medium md-title-medium">@if($bank->max_finance=='') Sin Limite @else {{number_format($bank->max_finance, 0, ',', '.')}} @endif</h2>
                                            <p class="xs-text-small xs-no-margin-top sm-text-small md-text-small">Máximo a financiar</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="">
                                            <h2 class="xs-title-medium sm-title-medium md-title-medium">{{number_format($bank->tasa_anual, 2, ',', '.')}}%</h2>
                                            <p class="xs-text-small xs-no-margin-top sm-text-small md-text-small">Tasa anual</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="">
                                            <h2 class="xs-title-extra-large-4 sm-title-extra-large-3 md-title-extra-large-3 lg-title-extra-large-4" id="cuota_{{$bank->id}}"></h2>
                                            <p class="xs-text-small xs-no-margin-top sm-text-small md-text-small">Primera cuota</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="">
                                            <a data-value="{{$bank->id}}" data-resul="" id="cuota_hidden_{{$bank->id}}" class="bank-selected btn btn-popsicle mpStartsSignup" data-location="Home - hero" data-text="Aplicar" data-style="Button - Popsicle" href="" data-toggle="modal" data-target="#SolicitarCredito">Asesorate</a>
                                            <p class="xs-no-margin-top xs-text-extra-small sm-text-extra-small md-text-extra-small lg-text-extra-small">* Para este crédito se requiere <a href="" data-toggle="modal" data-target="#SolicitarCertificado">certificado de titularidad</a>.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                        <!--BANCO BBVA-->

                    </div>
                    <hr/>
                </div>
            </section>
            <section>
                <div id="Preguntas" style="position:absolute;top:-130px;visibility:hidden;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 sm-text-center xs-text-center">
                            <h1>¿Alguna duda?</h1>
                            <p>Te respondemos con la información adecuada para que puedas tomar la mejor decisión.</p>
                        </div>
                    </div>
                    <div class="content-list sm-text-center xs-text-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3>¿Qué es UVA?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">Es una unidad de medida basada en el índice de precios al consumidor que el Banco Central actualiza diariamente según el CER.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3>¿En qué se diferencia un crédito UVA?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">Básicamente, en que la liquidación de las cuotas depende del valor de las UVAs, que se expresan en pesos al momento del vencimiento.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3>¿Hay algún tope en el aumento de la cuota?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">¡Sí! Cuando la cuota supera un 10% el valor de cuota de un préstamo con ajuste de capital.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 lg-margin-ten-bottom md-margin-ten-bottom sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3>¿Puedo cancelar el préstamo antes?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">¡Por supuesto! Podés cancelar la operación en cualquier momento.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 sm-margin-three-bottom xs-margin-ten-bottom">
                                <h3>¿El mutuo hipotecario se firma en UVAs?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">¡No! ¡Siempre en pesos argentinos! La UVA no es una moneda sino una unidad de medida.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h3>¿Dónde puedo ver todos los créditos UVA?</h3>
                                <p class="xs-no-margin-top sm-no-margin-top md-no-margin-top">¡En esta misma página! <a data-location="Home - hero" data-text="Comparador de Créditos" data-style="Button - Popsicle" href="#ViviendaUnica">Consultá ahora mismo</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>          
        </main>
        <!--MAIN-->
		<!--FOOTER-->
        @include("footer", ['banks'=>$banks])
		<!--FOOTER-->
		
        <!--MODAL SOLICITAR CRÉDITO-->
        <div id="SolicitarCredito" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="sendcotizacion" method="POST" autocomplete="off" class="no-margin">
                    <div class="modal-body">
                            {{csrf_field()}}
                            <input type="hidden" name="bank" id="bank">
                            <input type="hidden" name="resul" id="resul">
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Nombre completo</label>
                                <input id="" name="name" type="text" autocomplete="off" placeholder="Nombre y apellido" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Documento de identidad</label>
                                <input id="" name="dni" type="text" autocomplete="off" placeholder="DNI o Cédula" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Correo electrónico</label>
                                <input id="" name="email" type="email" autocomplete="off" placeholder="Por ejemplo: nombre@serinco.com" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Teléfono de contacto</label>
                                <input id="" name="phone" type="number" autocomplete="off" placeholder="Por ejemplo: +54111234567" required>
                            </div>
                            <div class="">
                                <input id="" name="certificate" type="checkbox" checked autocomplete="off" required>
                                <small class="xs-no-margin-top xs-text-medium sm-text-medium md-text-medium"><i>Solicitar certificado de vivienda única</i></small>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btns text-center">
                            <button type="submit" class="btn btn-popsicle" data-text="Quiero comprar" data-style="Button - Popsicle" href="" target="_blank">Contactate con el banco</button>
                            <a class="btn btn-white" data-dismiss="modal">Cancelar</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>      
        <!--MODAL SOLICITAR CRÉDITO-->

        <!--MODAL SOLICITAR CERTIFICADO-->
        <div id="SolicitarCertificado" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="" method="" autocomplete="off" class="no-margin">
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Nombre completo</label>
                                <input id="" name="" type="text" autocomplete="off" placeholder="Nombre y apellido" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Documento de identidad</label>
                                <input id="" name="" type="text" autocomplete="off" placeholder="DNI o Cédula" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Correo electrónico</label>
                                <input id="" name="" type="email" autocomplete="off" placeholder="Por ejemplo: nombre@serinco.com" required>
                            </div>
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Teléfono de contacto</label>
                                <input id="" name="" type="number" autocomplete="off" placeholder="Por ejemplo: +54111234567" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="btns text-center">
                            <a class="btn btn-popsicle" data-text="Quiero comprar" data-style="Button - Popsicle" href="">Solicitá tu certificado</a> 
                            <a class="btn btn-white" data-dismiss="modal">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!--MODAL SOLICITAR CERTIFICADO-->
    </body>
</html>