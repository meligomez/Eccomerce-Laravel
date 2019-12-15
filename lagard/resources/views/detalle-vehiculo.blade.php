@extends('layouts.app')
@section('content')

<div class="">
    <div class="vehicles-container">
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
        <div class="detalles-tecnicos">
            <h1>{{ $unVehiculo->nombre }}</h1>
        </div>
    </div>
</div>
@endsection
