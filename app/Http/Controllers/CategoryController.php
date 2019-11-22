<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){

        //$category = Category::all();
        //$category = Category::findOrFail(2);
        //$category = Category::where('id','=',2)->get();
        //$category = Category::select('id','name')->where('id','=',2)->get();
        $category = Category::orderBy('id','asc')->get();
        $countRow = Category::count();

        //return $category;
        return view('backend.category.index',[
            'category' => $category,
            'countRow' => $countRow
        ]);
     }

     public function create(){
       return view('backend.category.create');
    }

     public function store(Request $request){
         //$cat = new Category();
         //$cat->name= 'ทดสอบ';
         //$cat->save();

        //$cat = Category::find(id);
        //$cat->name = 'Test';
        //$cat->save();
        //return view('backend.category.store');

		$this->validate($request, [
            'name' => 'required|string|max:250',
            ]);

        // store
        $cat = new Category();
        $cat->name = $request->input('name');
        $cat->save();

        // redirect
        return redirect('backend.category.index')->with('message', 'Successfully created blog!');
        }
}
