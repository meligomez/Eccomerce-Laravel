@extends('layouts.app')
@section('content')
<div class="carrito-compra" style="margin-top: 6%;">
    <div class="titulo-vehiculo">
        <h1 class=title-carrito>Carrito De Compras</h1>
    </div>
    <div class="detalles-vehiculos">
    <ul>
        @forelse ($carrito as $unProducto)
            <li>
                <div class="imagen-auto">
                    <img src="{{ $unProducto->foto }}" style="width:10%" alt="">
                </div>
                <div class="detalle-auto">
                    <h1>{{ $unProducto->nombre }}, {{ $unProducto->idCP }}</h1>
                    <form action="/see-cart" method="post">
                        {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $unProducto->idCP }}">
                    <input type="submit" value="Eliminar" onclick="alert('¡Se ha eliminado correctamente!');>
                    </form>
                    <div class="primera-seccion">
                        <p>Descripcion: {{ $unProducto->descripcion }}</p>
                        <p>Año: {{ $unProducto->anio }}</p>
                        <p>Color: {{ $unProducto->color }}</p>
                    </div>
                    <div class="segunda-seccion">
                        <p>Tipo de Combustible: {{ $unProducto->tipoCombustible }}</p>
                        <p>Cantidad: {{ $unProducto->cantidad }}</p>
                        <h3>Total: {{ $unProducto->nombre }}</h3>
                    </div>
                </div>

            </li>
            @empty
            <h2>¡Aún no hay productos en el carrito!</h2>
        @endforelse
    </ul>
    </div>
</div>
@endsection
