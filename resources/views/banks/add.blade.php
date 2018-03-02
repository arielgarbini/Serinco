@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Banco</div>
				<div class="panel-body">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Ups!</strong> Existen los siguientes errores.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{url('/banks/store')}}">

						<div class="list-group">
							<div class="list-group-item">
								<legend>Banco</legend>

								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">

								<div class="form-group">
									<label class="col-md-4 control-label">Nombre</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Maximo a financiar</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="max_finance" value="{{ old('max_finance') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Porcentaje máximo del valor de la propiedad</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="percentaje_max" value="{{ old('percentaje_max') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Plazo máximo de pago</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="plazo_max" value="{{ old('plazo_max') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Relación máxima cuota / ingreso</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="rci" value="{{ old('rci') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tasa anual</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="tasa_anual" value="{{ old('tasa_anual') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Edad minima</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="age_min" value="{{ old('age_min') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Edad maxima</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="age_max" value="{{ old('age_max') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Enlace de ver más</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="show_more" value="{{ old('show_more') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Imagen</label>
									<div class="col-md-6">
										<input type="file" class="form-control" name="imagen">
									</div>
								</div>

								<div class="form-group">	
									<div class="col-md-6 col-md-offset-5"><br/>
										<button type="submit" class="btn btn-primary">
											Crear Banco
										</button>
									</div>
								</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
