@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mensaje de contacto</div>
				<div class="panel-body">
					<table >
						<tr>
							<th>Nombre:</th>
							<td>{{$cv->name}}</td>
						</tr>
						@if(isset($cv->dni))
							<tr>
								<th>Dni:</th>
								<td>{{$cv->dni}}</td>
							</tr>
						@endif
						<tr>
							<th>Correo eléctronico:</th>
							<td>{{$cv->email}}</td>
						</tr>
						<tr>
							<th>Télefono:</th>
							<td>{{$cv->phone}}</td>
						</tr>
						<tr>
							<th>Tipo:</th>
							<td>{{$cv->type}}</td>
						</tr>
						@if($cv->messages!='' && $cv->messages!=null)
							<tr>
								<th>Mensaje:</th>
								<td>{{$cv->messages}}</td>
							</tr>
						@endif

						@if($cv->bank_id!='' && $cv->bank_id!=null)
							<tr>
								<th colspan="2">Banco: {{$cv->bank->name}}</th>
							</tr>
							<tr>
								<td colspan="2"><img style="width:150px;" src="{{asset('bancos/'.$cv->bank->imagen)}}" class="img-responsive" ></td>
							</tr>
							<tr>
								<th>Máximo a financiar:</th>
								<td>${{number_format($cv->bank->max_finance, 0, ',', '.')}}</td>
							</tr>
							<tr>
								<th>Tasa anual:</th>
								<td>{{number_format($cv->bank->tasa_anual, 2, ',', '.')}}%</td>
							</tr>
							<tr>
								<th>Primera cuota:</th>
								<td>{{$cv->resul}}</td>
							</tr>
							<tr>
								<th>Solicita certificado de vivienda única?:</th>
								<td>@if(isset($cv->certificate) && $cv->certificate=='on') Si @else No @endif</td>
							</tr>
						@endif
					</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
      
     </script>
	@endsection
