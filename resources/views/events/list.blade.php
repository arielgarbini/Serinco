@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Eventos
					<a href= "{{ url('addEve')}}"  style="margin-top:-7px; float:right;" class="btn btn-success" >Nuevo Evento</a></div>
				<div class="panel-body">
					
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					
					<table class="table table-hover">
						<thead>
							<tr>

								<th>Fecha</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Lugar</th>
								<th>Precio</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($events as $new)
							<tr>
								<th>{{ date("d-m-Y", strtotime($new->date)) }}</th>
								<td>{{ $new->name }}</td>
								<td>{{ $new->type }}</td>
								<td>{{ $new->place }}</td>
								<td>{{ number_format($new->price, 2) }}</td>
								<td><a href= "{{url('/event/'.$new->id)}}" class="btn btn-info" >Editar</a>&nbsp;&nbsp;<a href= "{{url('/deleteEve/'.$new->id)}}" onClick="return confirm('¿Esta seguro?');" class="btn btn-danger" >Eliminar</a> </td>
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
