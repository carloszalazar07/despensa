@extends('index')

@section('contenido')
	
	{!!Form::open(['action'=> 'FacturasController@store',
                  'method'=> 'POST']) !!}

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="">
					Nuevo Comprobantes
				</h2>
				
				
			</div>
			<factura></factura>
		</div>
	</div>

	{!!Form::close() !!}

@section('bottom')

	<script src="{{asset('components/facturas.tag')}}" type="riot/tag"></script>
	<script>
	@(document).ready(function(){
		riot.mount('factura');
	})
	</script>

@endsection