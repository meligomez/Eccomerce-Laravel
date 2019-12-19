<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\CartController;
use App\User;
use App\Payment;
use App\purchase;
use App\item;
use Illuminate\Support\Arr;
use App\Http\Controllers\PaymentController;

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

        //Guardo el medio de pago
        // if($datosCompra["medioPago"]!="EFEC"){
        //     $mp= new Payment();
        //     $primero=$datosCompra['number-card1'];
        //     $segundo=$datosCompra['number-card2'];
        //     $tercero=$datosCompra['number-card3'];
        //     $cuarto=$datosCompra['number-card4'];
        //     $mp->numero=$primero.$segundo.$tercero.$cuarto;
        //     $mp->codigo=$datosCompra['number-card5'];
        //     $mp->vencimiento=$datosCompra['vencimiento'];
        //     $mp->descripcion=$datosCompra["medioPago"];
        //     $mp->save();
        // }else{
        //     $mp= new Payment();
        //     $mp->descripcion=$datosCompra["medioPago"];
        //     $mp->save();
        // }
        //insertar la compra
        // $compra= new purchase();
        // $compra->total=$datosCompra["totalHidden"];
        // $compra->fechaCompra=date("Ymd");
        // $compra->medioPago_id = $mp->id;
        // $compra->estado=1;
        // $compra->user_id=auth()->user()->id;
        // $compra->save();
        //Insertar un item por cada producto que tenga
        $carrito= new CartController();
        $carrito=$carrito->obtenerCarrito();
        //   dd($carrito);
        $item= new Item();
        for ($i=0; $i <$carrito->count(); $i++) {
            // dd($i);
            foreach ($carrito[$i] as $key => $value) {
                if($key=="product_id"){
                    // dd($value);
                }
            }
            // dd($key);<<
        }

        //Insertar en la tabla intermedia
    }
}
