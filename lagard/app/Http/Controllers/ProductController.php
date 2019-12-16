<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
    public function detalleVehiculo($idVehiculo){
       $unVehiculo= Product::find($idVehiculo);
       return view('detalle-vehiculo',compact('unVehiculo'));
    }
    public function agregarCarrito(Request $unVehiculo){
     $vehiculoCarrito= new Product();
     $vehiculoCarrito=$this->detalleVehiculo($unVehiculo["id"]);
     $vehiculoCarrito->cantidad=$unVehiculo["cantidad"];
     $vehiculoCarrito->$unVehiculo["anio"];
     $vehiculoCarrito->$unVehiculo["color"];
     $vehiculoCarrito->$unVehiculo["tipoCombustible"];
     $vehiculoCarrito->save();

    }
}
