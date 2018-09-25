@extends('index')

@section('contenido')

	<div class="card">
    <div class="card-header">
        {!!Form::open(['action'=> ['MarcasController@update',$marca->id],
                        'method'=> 'POST']) !!}
        
          <div class="form-group">
            {{Form::label('nombre','Nombre')}}
            {{Form::text('nombre',$marca->nombre,(['class'=>'form-control']))}}
          </div>
        
          <div class="form-group">
            {{Form::label('vendedor_id','Vendedor')}}
            {{Form::text('vendedor_id',$marca->vendedor_id,(['class'=>'form-control','READONLY']))}}
          </div>
        
        <br>
          {{Form::hidden('_method','PUT')}}
          <div class="text-center">
            <div class="col-md-12">
              <button type="submit" class="btn btn-info fas fa-check"></button>
              <a href="{{url('/marcas')}}" class="btn btn-success fas fa-undo-alt"></a>
            </div>
          </div>
        
          {!!Form::close()!!}
      </div>
  </div>

@endsection