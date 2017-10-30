@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Noticias
					<a href= "{{ url('addNew')}}"  style="margin-top:-7px; float:right;" class="btn btn-success" >Nueva Publicación</a></div>
				<div class="panel-body">
					
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					
					<table class="table table-hover">
						<thead>
							<tr>

								<th>Fecha de creación</th>
								<th>Título</th>
								<th>Autor</th>
								<th>Validado?</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($news as $new)						
							<tr>
								<th>{{ date("d-m-Y", strtotime($new->created_at)) }}</th>
								<td>{{ $new->title }}</td>
								<td>{{ $new->created_by->name . ' ' . $new->created_by->surname }}</td>
								<td>@if($new->is_approved==1) SI @else NO @endif</td>
								<td><a href= "/news/{{$new->id}}" class="btn btn-info" >Editar</a>&nbsp;&nbsp;<a href= "/deleteNew/{{$new->id}}" onClick="return confirm('¿Esta seguro?');" class="btn btn-danger" >Eliminar</a> @if($new->is_approved!=1 && Auth::user()->roles_id==1)&nbsp;&nbsp;<a href= "/approveNew/{{$new->id}}" onClick="return confirm('¿Esta seguro?');" class="btn btn-warning" >Aprobar</a> @endif</td>
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
