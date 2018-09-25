@extends('index')

@section('contenido')

  <div class="card">
    <div class="card-header">
      <h5 class="title">Editando Categoria</h5>
                </div>
        {!!Form::open(['action'=> ['CategoriasController@update',$categoria->id],
                        'method'=> 'POST']) !!}
        
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('nombre','Nombre')}}
              {{Form::text('nombre',$categoria->nombre,(['class'=>'form-control','placeholder'=>'Ingrese su Nombre']))}}
            </div>
          </div>

          {{Form::hidden('_method','PUT')}}
          <div class="text-center">
            <div class="col-md-12">
              {{-- {{Form::submit('Guardar',(['class'=>'btn btn-info'])) }} --}}
              <button type="submit" class="btn btn-info fas fa-check"></button>
              <a href="{{url('/categorias')}}" class="btn btn-success fas fa-undo-alt"></a>
            </div>
          </div>
        
          {!!Form::close()!!}
      </div>
  </div>

@endsection