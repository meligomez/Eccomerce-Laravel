<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout()
    {
      Auth::logout();
      $deletedRows = App\Flight::where('active', 0)->delete();
      if($deletedRows>0)
      {
          return redirect('login');
      }
      else{
          return redirect('home');
      }
    }
}
