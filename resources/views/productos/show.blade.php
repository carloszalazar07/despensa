@extends('index')

@section('contenido')

<div class="card">
    <div class="card-header mb-5">
        <h5 class="card-category">Vista de Producto</h5>
        <h3 class="card-title"></h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <h2 class=" text-center"><strong>Producto: </strong><p class="text-success">{{$producto->nombre}}</p>
            </h2>
        </div>

        <div class="form-group">
            <h2 class=" text-center"><strong>Marca: </strong><p class="text-success">{{$producto->marca->nombre}}</p>
            </h2>
        </div>

        <div class="form-group">
            <h2 class=" text-center"><strong>Categroia: </strong><p class="text-success">{{$producto->categoria->nombre}}</p>
            </h2>
        </div>

        <div class="form-group">
            <h2 class=" text-center"><strong>Precio Publico: </strong><p class="text-success">$ {{$producto->precio_publico}}</p>
            </h2>
        </div>

        <div class="form-group">
            <h2 class=" text-center"><strong>Precio Costo: </strong><p class="text-success">$ {{$producto->precio_costo}}</p>
            </h2>
        </div>

        <div class="text-center">
          <div class="col-md-12">
            <a href="{{url('/productos')}}" class="btn btn-success fas fa-undo-alt"></a>
          </div>
        </div>

    </div>
</div>
	{{-- <br>
	<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Informacón de Producto</span>
      <h3 class="page-title">Bienvenido</h3>
    </div>
  </div>
	<div class="card card-small mb-4 pt-3">
       <div class="card-header border-bottom text-center">
         <div class="row">
         	<div class="col">
         		<h3 class="page-title"><strong>{{$producto->nombre}}</strong></h3>

            <h3 class="page-title"><strong>Precio: $</strong>{{$producto->precio_publico}}</h3>

            <h3 class="page-title"><strong>Precio Costo: $</strong>{{$producto->precio_costo}}</h3>

            <h3 class="page-title"><strong>Categoria: </strong>{{$producto->catergoria_id}}</h3>

            <h3 class="page-title"><strong>Marca: </strong>{{$producto->marca_id}}</h3>
            <br>
            <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary">Editar</a>

            <a href="{{url('/productos')}}" class="btn btn-warning">Volver</a>
         	</div>
         </div>
        
        </div>
    </div> --}}

@endsection