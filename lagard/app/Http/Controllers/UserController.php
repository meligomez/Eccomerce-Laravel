<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

    public function logout()
    {
      Auth::logout();
      $useLogueado=auth()->user()->id;
      $deletedRows = App\Cart::where('user_id','=',$useLogueado)->delete();
      if($deletedRows>0)
      {
          return redirect('login');
      }
      else{
          return redirect('home');
      }
    }
    public function visualizarPerfil(){
        $userLogueado=auth()->user()->id;
        $user= User::find($userLogueado);
        return view('editarPerfil',compact('user'));
    }
    public function editarPerfil(Request $usuarioEditado){
            $ruta=$usuarioEditado->file("foto")->store("public");
            $nombreArchivo=basename($ruta);
            $user= new User();
            $userLogueado=auth()->user()->id;
            $user->name=$usuarioEditado["nombre"];
            $user->email=$usuarioEditado["email"];
            $user->password=$usuarioEditado["password"];
            $user->foto=$nombreArchivo;
        // $user->save();
        User::where('id', '=', $userLogueado)->update(array('name' =>$user->name,'email'=>$user->email,'foto'=>$user->foto,'password'=>$user->password ));
        return redirect('home');
    }

}
