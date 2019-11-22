<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
/*
Route::get('/contact', function () {
    $drinks = ['coke','pepsi','greentea','beer'];

    return view('contact',
        ['testvar' => 'Test Test',
        'drinks' => $drinks,]
    );
})->name('contact');
*/
Route::get('/contact','ContactController@index')->name('contact.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staff/category', 'CategoryController@index')->middleware('auth')->name('category.index');

Route::get('/staff/category/create', 'CategoryController@create')->middleware('auth')->name('category.create');
Route::post('/staff/category/store', 'CategoryController@store')->middleware('auth')->name('category.store');

Route::get('/staff/group', 'GroupController@index')->middleware('auth')->name('group.index');

Route::get('/staff/unit', 'UnitController@index')->middleware('auth')->name('unit.index');

Route::resource('/staff/product', 'ProductController')->middleware('auth');
