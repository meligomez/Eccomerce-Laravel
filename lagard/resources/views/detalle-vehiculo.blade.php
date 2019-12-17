@extends('layouts.app')
@section('content')

<div class="">
    <div class="vehicles-container">
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
        <p id="nombre" name="nombre" value="{{ $unVehiculo->nombre }}">{{ $unVehiculo->nombre }}</p>
        <div class="detalles-tecnicos">

            <div class="selects">
                Año:<select name="anio" id="anio">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                </select>
                Color:<select name="color" id="color">
                    <option value="Blanco">Blanco</option>
                    <option value="Negro">Negro</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Gris">Gris</option>
                </select>
                Tipo de Combustible:<select name="tipoCombustible" id="tipoCombustible">
                    <option value="Nafta">Nafta</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </div>
            <h2>{{ $unVehiculo->descripcion }}</h2>
            <h2>Disponibilidad: {{ $unVehiculo->stock }}</h2>

        </div>
        <div class="precio-venta">
            <p>Precio:{{ $unVehiculo->precio }}</p>
            <div class="cantidad-btn">
                <h2>Cantidad: </h2>
                <input type="number" name="cantidad" id="cantidad" value="0">
                {{-- <input type="button" onclick="incrementar()" name="cant" class="btn-default" />
                <input type="button" onclick="decrementar()" name="cant" class="btn-default"/> --}}
                <button type="button" style="background-color:transparent; border-color:transparent;" onclick="incrementar()">
                        <img src="../img/add.svg" alt="carro-de-compras" style="width:20px;">
                      </button>
                      <button type="button" style="background-color:transparent; border-color:transparent;" onclick="decrementar()">
                            <img src="../img/subtract.svg" alt="carro-de-compras" style="width:20px;">
                      </button>
                {{-- <img src="../img/add.svg" alt="carro-de-compras" style="width:20px;">
                <img src="../img/subtract.svg" alt="carro-de-compras" style="width:20px;"> --}}

                    {{ csrf_field() }}
                    <input type="submit" value="AÑADIR AL CARRITO" onclick="alert('¡Se ha añadido al carrito correctamente!');">
            </div>

        </div>
     </div>
    </form>
    </div>
</div>
@endsection
