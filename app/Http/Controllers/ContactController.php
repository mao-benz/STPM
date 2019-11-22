<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $testvar = 'Test Test';
        return view('contact',[
            'testvar' => $testvar
        ]);
    }
}
