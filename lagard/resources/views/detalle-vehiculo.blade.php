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
                <ul class="detalle-int-ext">
                        <li> <img src="/img/noDisponible.png" alt=""style="width:100px;" ></li>
                        <li><img src="/img/noDisponible.png" alt=""style="width:100px;" ></li>
                        <li><img src="/img/noDisponible.png" alt=""style="width:100px;" ></li>
                        <li><img src="/img/noDisponible.png" alt=""style="width:100px;" ></li>
                    </ul>

                @endforelse
            @endif
            </div>
        </div>
    <div class="contenedor-detalles" style="height: 562px;">
        <p id="nombre" name="nombre" value="{{ $unVehiculo->nombre }}" class="name-vehicle">{{ $unVehiculo->nombre }}</p>
        <div class="detalles-tecnicos">

            <div class="selects">
                <p>Año:{{ $unVehiculo->anio }}</p>
                <p>Color:{{ $unVehiculo->color }}</p>
                <p>Tipo de combustible:{{ $unVehiculo->tipoCombustible }}</p>
            </div>

        </div>
        <div class="precio-venta">
            <p>Precio: $ {{ $unVehiculo->precio }}</p>
            <p>Disponibilidad: {{ $unVehiculo->stock }}</p>

            <h2 style="margin-top: 10%;">{{ $unVehiculo->descripcion }}</h2>
                    {{ csrf_field() }}

        <div  style="text-align:center; margin-top: 12%;">
                <input type="submit" value="AÑADIR AL CARRITO" onclick="alert('¡Se ha añadido al carrito correctamente!');">
      </div>


        </div>
     </div>
    </form>
    </div>
</div>
@endsection
