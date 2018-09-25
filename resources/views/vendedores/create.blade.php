@extends('index')

@section('contenido')
	{!!Form::open(['action'=> 'VendedoresController@store',
                'method'=> 'POST']) !!}

  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('nombre','Nombre')}}
      {{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('dia','Día')}}
      {{Form::text('dia','',(['class'=>'form-control','placeholder'=>'Ingrese el Día']))}}
    </div>
  </div>

  {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
  <a href="{{url('/vendedores')}}" class="btn btn-success">Volver</a>

  {!!Form::close()!!}
@endsection