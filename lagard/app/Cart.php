<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Support\Facades\DB;
class Cart extends Model
{
    public function products(){
        return $this->belongsToMany("\App\Product","carts_products","carrito_id","product_id")->withPivot('id');
    }
    public function idCartsProducts($idCarrito){
        $id = DB::table('carts')
            ->join('carts_products', 'carts.id', '=', 'carts_products.carrito_id')
            ->join('products', 'products.id', '=', 'carts_products.product_id')
            ->where('carts.id','=',$idCarrito)
            ->select('carts_products.id as idCP','carts_products.*', 'products.*', 'carts.*')
            ->get();
    return $id;
    }
}
