<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    /**
     * Convenciones
     * index para mostrar todas las tareas
     * store para guardar una tarea
     * update para actualizae una tarea
     * destroy para eliminar una tarea
     * edit para mostrar el formulario de edicion
     */

     /**
      * Store
      *
      *Funcion para guardar una nueva tarea
      */
     public function store(Request $request){
         //Validamos
        $request->validate([
            'title'=>'required|min:3'
        ]);

        //Cramos el objeto con los nuevos valores
        $tarea = new Tarea;
        $tarea->title=$request->title;
        $tarea->save();

        //Guardamos
        return redirect()->route('tareas')->with('success','Tarea creada correctamente');
     }

     public function index(){
         $tareas = Tarea::all();
         return view('tareas.index',['tareas'=>$tareas]);
     }
}
