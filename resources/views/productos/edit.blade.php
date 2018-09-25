@extends('index')

@section('contenido')

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
    {{Form::text('categoria_id',$producto->categoria_id,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
  </div>

  <div class="form-group">
    {{Form::label('marca_id','Marca')}}
    {{Form::text('marca_id',$producto->marca_id,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
  </div>

	<br>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }}
  <a href="{{url('/productos')}}" class="btn btn-success">Volver</a>

  {!!Form::close()!!}

@endsection