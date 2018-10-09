@extends('index')
@section('contenido')
  
  <div class="col-12">
      <div class="card">
        <div class="card-header ">
          <div class="row">
            <div class="col-sm-6 text-left">
              <h5 class="card-category">Pagína de Productos</h5>
              <h2 class="card-title">Bienvenido</h2>
              <a href="{{url('productos/create')}}" class="btn btn-info fas fa-plus-circle "></a>
            </div>

            {{-- <div class="form-group">
              {!!Form::open(['action'=>'ProductosController@buscar','method'=>'POST']) !!}
                {{Form::text('busqueda','',(['class'=>'form-control']))}}
                
                {{Form::submit('Buscar',(['class'=>'btn btn-primary']))}}

              {!!Form::close() !!}

            </div> --}}

          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Producto</th>
                  <th>Marca</th>
                  <th>Precio Publico</th>
                  <th>Precio Costo</th>
                  <th>Categoria</th>
                  <th class="text-center text-info">Acciones</th>
                  <th class="text-center text-danger">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $producto)
                <tr>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->marca->nombre}}</td>
                  <td class="text-center">$ {{$producto->precio_publico}}</td>
                  <td class="text-center">$ {{$producto->precio_costo}}</td>
                  <td>{{$producto->categoria->nombre}}</td>
                  <td class="text-center">
                    <a href="{{route('productos.show',$producto->id)}}" class="btn btn-success fas fa-eye"></a>
                    <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-info fas fa-edit"></a>
                  </td>
                  <td class="text-center">
                    {!!Form::open(['route'=>['productos.destroy',$producto->id],'method'=>'DELETE'])!!}
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
      {{$productos->render()}}
  </div>

@endsection