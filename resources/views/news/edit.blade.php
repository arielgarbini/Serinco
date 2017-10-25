@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Publicación</div>
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
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/editNew">

						<div class="list-group">
							<div class="list-group-item">
								<legend>Noticia</legend>

								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id" value="{{ $news->id }}">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Titulo</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" value="{{ $news->title }}" required>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Copete</label>
									<div class="col-md-6">
							         <textarea name="short_description" id="short_description" rows="3" cols="52">{{ $news->short_description }}</textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Fuente</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="source" value="{{ $news->source }}">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Cuerpo</label>
									<div class="col-md-6">
									<textarea name="body" id="body" rows="5" cols="80">{{ strip_tags($news->body) }}</textarea>
									</div>
								</div>

                                <div class="form-group">
									<label class="col-md-4 control-label">Imagen Grande</label>
									<div class="col-md-6">
										 @if($news->big_pic!=null)
		                                 <img src="{{asset('publicaciones/'.$news->big_pic)}}" class="img-responsive" >
		                                 @endif
										<input type="file" class="form-control" name="big_pic">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Imagen Chica</label>
									<div class="col-md-6">
										 @if($news->small_pic!=null)
		                                 <img src="{{asset('publicaciones/'.$news->small_pic)}}" class="img-responsive" >
		                                 @endif
										<input type="file" class="form-control" name="small_pic">
									</div>
								</div> 
								
								<div class="form-group">	
									<div class="col-md-6 col-md-offset-5"><br/>
										<button type="submit" class="btn btn-primary">
											Editar Publicación
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
