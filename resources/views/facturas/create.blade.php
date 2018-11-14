@extends('index')

@section('contenido')
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<style>
  select { color:#27293d; }
  option { color:#ffffff; background-color:#27293d; }
  option:hover { color:#27293d; background-color:#ffffff; }
</style>

  <div class="col-12">
      <div class="card">
        <div class="card-header ">
          <div class="row">
            <div class="col-sm-6 text-left">
              <h5 class="card-category">Crear Facturacion</h5>
            </div>

          </div>
        </div>
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label for="" class="text-info">Producto</label>
                    <select name="" id="idInsumo" class="custom-select form-control">
                      @foreach($productos as $producto)
                          <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label for="" class="text-info">Cantidad</label>
                  <input type="text" id="Cantidad" placeholder="Cantidad" class="form-control" >
                </div>
              </div>
              
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label for="" class="text-info">Precio</label>
                  <input type="text" id="Precio_Compra" placeholder="Precio de Compra" class="form-control" value="{{$producto->precio_publico}}" >
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <button onclick="agregar()" type="button" class="btn btn-info">Agregar fila</button>
          </div>

          <div class="table-responsive" id="tablaDatos">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
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
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>
  </div>


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
@endsection
