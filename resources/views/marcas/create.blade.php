@extends('index')

@section('contenido')

  <div class="card">
    <div class="card-header">
                  <h5 class="title">Agregar Nueva Marca</h5>
                </div>
    
      {!!Form::open(['action'=> 'MarcasController@store',
                  'method'=> 'POST']) !!}
    
    <div class="col-md-12">
      <div class="form-group">
        {{Form::label('nombre','Nombre')}}
        {{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese nombre de la Marca']))}}
      </div>
    </div>
        
    <div class="col-md-12">
      <div class="form-group">
        {{Form::label('vendedor','Vendedor')}}
        <select name="vendedor_id" id="" class="form-control">
            @foreach($vendedores as $vendedore)
            <option value="{{$vendedore->id}}">{{$vendedore->nombre}}</option>
            @endforeach
        </select>
      </div>
    </div>
  
    
    <div class="text-center">
      <div class="col-md-12">
        {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
        <button type="submit" class="btn btn-info fas fa-check"></button>
        <a href="{{url('/marcas')}}" class="btn btn-success fas fa-undo-alt"></a>
      </div>
    </div>
    
    {!!Form::close()!!}</div>

@endsection