<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\CartController;
use App\User;
class PurchaseController extends Controller
{
    //
    public function realizarVenta(){
        $idUserLogueado=auth()->user()->id;
        $carrito=new CartController();
        $carrito=$carrito->obtenerCarrito();
        $user=User::find($idUserLogueado);
        $total=0;
        return view('/compra',compact('user','carrito'));
    }

    public function finalizarVenta(Request $datosCompra){
        $primero=$datosCompra['number-card1'];
        $segundo=$datosCompra['number-card2'];
        $tercero=$datosCompra['number-card3'];
        $cuarto=$datosCompra['number-card4'];
        $codigo=$datosCompra['number-card5'];
        $vencimiento=$datosCompra['vencimiento'];
    }
}
