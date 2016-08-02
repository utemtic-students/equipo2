@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->name }}</h3><hr><!--Se muestra el nombre del producto, traida de la BD, TABLA PRODUCT-->
				<img src="{{ $product->image }}" width="200"><!--Se plasma la imagen, es traida por URL-->
				<div class="product-info panel">
					<p>{{ $product->extract }}</p><!--Se plasma el estract, la info del producto-->
					<h3><span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span></h3><!--Se plasma el precio, traido de lA BD-->
					<p><!--FUNCION DE PHP PARA MOSTRAR DECIMALES-->
						<a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}">
							<i class="fa fa-cart-plus"></i> La quiero<!--Linea, para redireccionar a la compra, sino esta logiado, lo redirecciona al login-->
						</a>
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a><!--Linea, para redireccionar al detalle del producto-->
						<!--General las URL-->
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop

