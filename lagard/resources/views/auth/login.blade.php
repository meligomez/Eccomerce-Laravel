@extends('layouts.app')
@section('content')
        <div class="container">
                <div class="login-content-logo">
                  <img class="userImg" src="../img/Lagard3.png" alt="">
                </div>
                <div class="login-content-form">
                    <form method="POST" class="formLogin" action="{{ route('login') }}">
                            @csrf
                     <h1>Sign In</h1>
                        <div class="nombre">
                           <img src="../img/user.svg" alt="" width="6%">
                            <input  id="username" class="inputNombreLogin" type="text" name="username"  placeholder="Username"  @error('username') is-invalid @enderror name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="password">
                            <img src="../img/lock.svg" alt="" width="6%">
                            <input id="password" class="inputPassLogin" type="password" name="password" value="" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password" >
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                            <span style="color:red;font-size:12px;"></span>
                            <span style="color:red;font-size:12px;"></span>
                            <div class="col-12 rememberMe">
                            {{-- <label class="labelrememberMe"><input type="checkbox" name="cbox1" id="cbox1" {{ old('cbox1') ? 'checked' : '' }}>Recordarme</label> --}}
                            <input class="labelrememberMe" type="checkbox" name="cbox1" id="cbox1" {{ old('remember') ? 'checked' : '' }}>

                            <label class="labelrememberMe" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                             <input class="login" type="submit" name="" value="LOGIN">
                        <div class="forgotPsw">
                            <a href="{{ route('password.request') }}" class="col-8">¿Te olvidaste la contraseña?</a>
                        </div>
                    </form>

                </div>
                <div class="col-12 footerLogin">
                        ¿No tenés cuenta? <a href="{{ route('register') }}">  Registrarme</a>
                </div>
        </div>
@endsection

