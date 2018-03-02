@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Banco</div>
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
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{url('/banks/'.$bank->id.'/update')}}">

						<div class="list-group">
							<div class="list-group-item">
								<legend>Banco</legend>

								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Nombre</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="name" value="{{ $bank->name }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Maximo a financiar</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="max_finance" value="{{ $bank->max_finance }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Porcentaje máximo del valor de la propiedad</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="percentaje_max" value="{{ $bank->percentaje_max }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Plazo máximo de pago</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="plazo_max" value="{{ $bank->plazo_max }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Relación máxima cuota / ingreso</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="rci" value="{{ $bank->rci }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tasa anual</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="tasa_anual" value="{{ $bank->tasa_anual }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Edad minima</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="age_min" value="{{ $bank->age_min }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Edad maxima</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="age_max" value="{{ $bank->age_max }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Enlace de ver más</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="show_more" value="{{ $bank->show_more }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Imagen</label>
									<div class="col-md-6">
										 @if($bank->imagen!=null)
		                                 <img src="{{asset('bancos/'.$bank->imagen)}}" class="img-responsive" >
		                                 @endif
										<input type="file" class="form-control" name="imagen">
									</div>
								</div> 
								
								<div class="form-group">	
									<div class="col-md-6 col-md-offset-5"><br/>
										<button type="submit" class="btn btn-primary">
											Editar Banco
										</button>
									</div>
								</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <script>
      
     </script>
	@endsection
