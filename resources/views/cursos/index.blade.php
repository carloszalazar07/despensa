@extends('main')

@section('contenido')
	
	<h1 class="text-center">Todos Los Cursos Disponibles</h1>
	<a href="{{url('/cursos/create')}}" class="btn btn-primary">Agregar Curso</a>
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
		@foreach($cursos as $curso)
			<tr>
				<td>{{$curso->id}}</td>
				<td>{{$curso->nombre}}</td>
				<td>
					<a href="{{route('cursos.show',$curso->id)}}" class="btn btn-primary">Ver</a>

					<a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-success">Editar</a>
				</td>
				<td>
					{!!Form::open(['route'=>['cursos.destroy',$curso->id],'method'=>'DELETE'])!!}
						<button class=" btn btn-danger">Borrar</button>
					{!!Form::close()!!}
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>



@endsection