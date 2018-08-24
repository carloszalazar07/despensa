@extends('main')

@section('contenido')

	<h1 class="text-center">Todas Los Materias Disponibles</h1>
	<a href="{{url('/materias/create')}}" class="btn btn-primary">Agregar Curso</a>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acciones</th>
				<th>Eliminar</th>
			</tr>
		</thead>

		<tbody>
		@foreach($materias as $materia)
			<tr>
				<td>{{$materia->id}}</td>
				<td>{{$materia->nombre}}</td>
				<td>
					<a href="{{route('materias.show',$materia->id)}}" class="btn btn-primary">Ver</a>

					<a href="{{route('materias.edit',$materia->id)}}" class="btn btn-success">Editar</a>
				</td>
				<td>
					{!!Form::open(['route'=>['materias.destroy',$materia->id],'method'=>'DELETE'])!!}
						<button class=" btn btn-danger">Borrar</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>


@endsection