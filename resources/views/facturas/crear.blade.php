@extends('index')

@section('contenido')

<style>
  select { color:#27293d; }
  option { color:#ffffff; background-color:#27293d; }
  option:hover { color:#27293d; background-color:#ffffff; }
</style>

	{!!Form::open(['action'=> 'FacturasController@store',
                  'method'=> 'POST']) !!}

  {{Form::label('producto','Producto')}}
    <select name="producto_id" class="custom-select form-control" id="productos">
      @foreach($productos as $producto)
      <option value="{{$producto->id}}">{{$producto->nombre}} ${{$producto->precio_publico}}</option>
      @endforeach
    </select>

    {{Form::label('cantidad', 'Cantidad')}}
    {{Form::text('cantidad','',(['class'=>'form-control']))}}

    {{Form::label('precio_publico', 'Precio')}}
    <input type="text" name="precio_publico" value="">
    

    <button type="submit">Calcular</button>

  {!!Form::close() !!}

@endsection