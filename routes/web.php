<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/pizza', function () {
//     $pizza = [
//     ['name' => 'veg','base' => 'classic','price' => 10],
//     // ['name' => 'nonveg','base' => 'dyclassic','price' => 15],
//     // ['name' => 'mixveg','base' => 'noclassic','price' => 20],
//     ];
//     // $name12 = request('name12');
//     // error_log($name);
//     return view('login',['pizza'=>$pizza]);
//     // return "pizzas";
//     // return ['name' => 'veg', 'base' => 'classic'];
// });

Route::get('/pizzas/{id}','PizzaController@show');
