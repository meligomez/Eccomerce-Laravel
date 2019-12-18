@extends('layouts.app')
@section('content')
<div class="carrito-compra" style="margin-top: 6%;">
    <div class="titulo-vehiculo">
        <h1 class=title-carrito>Carrito De Compras</h1>
    </div>
    <div class="detalles-vehiculos"  style="overflow:hidden;">
    <ul>
        @forelse ($carrito as $unProducto)
            <li>
                <div class="imagen-auto" style="float:left; text-align: center;">
                    <img src="{{ $unProducto->foto }}" style="width:350px" alt="">
                </div>
                <div class="detalle-auto"  style="float:left; width:50%;">
                    <div style="overflow:hidden;">
                        <h1 style="float:left;">{{ $unProducto->nombre }}, {{ $unProducto->idCP }}</h1>
                        <form "action="/see-cart" method="post">
                                {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $unProducto->idCP }}">
                        <input style="float:right;" type="submit" value="Eliminar" onclick="alert('¡Se ha eliminado correctamente!');">
                        </form>
                    </div>
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
