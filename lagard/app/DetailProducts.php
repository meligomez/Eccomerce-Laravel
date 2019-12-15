<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProducts extends Model
{
    //funcion para establecer la relacion desde el back
    public function producto(){
        return $this->belongsTo("App\Product","product_id" );
    }
}
