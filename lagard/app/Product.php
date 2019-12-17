<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;

class Product extends Model
{
    //
    public function detalles(){
        return $this->hasMany("App\DetailProducts","product_id");
    }
    public function carts(){
        return $this->belongsToMany("\App\Cart","carts_products","product_id","carrito_id");
    }
}
