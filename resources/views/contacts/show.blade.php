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
					</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
      
     </script>
	@endsection
