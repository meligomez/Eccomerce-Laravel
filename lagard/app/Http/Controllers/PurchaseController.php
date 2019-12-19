<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\CartController;
use App\User;
use App\Payment;
use App\purchase;
use App\item;
use App\ItemsPurchase;
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
        if($datosCompra["medioPago"]!="EFEC"){
            $mp= new Payment();
            $primero=$datosCompra['number-card1'];
            $segundo=$datosCompra['number-card2'];
            $tercero=$datosCompra['number-card3'];
            $cuarto=$datosCompra['number-card4'];
            $mp->numero=$primero.$segundo.$tercero.$cuarto;
            $mp->codigo=$datosCompra['number-card5'];
            $mp->vencimiento=$datosCompra['vencimiento'];
            $mp->descripcion=$datosCompra["medioPago"];
            $mp->save();
        }else{
            $mp= new Payment();
            $mp->descripcion=$datosCompra["medioPago"];
            $mp->save();
        }
        //insertar la compra
        $compra= new purchase();
        $compra->total=$datosCompra["totalHidden"];
        $compra->fechaCompra=date("Ymd");
        $compra->medioPago_id = $mp->id;
        $compra->estado=1;
        $compra->user_id=auth()->user()->id;
        $compra->save();
        $idCompra=$compra->id;
        //Insertar un item por cada producto que tenga
        $carrito= new CartController();
        $carrito=$carrito->obtenerCarrito();
        $results = $carrito;
        $results->map(function($unResult){
            $buy= new purchase();
            $buy=$buy->getCompraByUser();
            $item= new Item();
            $item->tipoProduct_id=$unResult->product_id;
            $item->precio=$unResult->precio;
            $item->save();
            $itemPurchase= new ItemsPurchase();
            $itemPurchase->compra_id=$buy->id;
            $itemPurchase->item_id=$item->id;
            $itemPurchase->descuentoPorcentaje=0;
            $itemPurchase->save();

        });
        return redirect('home');
        //Insertar en la tabla intermedia
    }
}
