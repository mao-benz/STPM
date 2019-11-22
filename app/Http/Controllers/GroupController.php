<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    //
    public function index(){

        $group = Group::orderBy('id','asc')->get();
        $countRow = Group::count();

        //return $group;
        return view('backend.group.index',[
            'group' => $group,
            'countRow' => $countRow
        ]);
     }
}
