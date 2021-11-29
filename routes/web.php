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
Route::get('/pizzas',function(){
    $pizzas = [
    ['type' => 'hawaiian','base' => 'cheesy crust','price'=>'4'],
    ['type' => 'volcano','base' => 'cheesy crust','price'=>'4'],
    ['type' => 'veg','base' => 'cheesy crust','price'=>'4']
];
    return view('pizzas',['pizzas' => $pizzas]);
});
