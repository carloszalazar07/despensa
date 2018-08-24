@extends('main')

@section('contenido')

	<h2 class="text-center">Editando Curso</h2>

	{!!Form::open(['action'=> ['CursosController@update',$curso->id],'method'=>'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre')}}
		{{Form::text('nombre',$curso->nombre,(['class'=>'form-control','placeholder'=>'Ingrese Nombre del Curso'])) }}
	</div>

	{{Form::hidden('_method','PUT')}}

	{{Form::submit('Guardar',(['class'=>'btn btn-primary'])) }}

	{!!Form::close()!!}

	<a href="{{url('/cursos')}}">Volver</a>

@endsection