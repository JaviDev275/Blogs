<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
            return view('welcome');   
    }

    public function fotos(){
        return view('fotos');
    }

    public function noticias(){
        return view('noticias');
    }

    public function nosotros($nombre = null){
        $equipo =['Ignacio', 'Joaquin', 'Lucas'];
        return view('nosotros', compact('equipo','nombre'));    }
    
}


