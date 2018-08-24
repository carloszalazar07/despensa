@extends('main')

@section('contenido')

	<h2 class="text-center">Editar Alumno</h2>

	{!!Form::open(['action'=> ['AlumnosController@update',$alumno->id],
							  'method'=> 'POST']) !!}

	<div class="form-group">
		{{Form::label('nombre', 'Nombre') }}
		{{Form::text('nombre',$alumno->nombre,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre',''])) }}
	</div>

	<div class="form-group">
		{{Form::label('edad', 'Edad') }}
		{{Form::text('edad',$alumno->edad,(['class'=>'form-control','placeholder'=>'Ingrese su Edad',''])) }}
	</div>

	<div class="form-group">
		{{Form::label('telefono', 'Telefono') }}
		{{Form::text('telefono',$alumno->telefono,(['class'=>'form-control','placeholder'=>'Ingrese su Telefono',''])) }}
	</div>

	{{Form::hidden('_method','PUT')}}

	{{Form::submit('Actualizar',(['class'=>'btn btn-success'])) }}

	<a href="{{url('/alumnos')}}" class="btn btn-primary">Volver</a>

	{!!Form::close()!!}



@endsection