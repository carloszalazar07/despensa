@extends('index')

@section('contenido')

  <div class="card">
    <div class="card-header">
                  <h5 class="title">Agregando Nuevo Vendedor</h5>
                </div>
    
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
        {{Form::text('dia','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
      </div>
    </div>
    
    <div class="text-center">
      <div class="col-md-12">
        {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
        <button type="submit" class="btn btn-info fas fa-check"></button>
        <a href="{{url('/vendedores')}}" class="btn btn-success fas fa-undo-alt"></a>
      </div>
    </div>
    
    {!!Form::close()!!}</div>

@endsection