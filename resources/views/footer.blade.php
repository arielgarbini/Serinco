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
                                <li class="hidden"><a href="{{url('comparador')}}">Comparador de Créditos</a></li>
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
                            <div class="">
                                <label for="" class="xs-title-large sm-title-large md-title-large">Mensaje</label>
                                <textarea id="mensaje" name="mensaje" type="text" autocomplete="off" placeholder="Tu consulta" required></textarea>
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
            'msj'             : $('#mensaje').val(),
            '_token'          : "{{ csrf_token() }}",
        };

        // process the form
        $.post('{{url("contacto")}}',formData,function(data){
            window.location = "{{route('thankyou')}}";
        });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
       
        }

        function calcularCuota(){
        
       
        if($('#ingreso_mensual')[0].checkValidity()==true && $('#plazo_solicitado')[0].checkValidity()==true) {
            if(parseFloat($('#ingreso_mensual').val()) < 9500) {
                alert("El salario minimo permitido es de $9.500,00");
            } else if($('#edad').val()<18){
                alert("La edad minima es de 18 años");
            } else{
        $('#pricing-table').css('display','');
        var ingreso_mensual = $("#ingreso_mensual").val();
        var edad = $("#edad").val();
        var plazo_solicitado = $("#plazo_solicitado").val();
        @if(isset($banks))
        @foreach($banks as $bank)
            if(parseInt("{{$bank->plazo_max}}") >=parseInt(plazo_solicitado)) {
                var age_min = parseInt("{{$bank->age_min}}");
                var age_max = parseInt("{{$bank->age_max}}");
                if(edad>age_min && edad<age_max){
                    var rci = parseFloat("{{$bank->rci}}");
                    var plazo_max = parseInt("{{$bank->plazo_max}}");
                    var max_finance = parseInt("{{$bank->max_finance}}");
                    var tasa_anual = parseFloat("{{$bank->tasa_anual}}");
                    var plazo_limitado_edad = (age_max-edad)+1;
                    var cuota_max = (ingreso_mensual*rci)/100;
                    var plazo_prestamo = 0;
                    if(edad>=age_min){
                        plazo_prestamo = Math.min(plazo_max,plazo_solicitado,plazo_limitado_edad);
                    }
                    var tasa_real = tasa_anual/100;
                    var monto_cuota_max = 1-Math.pow((1+tasa_real/12),-(plazo_prestamo*12));
                    monto_cuota_max = Math.round(monto_cuota_max/(tasa_real/12)*cuota_max);
                    if(max_finance<monto_cuota_max){
                        monto_cuota_max = max_finance;
                    }
                    var cuota = (1-Math.pow((1+tasa_real/12),-(plazo_prestamo*12)))/(tasa_real/12);
                    cuota = monto_cuota_max / cuota;
                    console.log('{{$bank->name}} : '+cuota);
                    monto_cuota_max_string = monto_cuota_max.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1.');
                    var result = cuota.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1.');
                    $('#cuota_{{$bank->id}}').html('$' + result.toString().substr(0,result.length-3));
                    $('#cuota_hidden_{{$bank->id}}').attr('data-resul', '$' + result.toString().substr(0,result.length-3));
                    $('#monto_financiar_{{$bank->id}}').html('$ '+ monto_cuota_max_string.toString().substr(0,monto_cuota_max_string.length-3));
                    $('#time_credit_{{$bank->id}}').html(plazo_prestamo+' años');
                    $("#bank-display-{{$bank->id}}").show();
                }
            } else {
                $("#bank-display-{{$bank->id}}").hide();
            }
        @endforeach
        @endif

        window.location.href = "#Pricing";
            }
        }else{
            alert("Por favor, complete todos los datos en el formato indicado en cada campo del formulario.");
        }
        
       }
        </script>
        <!--CHAT--> 
        <script>(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/59daa269e4b0752008455e8e/59daa26ee4b0752008455e96.js' ; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>
        <!--CHAT--> 