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
								<li><a href="{{url('soluciones')}}#Tasaciones">Tasaciones</a></li>
								<li><a href="{{url('soluciones')}}#Gestoria">Gestoría</a></li>
								<li><a href="{{url('soluciones')}}#Proyectos">Proyectos de inversión</a></li>
								<li><a href="{{url('soluciones')}}#Inspecciones">Inspecciones</a></li>
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
								<li><a href="tel:+541153522390" target="_blank">Llamanos al 5352-2390</a></li>
								<li><a href="" data-location="Home - hero" data-text="Contacto" data-style="Button - Popsicle" data-toggle="modal" data-target="#Contacto">Envianos un mensaje</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="row footer-social">
					<div class="col-lg-12">
						<ul>
							<li><a class="footer-facebook" href="https://www.facebook.com/serincosa" target="_blank" title="Serinco en Facebook"><img src="img/social/facebook.svg" alt="Facebook"></a></li>
							<li class="hidden"><a class="footer-instagram" href="" target="_blank" title="Serinco en Instagram"><img src="img/social/instagram.svg" alt="Instagram"></a></li>
							<li class="hidden"><a class="footer-twitter" href="" target="_blank" title="Serinco en Twitter"><img src="img/social/twitter.svg" alt="Twitter"></a></li>
							<li class="hidden"><a class="footer-youtube" href="" target="_blank" title="Serinco en YouTube"><img src="img/social/youtube.svg" alt="YouTube"></a></li>
							<li><a class="footer-linkedin" href="https://www.linkedin.com/company/2243241/" target="_blank" title="Serinco en LinkedIn"><img src="img/social/linkedin.svg" alt="LinkedIn"></a></li>
						</ul>
						<p>El Valor Cierto desde 🏢 desde 1979 🏦</p>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="col-lg-12">
					<p>Copyright &copy; 2017 Serinco. Diseñador por <a href="http://www.coffeetalk.com.ar" target="_blank">CoffeeTalk</a></p>
				</div>
			</div>
		</footer>
		
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
        <script type="text/javascript">window.cookieconsent_options={message:"Utilizamos Coockies para mejorar y asegurar la mejor experiencia digital de nuestros usuarios.",dismiss:"¡Acepto!",theme:"dark-top"}</script>
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
        event.preventDefault();
       
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
            if((parseInt("{{$bank->time}}") >=parseInt(plazo_solicitado)) && (parseFloat(monto_financiar)<=parseFloat("{{$bank->max_finance}}") || "{{$bank->max_finance}}"=="")) {
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