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

        //Actualizo el carrito, un nuevo carrito y le seteo al user logueado.
        //La instancia del carrito (Una instancia por usuario logueado) se encuentra en el método authenticated de la clase AuthenticatesUsers
        //en la carpeta laravel/frameworl/src/foundation/Auth
            $carrito= new Cart();
            $userLogueado=auth()->user()->id;;
            $carrito = $carrito->where("user_id","=",$userLogueado)->get()[0];
         //Una vez que están instanciadas y seteadas las clases, creo la clase intermedia
            $anio=$modelos["anio"];
            $color= $modelos["color"];
            $tipoCombustible= $modelos["tipoCombustible"];
            //Inserto en la tabla intermedia los id y datos adicionales.

            $carrito->products()->attach($vehiculo->id,['anio' => $anio,'color'=>$color,'tipoCombustible'=>$tipoCombustible]);
            dd($carrito->products());
            return redirect('/vehicles');


        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

    }
}
