<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    //
    public function getCompraByUser(){
        $userLogueado=auth()->user()->id;
        $purchase = purchase::where("user_id","=",$userLogueado)->get()[0];
        return $purchase;
    }
}
