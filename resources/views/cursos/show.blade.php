@extends('main')

@section('contenido')

	<h1 class="text-center"><strong>Curso: </strong>{{$curso->nombre}}</h1>

	<a href="{{url('/cursos')}}" class="btn btn-primary">Volver</a>

@endsection