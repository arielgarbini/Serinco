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
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/banks/store">

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
									<label class="col-md-4 control-label">Maximo a financear</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="max_finance" value="{{ old('max_finance') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Porcentaje de la cuota</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="percentaje_cuota" value="{{ old('percentaje_cuota') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tiempo</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="time" value="{{ old('time') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Porcentaje a financear</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="finance" value="{{ old('finance') }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tasa anual</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="tasa_anual" value="{{ old('tasa_anual') }}" required>
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
