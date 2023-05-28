<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eventos extends Controller
{
    //
    public function eventos(){
        return view('eventos'); 
        
    }
    public function catalogo(){
        return view('catalogo'); 
        
    }
    public function salon(){
        return view('salon'); 
        
    }
    public function contacto(){
        return view('contacto'); 
        
    }
}