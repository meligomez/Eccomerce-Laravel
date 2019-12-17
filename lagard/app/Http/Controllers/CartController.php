<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    //funcion que trae todos los elementos del carrito actual
    public function verCarrito(){
        //Me fijo el usuario que está logueado y busco su carrito
        $userLogueado=auth()->user()->id;
        //una vez que traje su carrito, busco los productos que se encuentran en ese carrito
        $producto= new Product();
        $carrito1= new Cart();
        $carrito= Cart::where('user_id', '=', $userLogueado)->get();
        //  $producto= $carrito->products;
        $producto->id=1;
        $arrayDeProductos=$carrito[1]->products();
        dd( $arrayDeProductos)  ;
    }
}
