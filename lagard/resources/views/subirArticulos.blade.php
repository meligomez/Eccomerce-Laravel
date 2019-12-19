@section('content')

@extends('layouts.app')
<form action="POST" method="/editarPerfil"  enctype="multipart/form-data">
<div class="contenedorSubirVehicles">
    <div class="contenedorDeDatosSV">
        <div class="fotoYNombreSV">
            <div class="fotoSV"><img class="estaEsLaFotoSV" src="../img/autoec.jpg" alt="perfil"></div>
            <div class="nombreSV"><h1 class="hNombreAuto"> <input type="text"></div></div>


        <div class="infoYTituloSV">
            <div class="tituloSV"> <h1 class="subirAutoSV"> Añadir Producto :</h1></div>
            <div class="datosDelAutoSV">
                <div class="tituloInfoSV"> <h1 class="infoSubirAutoSV">Datos Del Vehiculo :</h1>
                <div class="infomacionParaSubirSV" style="float:left">
                    <ul >
                    <li class="liDatosEspacioSV"> <label for="">- Color :</label> <input type="text"  name="color"  ></li>

                    <li class="liDatosEspacioSV"> <label for=""></label>- Año :<input type="number"  name="año" ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Tipo Combustible :</label> <input type="text" name="combustible"  ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Precio :</label> <input type="number" name="password" ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Foto : </label> <input type="file" name="foto"></li>
                    
                    <li class="liDatosEspacioSV"> <label for="">- foto interior 1 :</label> <input type="file" name="foto">  </li>
                    
                    <li class="liDatosEspacioSV"> <label for="">- foto interior 2 :</label> <input type="file" name="foto">  </li>
                   
                    <li class="liDatosEspacioSV"> <label for="">- foto exterior 1 :</label> <input type="file" name="foto">  </li>
                  
                    <li class="liDatoSinEspacio"> <label for="">- foto exterior 2 :</label> <input type="file" name="foto">  </li>
               
               
                </ul>
                <div class="botonesSubirAutosSV">
                        <input class="botonGuardarSV"  type="submit" value="Guardar" >
                        <a  class="botonEnviarSV" href="{{ route('home') }}">volver</a>

                        </div>
                <!--  <div class="fotos-detalle" style="float:left">
                        <label for="">- Foto Interior 1: </label> <input type="file" name="foto">
                        <label for="">- Foto Interior 2: </label> <input type="file" name="foto">
                        <label for="">- Foto Exterior 1: </label> <input type="file" name="foto">
                        <label for="">- Foto Exterior 2: </label> <input type="file" name="foto">
                 </div>
 -->
                </div></div>
                
            </div>
        </div>


    </div>
</div>
</form>
@endsection
