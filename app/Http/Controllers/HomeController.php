<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Group;
use App\Unit;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $groupCount = Group::count();
        $userCount = User::count();

        return view('home',[
            'productCount' => $productCount,
            'categoryCount' => $categoryCount,
            'groupCount' => $groupCount,
            'userCount' => $userCount,
        ]);
    }
}
