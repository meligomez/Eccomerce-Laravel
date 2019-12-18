@extends('layouts.app')
@section('content')
<div class="contenedor">
<div class="vehicles-container">
    <div class="comment">
            <h2 style="padding-left: 8%;">¿Conoces lo que está por venir?</h2>
            <h2 style="padding-left: 16%;">Podés reservar y ser el primero en tenerlo.</h2>
    </div>
    <div class="lanzamientos">

        <img src="/img/mustang.png" alt="" class="img-vehiculo"  style="width:48%;">
        <video src="/img/mustang.mp4" width=43%  height=50%  autoplay muted loop>
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

 {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
</div> --}}



<div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                @foreach($vehiculos->chunk(3) as $unVehiculo)
                  <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="row">
                    @foreach($unVehiculo as $unItem)
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image" >
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{{ $unItem->anio }}</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{ $unItem->foto }}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">

                                <h5 style="color:#252545">{{ $unItem->nombre }}</h5>

                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> Combustible: <i class="fa fa-comments-o"></i> {{ $unItem->tipoCombustible }}</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>{{ $unItem->descripcion }}</p>
                            </div>
                            <div class="mt"> <a href="/vehicles/{{ $unItem->id }}" class="btn bg-blue-ui white read">Ver detalle</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                    <!--.row-->
                  </div>
                  @endforeach


                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>





    </div>
</div>
</div>
@endsection
