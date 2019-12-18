<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
class ProductController extends Controller
{
    public function index()
    {
       $vehiculos= $this->getAllVehicles();
        return view('vehicles',compact('vehiculos'));
    }
    public function getAllVehicles(){
        $vehiculos= Product::all();
        return $vehiculos;
    }
    //Detalle de un vehiculo que redirige a una vista
    public function detalleVehiculo($idVehiculo){
       $unVehiculo= Product::find($idVehiculo);
       return view('detalle-vehiculo',compact('unVehiculo'));
    }

    //cree esta funcion similar a la otra, pero esta lo que tiene es que devuelve el objeto
    public function detallePorId($idVehiculo){
        $unVehiculo= Product::find($idVehiculo);
        return $unVehiculo;
     }

    public function agregarCarrito(Request $modelos){

        try {
        //obtengo todos los datos del producto que quiere insertar en el carrito
            $vehiculo= new Product();
            $vehiculo=$this->detallePorId($modelos["id"]);
            $vehiculo->cantidad=$modelos["cantidad"];
        //La instancia del carrito (Una instancia por usuario logueado) se encuentra en el método authenticated de la clase AuthenticatesUsers
        //en la carpeta laravel/frameworl/src/foundation/Auth
            $carrito= new Cart();
            $userLogueado=auth()->user()->id;
            $carrito = Cart::where("user_id","=",$userLogueado)->get()[0];
            //Inserto en la tabla intermedia los id y datos adicionales.
            $carrito->products()->attach($vehiculo->id,['cantidad' => $vehiculo->cantidad,]);
            return redirect('/vehicles');


        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

    }

}
