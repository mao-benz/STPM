<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitController extends Controller
{
    //
    public function index(){

        $unit = Unit::orderBy('id','asc')->get();
        $countRow = Unit::count();

        //return $group;
        return view('backend.unit.index',[
            'unit' => $unit,
            'countRow' => $countRow
        ]);
     }
}
