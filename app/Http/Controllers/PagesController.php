<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class PagesController extends Controller
{
    public function inicio(){
        $notas = Nota::paginate(3);
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


public function crear(Request $request){
    $request->validate(
        rules: [
            "nombre" => "required",
            "descripcion" => "required",
        ],
        messages: [
            "nombre.required" => "El nombre es obligatorio",
            "descripcion.required" => "La descripcion es obligatoria",
        ]
    );

    $notaNueva = new Nota;
    $notaNueva->nombre = $request->nombre;
    $notaNueva->descripcion = $request->descripcion;

    $notaNueva->save();

    return back()->with('mensaje','Nota creada correctamente');
}

public function editar($id){
    $nota = Nota::findOrFail($id);
    return view('notas.editar',compact('nota'));
}

public function actualizar(Request $request, $id){
    $request->validate(
        rules: [
            "nombre" => "required",
            "descripcion" => "required",
        ],
        messages: [
            "nombre.required" => "El nombre es obligatorio",
            "descripcion.required" => "La descripcion es obligatoria",
        ]
    );

    $notaActualizar = Nota::findOrFail($id);

    $notaActualizar ->nombre = $request->nombre;
    $notaActualizar ->descripcion = $request ->descripcion;

    $notaActualizar -> save();
    return back()->with('mensaje','Nota actualizada correctamente');;

}

public function eliminar($id){
    $notaEliminar = Nota::findOrFail($id);

    $notaEliminar->delete();

    return back()->with('mensaje','Nota eliminada correctamente');
}
}