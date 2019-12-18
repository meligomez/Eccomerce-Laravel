@extends('layouts.app')

@section('content')
<main class="main_registro">

        <div class="content">
           <div class="row">
             <form class=" offset-lg-4 col-lg-4 registroDeUsuario" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
               <h2>REGISTRO</h2>
               <p>
                   <img src="../img/user.svg" alt="" width="6%">
                   <input id="username" type="text" class="inputEspacio @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Ingrese un Usuario" required autocomplete="name" autofocus>

                   @error('username')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror

                 </p>
               <p>
                 <img src="../img/card.svg" alt="" width="6%">
                 <input id="name" type="text" class="inputEspacio @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Ingrese su nombre y apellido" autofocus>
                 @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               </p>
               <p>
                 <img src="../img/email.svg" alt="" width="6%">
                 <input id="email" type="email" class="inputEspacio @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Ingrese su mail" required autocomplete="email">

                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
               </p>
               <p>
               <input type="file" name="foto" id="foto" placeholder="Ingrese su foto de perfil">
              <p>
               <p>
                 <img src="../img/lock.svg" alt="" width="6%">
                 <input id="password" type="password" class="inputEspacio @error('password') is-invalid @enderror" name="password"  placeholder="Ingrese una contraseña" required autocomplete="new-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
               </p>
               <p>
                 <img src="../img/lock.svg" alt="" width="6%">
                 <input id="password-confirm" type="password" class="inputEspacio" name="password_confirmation" placeholder="Reingrese la contraseña" required autocomplete="new-password">
               </p>
               <div class="">
                    <button type="submit" class="inputRegistrar">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
           </div>
        </div>

     </main>
@endsection
