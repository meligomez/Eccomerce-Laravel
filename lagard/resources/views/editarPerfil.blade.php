@section('content')

@extends('layouts.app')
<form action="/editarPerfil" method="POST" enctype="multipart/form-data">
<div class="contenedorEditarPerfil">
    <div class="contenedorDeDatosEP">
        <div class="fotoYNombre">
            <div class="fotoEP"><img class="estaEsLaFoto" src="/storage/{{ $user->foto }}" alt="perfil"></div>
            <div class="nombreEP"><h1 class="hNombreUsr">{{$user->name}}</div></div>


        <div class="infoYTitulo">
            <div class="tituloEP"> <h1 class="editarPerfilEP"> Editar Perfil :</h1></div>
            <div class="informacionEP">
                <div class="tituloInfoEP"> <h1 class="infoPerfilEditar">Informacion Personal :</h1>
                <div class="infomacionParaEditar">
                    <ul >
                    <li class="liInformacionEspacio"> <label for="">- Nombre Usuario :</label> <input type="text"  readonly name="user" value="{{$user->username}}" ></li>

                    <li class="liInformacionEspacio"> <label for=""></label>- Nombre Completo :<input type="text"  name="nombre"  value="{{$user->name}}"></li>

                    <li class="liInformacionEspacio"> <label for="">- Email :</label> <input type="text" name="email"  value="{{$user->email}}"></li>

                    <li class="liInformacionEspacio"> <label for="">- Contraseña :</label> <input type="password" name="password" value="{{ auth()->user()->password }}" ></li>

                    <li class="liInformacionEspacio"> <label for="">- Foto : </label> <input type="file" name="foto"></li>
                </ul>
                <div class="botonesEditarPerfil">
                        <input class="botonGuardar"  type="submit" value="Guardar" > {{csrf_field()}}
                        <input class="botonEnviar"  type="button" value="Volver">
                </div>
                </div></div>

            </div>
        </div>


    </div>
</div>
</form>
@endsection
