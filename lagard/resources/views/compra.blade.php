@extends('layouts.app')
@section('content')
<div class="datos-compra-general">
    <form action="" method="post">
        <div class="contenedor-compra" style="overflow: hidden;">
            <div class="primer-seccion-compra" style="float:left;">
                <div class="datos-comprador" >
                    <p> Nombre: {{ $user->email }}</p>

                </div>
                <div class="datos-medio-pago">
                    <ul>
                        <li>Medio de Pago:</li>

                    </ul>
                </div>
            </div>
            <div class="segunda-seccion-compra" style="float:left;">
                    <ul class="cart">
                            @forelse ($carrito as $unProducto)
                            <input type="hidden" name="id" value="{{ $unProducto->idCP }}">
                                <li>
                                    <div class="imagen-auto" style="float:left; text-align: center;">
                                        <img src="{{ $unProducto->foto }}" style="width:350px" alt="">
                                    </div>
                                    <div class="detalle-auto"  style="float:left; width:50%;">
                                        <div style="overflow:hidden;">
                                            <h1 style="float:left;">{{ $unProducto->nombre }}, {{ $unProducto->idCP }}</h1>

                                        </div>
                                        <div class="primera-seccion">
                                            <p>Descripcion: {{ $unProducto->descripcion }}</p>
                                            <p>Año: {{ $unProducto->anio }}</p>
                                            <p>Color: {{ $unProducto->color }}</p>
                                        </div>
                                        <div class="segunda-seccion">
                                            <p>Tipo de Combustible: {{ $unProducto->tipoCombustible }}</p>
                                            <p>Cantidad: {{ $unProducto->cantidad }}</p>
                                            <h3>Total Unidad: {{ $unProducto->precio }}</h3>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                <h2>¡Aún no hay productos en el carrito!</h2>
                            @endforelse
                        </ul>
            </div>

        </div>
    <input type="submit" value="Finalizar Compra">
    </form>
</div>


@endsection
