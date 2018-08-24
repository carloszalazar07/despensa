@extends('main')

@section('contenido')

	<h1 class="text-center"><strong>Alumno: </strong>{{$alumno->nombre}}</h1>

	<h1 class="text-center"><strong>Edad: </strong>{{$alumno->edad}}</h1>

	<h1 class="text-center"><strong>Telefono: </strong>{{$alumno->telefono}}</h1>

	<a href="{{url('/alumnos')}}" class="btn btn-primary">Volver</a>
	{{-- <a href="{{route('alumnos.')}}"></a> --}}

@endsection