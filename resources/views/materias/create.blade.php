@extends('main')

@section('contenido')

	<h2 class="text-center">Nueva Materia</h2>
	
	{!! Form::open(['action'=>'MateriasController@store', 'method'=>'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre') }}
		{{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese Nombre de la Materia']))}}
	</div>

	{{Form::submit('Guardar',(['class'=>'btn btn-primary'])) }}

	{!!Form::close() !!}

	<a href="{{url('/materias')}}">Volver</a>

@endsection