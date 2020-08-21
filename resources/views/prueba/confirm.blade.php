@extends('plantilla.plantilla')

@section('titulo','Confirme la eliminacion del registro')

@section('contenido')
<div class="container py-5">
	<h1>¿Desea Eliminar el registro de {{$prueba->nom_ape}}?</h1>
	<form method="post" action="{{ route('prueba.destroy', $prueba->id)}}">
		@method('DELETE')
		@csrf
		<button type="submit" class="redondo btn btn-danger">
			<i class="fas fa-trash-alt"></i>Eliminar
		</button>
		<a class="redondo btn btn-secondary" href="{{route('cancelar')}}">
			<i class="fas fas-ban"><i>Cancelar
		</a>
	</form>
</div>
@endsection
