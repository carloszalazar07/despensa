@extends('main')

@section('contenido')

	<h2 class="text-center">Editando Materia</h2>
	
	{!! Form::open(['action'=>['MateriasController@update',$materia->id], 'method'=>'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre') }}
		{{Form::text('nombre',$materia->nombre,(['class'=>'form-control','placeholder'=>'Ingrese Nombre de la Materia']))}}
	</div>

	{{Form::hidden('_method','PUT')}}

	{{Form::submit('Actualizar',(['class'=>'btn btn-success'])) }}

	{!!Form::close() !!}

	<a href="{{url('/materias')}}">Volver</a>

@endsection