<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    public function unit(){
        return $this->hasOne(Product::class);
    }
}
