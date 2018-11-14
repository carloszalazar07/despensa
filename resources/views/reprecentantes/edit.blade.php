@extends('index')

@section('contenido')

  <div class="card">
    <div class="card-header">
      <h5 class="title">Editando Categoria</h5>
                </div>
        {!!Form::open(['action'=> ['ReprecentantesController@update',$reprecentante->id],
                        'method'=> 'POST']) !!}
        
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('nombre','Nombre')}}
              {{Form::text('nombre',$reprecentante->nombre,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('dia','Día')}}
              {{Form::text('dia',$reprecentante->dia,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
            </div>
          </div>

          {{Form::label('producto_id', 'Producto')}}
          {{Form::text('producto_id',)}}

          {{Form::hidden('_method','PUT')}}
          <div class="text-center">
            <div class="col-md-12">
              {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
              <button type="submit" class="btn btn-info fas fa-check"></button>
              <a href="{{url('/reprecentantes')}}" class="btn btn-success fas fa-undo-alt"></a>
            </div>
          </div>
        
          {!!Form::close()!!}
      </div>
  </div>

@endsection