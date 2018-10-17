@extends('index')

@section('contenido')

<style>
  select { color:#344675; }
  option { color:#ffffff; background-color:#344675; }
  option:hover { color:#344675; background-color:#ffffff; }
</style>

  <div class="card">
    <div class="card-header">
                  <h5 class="title">Agregar Nuevo Producto</h5>
                </div>
    
      {!!Form::open(['action'=> 'ProductosController@store',
                  'method'=> 'POST']) !!}
    
    <div class="col-md-12">
      <div class="form-group">
        {{Form::label('nombre','Nombre')}}
        {{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
      </div>
    </div>
    
    <div class="col-md-12">
      <div class="form-group">
        {{Form::label('precio_publico','Precio Publico')}}
        {{Form::text('precio_publico','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
      </div>
    </div>
    
    <div class="col-md-12">
      <div class="form-group">
        {{Form::label('precio_costo','Precio Costo')}}
        {{Form::text('precio_costo','',(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 pr-md-1">
          {{Form::label('categoria','Categoria')}}
          <select name="categoria_id" class="custom-select form-control">
            @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
          </select> 
        </div>
        
          <div class="col-md-6 pr-md-1">
          {{Form::label('marca','Marca')}}
          <select name="marca_id" class="custom-select form-control">
            @foreach($marcas as $marca)
              <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach
          </select> 
        </div>
      </div>
    </div>
    
    <div class="text-center">
      <div class="col-md-12">
        {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
        <button type="submit" class="btn btn-info fas fa-check"></button>
        <a href="{{url('/productos')}}" class="btn btn-success fas fa-undo-alt"></a>
      </div>
    </div>
    
    {!!Form::close()!!}</div>

@endsection