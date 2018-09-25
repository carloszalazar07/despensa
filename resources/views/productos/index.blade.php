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
            
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Precio Publico</th>
                  <th>Precio Costo</th>
                  <th>Categoria</th>
                  <th class="text-center">Acciones</th>
                  <th class="text-center">Eliminar</th>
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

	{{-- <br>
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Pagína de Productos</span>
      <h3 class="page-title">Bienvenido</h3>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          <h6 class="m-0">Productos <a href="{{url('/productos/create')}}" class="btn btn-primary">Crear</a>
          </h6>
        </div>
        <div class="card-body p-0 pb-3 text-center">
          <table class="table mb-0">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">Nombre</th>
                <th scope="col" class="hide-on-med-and-down">Marca</th>
                <th scope="col" class="border-0">Precio Publico</th>
                <th scope="col" class="border-0 hide-on-med-and-down">Precio Costo</th>
                <th scope="col" class="border-0 hide-on-med-and-down">Categoria</th>
                <th scope="col" class="border-0">Acciones</th>
                <th scope="col" class="border-0">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($productos as $producto)
                <tr>
                  <td>{{$producto->nombre}}</td>
                  <td class="hide-on-med-and-down">{{$producto->marca->nombre}}</td>
                  <td>$ {{$producto->precio_publico}}</td>
                  <td class="hide-on-med-and-down">$ {{$producto->precio_costo}}</td>
                  <td class="hide-on-med-and-down">{{$producto->categoria->nombre}}</td>
                  <td>
                  	<a href="{{route('productos.show',$producto->id)}}" class="btn btn-primary">Ver</a>
                  </td>
                  <td>
                    {!!Form::open(['route'=>['productos.destroy',$producto->id],'method'=>'DELETE'])!!}
                      <button class="btn btn-danger">Eliminar</button>
                    {!!Form::close()!!}
                  </td>
                </tr>
              @endforeach              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{$productos->render()}} --}}

@endsection