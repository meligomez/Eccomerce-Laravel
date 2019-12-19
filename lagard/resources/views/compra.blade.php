@extends('layouts.app')
@section('content')
<div class="datos-compra-general">
    <form action="/compra" method="post">
            {{ csrf_field() }}
        <div class="contenedor-compra" style="overflow: hidden;">
            <div class="primer-seccion-compra" style="float:left;">
                <div class="datos-comprador" >
                    <p> Nombre: {{ $user->email }}</p>
                    <p></p>
                </div>
                <div class="datos-medio-pago">
                    <ul>
                        <li>Medio de Pago:</li>
                        <select name="medioPago" id="medioPago" onchange="verMedioPago()">
                            <option value="EFEC">Efectivo</option>
                            <option value="DEB">Tarjeta de Débito</option>
                            <option value="CRED">Tarjeta de Crédito</option>
                        </select>
                        <div id="area" style="display: none;">
                                <div class="master-card">
                                  <div class="card">
                                    <div  id="titleCard" class="title"></div>
                                    <div class="input-number"><span class="title-number">CARD NUMBER</span>
                                        <div class="inputs-number">
                                            <input  class="inputs-number2" type="text" maxlength="4" name="number-card1" placeholder="0000" "/>
                                            <input  class="inputs-number2" type="text" maxlength="4" name="number-card2" placeholder="0000""/>
                                            <input class="inputs-number2" type="text" maxlength="4" name="number-card3" placeholder="0000" "/>
                                            <input class="inputs-number2"  type="text" maxlength="4" name="number-card4" placeholder="0000" "/>
                                      </div>
                                      <div class="selects-date selecters">
                                        <div class="day-select">
                                           <span>Vencimiento:</span>
                                          </select>
                                        </div>
                                        <div class="year-select">
                                            <input name="vencimiento" type="month" id="start" name="start"
                                                min="2018-03" value="2019-12" style="font-size:0.5rem; width: 70%">
                                           </div>
                                        </div>
                                    </div>
                                    <div class="mark-gold">
                                      <div class="round">
                                        <div class="circles">
                                          <div class="circle-1"> </div>
                                          <div class="circle-2"> </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="name"><span>{{ $user->name }}</span></div>
                                  </div>
                                  <div class="card-back">
                                    <div class="tire"></div>
                                    <div class="secret-area">
                                      <input  class="inputs-number2" type="text" maxlength="3" name="number-card5" placeholder="000""/>
                                    </div>
                                    <div class="chip-card"></div>
                                  </div>
                                </div>
                                <div class="button-sent">
                                        <button id="back">VOLTAR</button>
                                        <button id="continue">CONTINUAR</button>
                                </div>
                              </div>




                    </ul>
                </div>
            </div>
            <div class="segunda-seccion-compra" style="float:left;">
                    <ul class="cart" >
                            @forelse ($carrito as $unProducto)
                            <input type="hidden" name="id" value="{{ $unProducto->idCP }}">
                                <li>
                                    <div class="imagen-auto" style="float:left; text-align: center;">
                                        <img src="{{ $unProducto->foto }}" style="width:350px" alt="">
                                    </div>
                                    <div class="detalle-auto"  style="float:left; width:40%;">
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
                                            <p id="precio" value="{{$unProducto->precio }}">Total Unidad: {{ $unProducto->precio }}</p>

                                        </div>
                                    </div>
                                </li>
                                @empty
                                <h2>¡Aún no hay productos en el carrito!</h2>
                            @endforelse
                        </ul>
            </div>
        </div>
        <p id="total" ></p>
        <input id="totalHidden" type="hidden" name="totalHidden">
    <input type="submit" value="Finalizar Compra">
    </form>
</div>


@endsection
