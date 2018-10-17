@extends('index')

@section('contenido')

	<div class="col-12">
      <div class="card">
        <div class="card-header ">
          <div class="row">
            <div class="col-sm-6 text-left">
              <h5 class="card-category">Pagína de Productos</h5>
              <h2 class="card-title">Bienvenido</h2>
              <a href="{{url('facturas/create')}}" class="btn btn-info fas fa-plus-circle "></a>
            </div>

          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Numero De Factura</th>
					<th>Producto</th>
					<th>Precio Unitario</th>
					<th>Cantidad</th>
					<th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
            		<td>001</td>
					<td>Coca Cola 2L</td>
					<td>$65</td>
					<td>2</td>
					<td>130</td>
                </tr>
              </tbody>
            </table>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>
      {{-- {{$productos->render()}} --}}
  </div>
	{{-- <table>
		<thead>
			<tr>
				<th>Numero De Factura</th>
				<th>Producto</th>
				<th>Precio Unitario</th>
				<th>Cantidad</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>001</td>
				<td>Coca Cola 2L</td>
				<td>$65</td>
				<td>2</td>
				<td>130</td>
			</tr>
		</tbody>
	</table> --}}

@endsection