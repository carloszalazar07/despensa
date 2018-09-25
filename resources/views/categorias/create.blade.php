@extends('index')

@section('contenido')

  {!!Form::open(['action'=> 'CategoriasController@store',
                'method'=> 'POST']) !!}

  <div class="col-md-12">
  	<div class="form-group">
  	  {{Form::label('nombre','Nombre')}}
  	  {{Form::text('nombre','',(['class'=>'text-center form-control','placeholder'=>'Ingrese su Nombre','data-color'=>'blue']))}}
  	</div>
  </div>

  {{Form::submit('Guardar',(['class'=>'btn btn-primary'])) }}
  <a href="{{url('/categorias')}}" class="btn btn-warning">Volver</a>

  {!!Form::close()!!}



@endsection