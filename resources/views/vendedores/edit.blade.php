@extends('index')

@section('contenido')

	{!!Form::open(['action'=> ['VendedoresController@update',$vendedore->id],
                'method'=> 'POST']) !!}

  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('nombre','Nombre')}}
      {{Form::text('nombre',$vendedore->nombre,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('dia','Día')}}
      {{Form::text('dia',$vendedore->dia,(['class'=>'form-control','placeholder'=>'¿Que Días viene?']))}}
    </div>
  </div>
	<br>
  {{Form::hidden('_method','PUT')}}
  <div class="col-md-12">
    {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
    <a href="{{url('/vendedores')}}" class="btn btn-success">Volver</a>
  </div>

  {!!Form::close()!!}

@endsection