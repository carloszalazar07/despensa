@extends('main')

@section('contenido')

	<h2 class="text-center">Nuevo Curso</h2>

	{!!Form::open(['action'=> 'CursosController@store','method'=>'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre')}}
		{{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese Nombre del Curso'])) }}
	</div>

	<select name="matricula_id" id="" class="form-control">
			@foreach($matriculas as $matricula)
			<option value="{{$matricula->id}}">{{$matricula->alumno}}</option>
			@endforeach
	</select>

	{{Form::submit('Guardar',(['class'=>'btn btn-primary'])) }}

	{!!Form::close()!!}

	<a href="{{url('/cursos')}}">Volver</a>

@endsection