<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{'/assets/css/bootstrap.min.css'}}" rel="stylesheet" />
	<link href="{{'/assets/css/black-dashboard.css'}}" rel="stylesheet" />
	<link href="{{'/assets/demo/demo.css'}}" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

	<div class="form-group">
		<label for="" class="text-info">Producto</label>
			<select name="" id="idInsumo">
    			@foreach($productos as $producto)
      				<option value="{{$producto->id}}">{{$producto->nombre}}</option>
  				@endforeach
    		</select>
  	</div>

  	<div class="form-group">
    	<label for="" class="text-info">Cantidad</label>
    	<input type="text" id="Cantidad" placeholder="Cantidad" class="form-control" />
  	</div>
  	
  	<div class="form-group">
    	<label for="" class="text-info">Precio</label>
    	<input type="text" id="Precio_Compra" placeholder="Precio de Compra" class="form-control" value="" />
  	</div>
  	
  	<button onclick="agregar()" type="button" class="btn btn-info btn-sm">Agregar fila</button>

	<table id="tablaDatos" class="table table-bordered">

  		<thead>
    		<tr>
      			<td class="text-success">Numero del Insumo</td>
      			<td class="text-success">Insumo</td>
      			<td class="text-success">Cantidad</td>
      			<td class="text-success">Subtotal</td>
    		</tr>
  		</thead>

  		<tbody id="tbodydatos"></tbody>
  
	  	<tfoot>
	    	<tr>
	      		<td colspan="3"></td>
	      		<td><h4><input type="text" id="total" disabled class="form-control text-success"  /></h4></td>
	    	</tr>
	  	</tfoot>
	
	</table>

	<script src="{{'/js/jquery-3.3.1.min.js'}}"></script>
	<script src="{{'/assets/js/core/popper.min.js'}}"></script>
	<script src="{{'/assets/js/core/bootstrap.min.js'}}"></script>
	<script src="{{'/assets/js/plugins/perfect-scrollbar.jquery.min.js'}}"></script>
	<script src="{{'/assets/demo/demo.js'}}"></script>
	<script src="{{'/assets/js/plugins/chartjs.min.js'}}"></script>
	<script src="{{'/assets/js/plugins/bootstrap-notify.js'}}"></script>
	{{-- <script src="{{'/assets/js/black-dashboard.min.js?v=1.0.0'}}" type="text/javascript"></script> --}}

	  <script>
    var cont = 0;
	var total = 0;

	function agregar() {

	  var cantidad = $("#Cantidad").val();
	  var IDInsumo = $("#idInsumo").val();
	  var Precio_Compra = $("#Precio_Compra").val();
	  var subtotal = Precio_Compra * cantidad;
	  total = subtotal + total;
	  console.info(total);
	  $("#total").val(total);

	  // quitar la inserción de aquí y mover abajo

	  var id = "";
	  var cantidad1 = 0;
	  var precio1 = 0;
	  
	  // variable para indicar si se añadió fila en el bucle
	  var encontrado = false;

	  $("#tablaDatos tbody tr").each(function(i, e) {
	    var tr = $(e);
	    var td = $(e).find("td").eq(1);

	    id = $(td).find("input").eq(0).val();
	    cantidad1 = $(td).find("input").eq(1).val();
	    precio1 = $(td).find("input").eq(2).val();

	    var fila = "";

	    if (id == IDInsumo) {
	      // si se encontró un ID: encontrado!
	      encontrado = true;
	      
	      var tcan = parseInt(cantidad) + parseInt(cantidad1);
	      var tpre = parseFloat(precio1) + parseFloat(Precio_Compra);

	      tr.remove();
	      cont++;
	      fila = '<tr class="selected" id="fila' + cont + '" onclick="seleccionar(this.id)"><td>' + cont + '</td><td><input type="hidden" value="' + IDInsumo + '"><input type="hidden" value="' + tcan + '"><input type="hidden" value="' + tpre + '">' + IDInsumo + '</td><td>' + tcan + '</td><td>' + tpre + '</td></tr>';
	      $('#tbodydatos').append(fila);
	      reordenar();
	      return false;
	    }
	  });
	  
	  // si es el primer elemento o no se encontró ID, se añade una neuva fila
	  // código de arriba movido aquí cambiando un poco la condición
	  // realmente el `cont == 0` ya no hace falta, porque si la tabla está vacía encontrado será false
	  if (cont == 0 || !encontrado) {
	    cont++;
	    fila = '<tr class="selected" id="fila' + cont + '" onclick="seleccionar(this.id)"><td>' + cont + '</td><td><input type="hidden" value="' + IDInsumo + '"><input type="hidden" value="' + cantidad + '"><input type="hidden" value="' + Precio_Compra + '">' + IDInsumo + '</td><td>' + cantidad + '</td><td>' + subtotal + '</td></tr>';
	    $('#tbodydatos').append(fila);
	    // tenemos que reordenar
	    reordenar();
	    return;
	  }
	}

	function reordenar() {
	}
  </script>
<body>
	
</body>
</html>