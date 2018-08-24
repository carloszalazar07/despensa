@extends('main')

@section('contenido')
	
	<h1 class="text-center">Lista de Alumnos</h1>
	<a href="{{url('/alumnos/create')}}" class="btn btn-primary fas fa-user-plus"></a>
	<hr>
	{{-- BUSCADOR --}}
	{!!Form::open(['route'=>'alumnos.index', 'method'=> 'GET', 'class'=>'navbar-form pull-right']) !!}
		<div class="form-group">
			<span class="input-group-addon" id="seach"></span>
			{!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Busca el alumno', 'aria-describedby' => 'search']) !!}
		</div>
	{!!Form::close() !!}
	{{-- FIN DEL BUSCADOR --}}
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Telefono</th>
				<th>Acciones</th>
				<th>Eliminar</th>
			</tr>
		</thead>

		<tbody>
		@foreach($alumnos as $alumno)
			<tr>
				<td>{{$alumno->id}}</td>
				<td>{{$alumno->nombre}}</td>
				<td>{{$alumno->edad}}</td>
				<td>{{$alumno->telefono}}</td>
				<td>
					<a href="{{route('alumnos.show',$alumno->id)}}" class="btn btn-primary far fa-eye"></a>

					<a href="{{route('alumnos.edit',$alumno->id)}}" class="btn btn-success fas fa-edit"></a>
				</td>
				<td>
					{!!Form::open(['route'=>['alumnos.destroy',$alumno->id],'method'=>'DELETE'])!!}
						<button class="fas fa-trash-alt btn btn-danger"></button>
					{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{{$alumnos->render()}}

@endsection