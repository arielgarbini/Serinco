@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Evento</div>
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
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{url('/editEve')}}">

						<div class="list-group">
							<div class="list-group-item">
								<legend>Noticia</legend>

								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id" value="{{ $event->id }}">

								<div class="form-group">
									<label class="col-md-4 control-label">Nombre</label>
									<div class="col-md-6">
										<input maxlength="50" type="text" class="form-control" name="name" value="{{ $event->name }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Tipo</label>
									<div class="col-md-6">
										<select class="form-control" name="type" required>
											<option @if($event->type=='Presentación') selected @endif value="Presentación">Presentación</option>
											<option @if($event->type=='Capacitación') selected @endif value="Capacitación">Capacitación</option>
											<option @if($event->type=='Evento') selected @endif value="Evento">Evento</option>
											<option @if($event->type=='Celebración') selected @endif value="Celebración">Celebración</option>
											<option @if($event->type=='Webinar') selected @endif value="Webinar">Webinar</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Fecha</label>
									<div class="col-md-6">
										<input type="date" class="form-control" name="date" value="{{ $event->date }}" required min="{{date('Y-m-d')}}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Hora de inicio</label>
									<div class="col-md-6">
										<input type="text" class="form-control" pattern="[0-9]{2}:[0-9]{2}" placeholder="00:00" name="start_hour" value="{{ $event->start_hour }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Hora de finalización</label>
									<div class="col-md-6">
										<input type="text" class="form-control" pattern="[0-9]{2}:[0-9]{2}" placeholder="00:00" name="end_hour" value="{{ $event->end_hour }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Lugar</label>
									<div class="col-md-6">
										<textarea name="place" id="place" rows="3" cols="52">{{$event->place}}</textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Precio</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="price" id="price" value="{{ $event->price }}">
									</div>
								</div>

								<div class="form-group" @if($event->price=='') style="display: none;" @endif id="link-div">
									<label class="col-md-4 control-label">Link de pago</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="link" id="link" value="{{ $event->link }}">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Descripción</label>
									<div class="col-md-6">
										<textarea name="description" id="description" rows="3" cols="52">{{$event->description}}</textarea>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-md-4 control-label">Imagen </label>
									<div class="col-md-6">
										 @if($event->image!=null)
		                                 <img src="{{asset('events/'.$event->image)}}" class="img-responsive" >
		                                 @endif
										<input type="file" class="form-control" name="image">
									</div>
								</div>

								
								<div class="form-group">	
									<div class="col-md-6 col-md-offset-5"><br/>
										<button type="submit" class="btn btn-primary">
											Editar Evento
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
@section('scripts')
	<script>
        $(document).ready(function () {
            $('#price').change(function () {
                if($(this).val()==''){
                    $('#link-div').hide();
                    $('#link').val('');
                } else {
                    $('#link-div').slideDown('fast');
                }
            });
        });
	</script>
@endsection