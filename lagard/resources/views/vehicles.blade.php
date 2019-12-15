@extends('layouts.app')
@section('content')
<div class="contenedor">
<div class="vehicles-container">
    <div class="lanzamientos">
        <h2>¿Conoces lo que está por venir?
            Podés reservar y ser el primero en tenerlo.
        </h2>
        <img src="/img/mustang.png" alt="" class="img-vehiculo"  style="width:700px;">
        <img src="" alt="" class="img-vehiculo"  style="width:55px;">
        <video src="/img/mustang.mp4" width=700px  height=400px  autoplay muted loop>
    </div>
    <div class="lo-nuevo">
            <div class="titulo-loNuevo">
              <h2>Lo Nuevo</h2>
            </div>
            <div class="secciones">
                <a href=""></a>
                <a href=""></a>
                <a href=""></a>
            </div>
            {{-- <div class="productos">
             @foreach($vehiculos as $unVehiculo)
                <div class="vehiculo-item">
                    <div class="foto-vehiculo">
                        <img src="{{ $unVehiculo->foto }}" alt="" class="img-vehiculo"  style="width:600px; height: 320px;">
                    </div>
                        <br>
                    <div class="titulo-vehiculo" style="font-weight:bold">
                          {{ $unVehiculo->nombre }}
                    </div>
                       <br>
                    <div class="descripcion-vehiculo">
                          {{ $unVehiculo->descripcion }}
                    </div>
                </div>
             @endforeach
            </div> --}}

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item py-5 active">
                 <div class="row">
                    <div class="col-sm-6">slide 1</div>
                    <div class="col-sm-6">slide 2</div>
                </div>
            </div>
            <div class="carousel-item py-5">
                <div class="row">
                            @foreach($vehiculos as $unVehiculo)

                            <div class="col-sm-6">
                                <div class="vehiculo-item">
                                 <div class="foto-vehiculo">
                                    <img src="{{ $unVehiculo->foto }}" alt="" class="img-vehiculo"  style="width:600px; height: 320px;">
                                 </div>
                                    <br>
                                <div class="titulo-vehiculo" style="font-weight:bold">
                                      {{ $unVehiculo->nombre }}
                                    </div>
                                   <br>
                                <div class="descripcion-vehiculo">
                                      {{ $unVehiculo->descripcion }}
                                </div>
                                <div>
                                   <a href="/vehicles/{{ $unVehiculo->id }}" class="btn">Ver detalle</a>
                                </div>
                            </div>
                        </div>

                         @endforeach
                    </div>
            </div>
            </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



    </div>
</div>
</div>
@endsection
