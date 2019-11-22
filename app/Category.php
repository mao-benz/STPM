<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = "category";
    //protected $primaryKey = 'c_id';
    //public $incrementing = false;
    //protected $keyType = 'string';
    //public $timestamps = false;

    //one to many
    public function products(){
        return $this->hasMany(Product::class);
    }

}
