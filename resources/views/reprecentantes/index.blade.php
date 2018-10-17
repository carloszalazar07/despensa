@extends('index')
@section('contenido')

	<div class="col-12">
      <div class="card">
        <div class="card-header ">
          <div class="row">
            <div class="col-sm-6 text-left">
              <h5 class="card-category">Pagína de reprecentantes</h5>
              <h2 class="card-title">Bienvenido</h2><a href="{{url('reprecentantes/create')}}" class="btn btn-info fas fa-plus-circle"></a>
              
            </div>
            
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive ps-scrolling">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>Nombre</th>
                  <th>Día</th>
                  <th class="text-center">Acciones</th>
                  <th class="text-center">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reprecentantes as $repre)
                <tr>
                  <td>{{$repre->nombre}}</td>
                  <td>{{$repre->dia}}</td>
                  <td class="text-center">
                    <a href="{{route('reprecentantes.edit',$repre->id)}}" class="btn btn-info fas fa-edit"></a>
                  </td>
                  <td class="text-center">
                    {!!Form::open(['route'=>['reprecentantes.destroy',$repre->id],'method'=>'DELETE'])!!}
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

@endsection