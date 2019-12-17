<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Cart extends Model
{
    public function products(){
        return $this->belongsToMany("\App\Product","carts_products","carrito_id","product_id");
    }
}
