@extends('index')

@section('contenido')

	<div class="card">
    <div class="card-header">
        {!!Form::open(['action'=> ['ProductosController@update',$producto->id],
                        'method'=> 'POST']) !!}
        
          <div class="form-group">
            {{Form::label('nombre','Nombre')}}
            {{Form::text('nombre',$producto->nombre,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
          </div>
        
          <div class="form-group">
            {{Form::label('precio_publico','Precio Publico')}}
            {{Form::text('precio_publico',$producto->precio_publico,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
          </div>
        
          <div class="form-group">
            {{Form::label('precio_costo','Precio Costo')}}
            {{Form::text('precio_costo',$producto->precio_costo,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
          </div>
        
          <div class="form-group">
            {{Form::label('categoria_id','Categoria')}}
            {{Form::text('categoria_id',$producto->categoria_id,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre','READONLY']))}}
          </div>
        
          <div class="form-group">
            {{Form::label('marca_id','Marca')}}
            {{Form::text('marca_id',$producto->marca_id,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre','READONLY']))}}
          </div>
        
        <br>
          {{Form::hidden('_method','PUT')}}
          <div class="text-center">
            <div class="col-md-12">
              <button type="submit" class="btn btn-info fas fa-check"></button>
              <a href="{{url('/productos')}}" class="btn btn-success fas fa-undo-alt"></a>
            </div>
          </div>
        
          {!!Form::close()!!}
      </div>
  </div>

@endsection