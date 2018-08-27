@extends('main')

@section('contenido')

	<h2 class="text-center">Nuevo Alumno</h2>

	{!!Form::open(['action'=> 'AlumnosController@store',
							  'method'=> 'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre') }}
		{{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre',''])) }}
	</div>

	<div class="form-group">
		{{Form::label('edad', 'Edad') }}
		{{Form::text('edad','',(['class'=>'form-control','placeholder'=>'Ingrese su Edad',''])) }}
	</div>

	<div class="form-group">
		{{Form::label('telefono', 'Telefono') }}
		{{Form::text('telefono','',(['class'=>'form-control','placeholder'=>'Ingrese su Telefono',''])) }}
	</div>

	<select name="curso_id" id="" class="form-control">
			@foreach($cursos as $curso)
			<option value="{{$curso->id}}">{{$curso->nombre}}</option>
			@endforeach
	</select>

	{{Form::submit('Guardar',(['class'=>'btn btn-primary'])) }}

	{!!Form::close()!!}

	<a href="{{url('/alumnos')}}">Volver</a>

@endsection