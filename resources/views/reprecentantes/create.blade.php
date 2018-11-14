@extends('index')

@section('contenido')

<style>
  select { color:#27293d; }
  option { color:#ffffff; background-color:#27293d; }
  option:hover { color:#27293d; background-color:#ffffff; }
</style>

  <div class="card">
    <div class="card-header">
                  <h5 class="title">Agregando Nuevo Vendedor</h5>
                </div>
    
      {!!Form::open(['action'=> 'ReprecentantesController@store',
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
    
    <div class="col-md-12">
      {{Form::label('producto','Producto')}}
      <select name="producto_id" class="custom-select form-control">
        @foreach($productos as $producto)
          <option value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
      </select>
    </div>
    
    <div class="text-center">
      <div class="col-md-12">
        {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
        <button type="submit" class="btn btn-info fas fa-check"></button>
        <a href="{{url('/reprecentantes')}}" class="btn btn-success fas fa-undo-alt"></a>
      </div>
    </div>

    
    {!!Form::close()!!}</div>

@endsection