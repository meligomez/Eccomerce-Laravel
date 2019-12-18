@extends('layouts.app')
@section('content')

<div class="">
    <div class="vehicles-container">
        <div style="text-align:center;  font-weight:bold; margin-bottom: 30px;">
            <h1>Detalle del Vehículo</h1>
        </div>
    <form action="/vehicles" method="post">
        <input type="hidden" name="id" value="{{ $unVehiculo->id }}">
        <div class="fotos-vehiculo">
                <img class="foto-principal" src="{{ $unVehiculo->foto }}" alt="">
            <div class="fotos-int-ext">
            @if($unVehiculo->detalles)
                @forelse ($unVehiculo->detalles as $unaImagen)
                    <ul class="detalle-int-ext">
                        <li><img src="{{ $unaImagen->fotoInterior1 }}" alt="" style="width:150px;"></li>
                        <li><img src="{{ $unaImagen->fotoInterior2 }}" alt="" style="width:150px;"></li>
                        <li><img src="{{ $unaImagen->fotoExterior1 }}" alt="" style="width:150px;"></li>
                        <li><img src="{{ $unaImagen->fotoExterior2 }}" alt="" style="width:150px;"></li>
                    </ul>
                @empty
                    <img src="/img/noDisponible.png" alt="">
                @endforelse
            @endif
            </div>
        </div>
    <div class="contenedor-detalles">
        <p id="nombre" name="nombre" value="{{ $unVehiculo->nombre }}" class="name-vehicle">{{ $unVehiculo->nombre }}</p>
        <div class="detalles-tecnicos">

            <div class="selects">
                <p>Año:{{ $unVehiculo->anio }}</p>
                <p>Color:{{ $unVehiculo->color }}</p>
                <p>Tipo de combustible:{{ $unVehiculo->tipoCombustible }}</p>
            </div>

        </div>
        <div class="precio-venta">
            <p>Precio:{{ $unVehiculo->precio }}</p>
            <p>Disponibilidad: {{ $unVehiculo->stock }}</p>
            <div class="cantidad-btn">
                <p>Cantidad: </p>

                {{-- <input type="button" onclick="incrementar()" name="cant" class="btn-default" />
                <input type="button" onclick="decrementar()" name="cant" class="btn-default"/> --}}
                <button type="button" style="background-color:transparent; border-color:transparent;" onclick="incrementar()">
                        <img src="../img/add.svg" alt="carro-de-compras" style="width:10px;">
                      </button>
                      <button type="button" style="background-color:transparent; border-color:transparent;" onclick="decrementar()">
                            <img src="../img/subtract.svg" alt="carro-de-compras" style="width:10px;">
                      </button>
                <input type="number" name="cantidad" id="cantidad" value="0">
                {{-- <img src="../img/add.svg" alt="carro-de-compras" style="width:20px;">
                <img src="../img/subtract.svg" alt="carro-de-compras" style="width:20px;"> --}}
            </div>
            <h2>{{ $unVehiculo->descripcion }}</h2>
                    {{ csrf_field() }}
                    <input type="submit" value="AÑADIR AL CARRITO" onclick="alert('¡Se ha añadido al carrito correctamente!');">


        </div>
     </div>
    </form>
    </div>
</div>
@endsection
