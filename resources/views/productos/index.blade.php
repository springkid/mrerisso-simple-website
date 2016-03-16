@extends('layout')

@section('content')
	<h1>All Productos</h1>

	@foreach ($productos as $producto)
		<div>
			<ul>
				<li>{{ $producto->nombre }}</li>
			</ul>
		</div>
	@endforeach

@stop