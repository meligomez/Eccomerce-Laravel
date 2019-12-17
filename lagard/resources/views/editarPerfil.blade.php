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
                <div class="tituloInfoEP"> <h1 class="infoPerfilEditar">Informcion Personal:</h1>
                <div class="infomacionParaEditar">
                    <ul >
                    <li> <label for=""> Nombre Usuario</label> <input type="text"  readonly name="user" value="{{$user->username}}" ></li>

                    <li> <label for=""></label>Nombre Completo <input type="text"  name="nombre"  value="{{$user->name}}"></li>

                    <li> <label for=""> Email:</label> <input type="text" name="email"  value="{{$user->email}}"></li>

                    <li> <label for=""> Contraseña:</label> <input type="text" name="password" ></li>

                    <li> <label for="">Foto </label> <input type="file" name="foto"></li>
                </ul>
                <div class="botonesEditarPerfil"> 
<input type="submit" value="Guardar" > {{csrf_field()}}
<input type="button" value="Volver">

                </div>
                </div></div>
                
            </div>
        </div>

      
    </div>
</div>
</form>
@endsection