<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //aca coloco la funcion FiboLineal
    public function welcome(){

    	return view('welcome');
    }

    public function fibonacci_progdinamica(){

    	return view('prog_dinamica');
    }

    public function fibonacci_recursivo(){

    	return view('fibonacci_recursivo');
    }

     public function fibonacci_lineal(){

    	return view('fibonacci_lineal');
    }



}
