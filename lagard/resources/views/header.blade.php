<header>
    <nav class="header_menu">
    <ul class="lista_titulo">
      <li class="titulo"><a href="home.php">Lagard</a></li>
    </ul>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button id="options" class="dropdown-item" type="button"  ><a href="{{ route('login') }}">INGRESA</button>
        <button id="options" class="dropdown-item" type="button"  ><a href="{{ route('register') }}">REGISTRATE</button>
        <button id="options" class="dropdown-item" type="button"><a href="{{ route('vehicles') }}">VEHICULOS</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="{{ route('aboutUs') }}">NOSOTROS</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="{{ route('buy') }}">COMPRA ACA</a></button>
        <button id="options" class="dropdown-item" type="button"><a href="{{ route('editUser') }}">AJUSTES</a></button>
        <button id="options" class="dropdown-item" type="button">style='display:none;'<a href="{{ route('logout') }}">CERRAR SESION</a></button>
      </div>
    </div>
    <ul class="lista_menu">
      <li><a href="{{ route('login') }}"  >INGRESA</a></li>
      <li><a href="{{ route('register') }}" >REGISTRATE</a></li>
      <li><a href="{{ route('vehicles') }}">VEHICULOS</a></li>
      <li><a href="{{ route('aboutUs')}}">NOSOTROS</a></li>
      <div class="dropdown menuLogueado" style='display:none;' >
        <li class="dropbtn"  style='display:none;' >PERFIL
          <div class="dropdown-content">
            <a href="{{ route('editUser') }}">Configurar</a>
        </div>
        </li>
      </div>
      <li><a href=""><img src="../img/carrito.png" alt="carro-de-compras"></a></li>
      <li><a href="editarPerfil.php"><img src="../img/settings.png" alt="configuracion"></a></li>
      <li id="logout" style='display:none;'>
        <form action="" method="post">
          <input type="submit" value="" name="inputDeslogueo" style="background: none;border: none;background-image: url(../img/logout.png);
                                                                       background-size: cover;margin: 0px;background-position: center;width: 30px;margin-top: 54%;">
        </form>
      </li>
    </ul>
  </nav>
</header>
