<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class PagesController extends Controller
{
    public function inicio(){
        $notas = Nota::all();
        return view('welcome',compact('notas'));   
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
  
        
public function detalle($id){
    $nota = Nota::findOrFail($id);

    return view('notas.detalle',compact('nota'));
}


public function crear($id){
    $nota = Nota::findOrFail($id);

    return view('notas.detalle',compact('nota'));
}
}