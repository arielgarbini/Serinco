@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Bancos
					<a href= "{{ url('banks/create')}}"  style="margin-top:-7px; float:right;" class="btn btn-success" >Nuevo Banco</a></div>
				<div class="panel-body">
					
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					
					<table class="table table-hover">
						<thead>
							<tr>

								<th>#</th>
								<th>Nombre</th>
								<th>Maximo financiar</th>
								<th>Porcentaje cuota</th>
								<th>Tasa anual</th>
								<th>Estatus</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							@foreach($banks as $bank)
                            <?php $i++; ?>
							<tr>
								<th>{{ $i }}</th>
								<td>{{ $bank->name }}</td>
								<td>{{ $bank->max_finance }}</td>
								<td>{{ $bank->percentaje_cuota }}</td>
								<td>{{ $bank->tasa_anual }}</td>
								<td>@if($bank->is_active==1) Activo @else Deshabilitado @endif</td>
								<td><a href= "/banks/{{$bank->id}}/edit" class="btn btn-info" >Editar</a>&nbsp;&nbsp;<a href= "banks/{{$bank->id}}/delete" onClick="return confirm('¿Esta seguro?');" class="btn btn-danger" >Deshabilitar</a> @if($bank->is_active!=1 && Auth::user()->roles_id==1)&nbsp;&nbsp;<a href= "banks/{{$bank->id}}/approve" onClick="return confirm('¿Esta seguro?');" class="btn btn-warning" >Activar</a> @endif</td>
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
