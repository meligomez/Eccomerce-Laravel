<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    //funcion que trae todos los elementos del carrito actual y va a vista
    // public function verCarrito(){
    //     //Me fijo el usuario que está logueado y busco su carrito
    //     $userLogueado=auth()->user()->id;
    //     //una vez que traje su carrito, busco los productos que se encuentran en ese carrito
    //     $producto= new Product();
    //     $carrito1= new Cart();
    //     $carrito= Cart::where('user_id', '=', $userLogueado)->get()[0];
    //     $producto= $carrito->products;
    //     return view('see-cart',compact('producto'));
    // }
    public function verCarrito(){
        $carrito = new Cart();
        $userLogueado=auth()->user()->id;
        $carrito= Cart::where('user_id', '=', $userLogueado)->get()[0];
        $carrito= $carrito->idCartsProducts($carrito->id);
        return view('see-cart',compact('carrito'));
    }
    public function getProductosDelCarritoPorUserLogueado(){
        $userLogueado=auth()->user()->id;
        $producto= new Product();
        $carrito1= new Cart();
        $carrito= Cart::where('user_id', '=', $userLogueado)->get()[0];
        $producto= $carrito->products();
        return $producto;
    }

    public function eliminarProductoDelCarrito(Request $idAEliminar){
        $idProducto=$idAEliminar["id"];
        DB::table('carts_products')->where('carts_products.id', '=', $idProducto)->delete();
        // dd($products);
        // $products->detach($idProducto);
        return $this->verCarrito();
    }
}
