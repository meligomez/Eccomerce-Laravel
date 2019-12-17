@section('content')

@extends('layouts.app')
<form action="POST" method="/editarPerfil">
<div class="contenedorEditarPerfil">
    <div class="contenedorDeDatosEP">
        <div class="fotoYNombre">
            <div class="fotoEP"><img class="estaEsLaFoto" src="../img/sinFoto.jpg" alt="perfil"></div>
            <div class="nombreEP"><h1 class="hNombreUsr">{{$user->name}}</div></div>
        

        <div class="infoYTitulo">
            <div class="tituloEP"> <h1 class="editarPerfilEP"> Editar Perfil</h1></div>
            <div class="informacionEP">
                <div class="tituloInfoEP"> Informcion Personal:</div>

            </div>
        </div>

      
    </div>
</div>
</form>
@endsection