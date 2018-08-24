@extends('main')

@section('contenido')

	<h1 class="text-center"><strong>Materia: </strong>{{$materia->nombre}}</h1>

	<a href="{{url('/materias')}}" class="btn btn-primary">Volver</a>

@endsection