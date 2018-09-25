@extends('index')

@section('contenido')

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
          <div class="form-group">
            {{Form::label('categoria','Categoria')}}
            <select name="categoria_id" id="" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
          </div>
        </div>
        
          <div class="col-md-6 pl-md-1">
            <div class="form-group">
              {{Form::label('marca','Marca')}}
              <select name="marca_id" id="" class="form-control">
                  @foreach($marcas as $marca)
                  <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                  @endforeach
              </select>
            </div>
          </div>
      </div>
    </div>
    
    <div class="text-center">
      <div class="col-md-12">
        {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
        <a href="{{url('/productos')}}" class="btn btn-success">Volver</a>
      </div>
    </div>
    
    {!!Form::close()!!}</div>

@endsection