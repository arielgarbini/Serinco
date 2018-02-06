@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Curriculum vitae</div>
				<div class="panel-body">
					<table >
						<tr>
							<th>Nombre:</th>
							<td>{{$cv->name}}</td>
						</tr>
						<tr>
							<th>Correo eléctronico:</th>
							<td>{{$cv->email}}</td>
						</tr>
						<tr>
							<th>Télefono:</th>
							<td>{{$cv->phone}}</td>
						</tr>
						<tr>
							<th>Cv:</th>
							<td>@if($cv->cv) <a download target="_blank" href="{{url('/cv/'.$cv->cv)}}">{{$cv->cv}}</a> @else - @endif</td>
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
