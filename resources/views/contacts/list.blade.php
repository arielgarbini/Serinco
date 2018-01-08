@extends('layouts.admin')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Mensajes de contacto
						<div class="panel-body">

							@if (Session::has('message'))
								<div class="alert alert-info">{{ Session::get('message') }}</div>
							@endif

							<table class="table table-hover">
								<thead>
								<tr>

									<th>#</th>
									<th>Nombre</th>
									<th>Correo eléctronico</th>
									<th>Télefono</th>
									<th>Tipo</th>
									<th>Fecha de creación</th>
									<th>Acción</th>
								</tr>
								</thead>
								<tbody>
                                <?php $i = 0; ?>
								@foreach($contacts as $cv)
                                    <?php $i++; ?>
									<tr>
										<th>{{ $i }}</th>
										<td>{{ $cv->name }}</td>
										<td>{{ $cv->email }}</td>
										<td>{{ $cv->phone }}</td>
										<td>{{ $cv->type }}</td>
										<td>{{ $cv->created_at->format('d/m/Y') }}</td>
										<td><a href= "/contacts/{{$cv->id}}" class="btn btn-info" >Ver</a>&nbsp;&nbsp;<a href= "contacts/{{$cv->id}}/delete" onClick="return confirm('¿Esta seguro?');" class="btn btn-danger" >Eliminar</a> </td>
									</tr>
								@endforeach
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
