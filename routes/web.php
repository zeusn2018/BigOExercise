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

//Route::get('/', function () {
//
//
//
//    return view('welcome');
//});

Route::get('/', 'TestController@welcome');
Route::get('/Fibonacci_Lineal', 'TestController@fibonacci_lineal');

Route::get('/Fibonacci_ProgDinamica', 'TestController@fibonacci_progdinamica');
Route::get('/Fibonacci_Recursivo', 'TestController@fibonacci_recursivo');


//Route::get('/prueba', function () {



//    return view('welcome.php');
//});