<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function detalles(){
        return $this->hasMany("App\DetailProducts","product_id");
    }
}
