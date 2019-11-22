<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    //many to one
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
