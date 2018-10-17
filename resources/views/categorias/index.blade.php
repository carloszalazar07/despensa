@extends('index')

@section('contenido')
  
  <div class="col-12">
    <div class="card">
      <div class="card-header ">
        <div class="row">
          <div class="col-sm-6 text-left">
            <h5 class="card-category">Pagína de Categorias</h5>
            <h2 class="card-title">Bienvenido</h2>
            <a onClick="mostrar('nuevo')" class="btn btn-info fas fa-plus-circle"></a>
          </div>
        </div>
      </div>   

      <div id="nuevo" style="display:none;">
        <div class="card-header">
          <h5 class="title">Agregar Nueva Categoria</h5>
        </div>
    
          {!!Form::open(['action'=> 'CategoriasController@store','method'=> 'POST']) !!}
    
          <div class="text-center">
            <div class="col-md-12">
              <div class="form-group">
                {{Form::label('nombre','Nombre')}}
                {{Form::text('nombre','',(['class'=>'form-control text-center','placeholder'=>'Ingrese su Nombre']))}}
              </div>
            </div>
          </div>

        <div class="text-center">
          <div class="col-md-12">
            <button type="submit" class="btn btn-info fas fa-check"></button>
            <a href="{{url('/categorias')}}" class="btn btn-success fas fa-undo-alt"></a>
          </div>
        </div>
      </div>

      {!!Form::close() !!}

      <div class="card-body">
        <div class="table-responsive ps-scrolling">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Nombre</th>
                <th class="text-center text-info">Acciones</th>
                <th class="text-center text-danger">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categorias as $categoria)
              <tr>
                <td>{{$categoria->nombre}}</td>
                <td class="text-center">
                  <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-info fas fa-edit"></a>
                </td>
                <td class="text-center">
                  {!!Form::open(['route'=>['categorias.destroy',$categoria->id],'method'=>'DELETE'])!!}
                  <button class="btn btn-danger fas fa-trash-alt"></button>
                  {!!Form::close()!!}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>
    </div>
  </div>

<script>

function mostrar(id)
{
  if (document.getElementById)
  {
    var el = document.getElementById(id);
    el.style.display = (el.style.display == 'none') ? 'block' : 'none';
  }
}
</script>

@endsection