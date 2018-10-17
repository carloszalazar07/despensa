@extends('index')

@section('contenido')
<div class="form-group">
  {!!Form::open(['action'=>'FacturasController@buscar','method'=>'POST']) !!}
    {{Form::text('busqueda','',(['class'=>'form-control']))}}
    
    {{Form::submit('Buscar',(['class'=>'btn btn-primary']))}}

            <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Producto</th>
                  <th>Marca</th>
                  <th>Precio Publico</th>
                  <th>Categoria</th>
                  <th class="text-center text-info">Agregar</th>
                  <th class="text-center text-danger">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $producto)
                <tr>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->marca->nombre}}</td>
                  <td class="text-center"><strong class="text-success">$</strong> {{$producto->precio_publico}}</td>
                  <td>{{$producto->categoria->nombre}}</td>
                  <td class="text-center">
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
      {{-- {{$productos->render()}} --}}
  </div>

  {!!Form::close() !!}

</div>

@endsection