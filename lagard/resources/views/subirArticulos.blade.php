@section('content')

@extends('layouts.app')
<form action="POST" method="/editarPerfil">
<div class="contenedorSubirVehicles">
    <div class="contenedorDeDatosSV">
        <div class="fotoYNombreSV">
            <div class="fotoSV"><img class="estaEsLaFotoSV" src="../img/autoec.jpg" alt="perfil"></div>
            <div class="nombreSV"><h1 class="hNombreAuto"> <input type="text"></div></div>
        

        <div class="infoYTituloSV">
            <div class="tituloSV"> <h1 class="subirAutoSV"> Añadir Producto :</h1></div>
            <div class="datosDelAutoSV">
                <div class="tituloInfoSV"> <h1 class="infoSubirAutoSV">Datos Del Vehiculo :</h1>
                <div class="infomacionParaSubirSV">
                    <ul >
                    <li class="liDatosEspacioSV"> <label for="">- Color :</label> <input type="text"  name="color"  ></li>

                    <li class="liDatosEspacioSV"> <label for=""></label>- Año :<input type="text"  name="año" ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Tipo Combustible :</label> <input type="text" name="combustible"  ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Precio :</label> <input type="text" name="password" ></li>

                    <li class="liDatosEspacioSV"> <label for="">- Stock : </label> <input type="text" name="Stock"></li>

                    <li class="liDatosEspacioSV"> <label for="">- Foto : </label> <input type="file" name="foto"></li>
                </ul>
                <div class="botonesSubirAutosSV"> 
<input class="botonGuardarSV"  type="submit" value="Guardar" >
<input class="botonEnviarSV"  type="button" value="Volver">

                </div>
                </div></div>
                
            </div>
        </div>

      
    </div>
</div>
</form>
@endsection