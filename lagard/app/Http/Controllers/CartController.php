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
        $carrito= new Cart();
        $carrito2= new Cart();
        $carrito2= $carrito->find($userLogueado);
        return view('see-cart');
    }
}
