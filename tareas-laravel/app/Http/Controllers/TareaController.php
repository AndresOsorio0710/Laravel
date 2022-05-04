<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

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

     /**
      * 
      */
     public function index(){
         $tareas = Tarea::all();
         return view('tareas.index',['tareas'=>$tareas]);
     }

     /**
      * 
      */
    public function show($id){
        $tarea = Tarea::find($id);
        return view('tareas.show',['tarea'=>$tarea]);
    }

     /**
      * 
      */
    public function update(Request $request,$id){
        $tarea = Tarea::find($id);
        $tarea->title = $request->title;
        $tarea->save();
        return redirect()->route('tareas')->with('success','Tarea actualizada correctamente');
    }

    /**
     * 
     */
   public function destroy($id){
       $tarea = Tarea::find($id);
       $tarea->delete();
       return redirect()->route('tareas')->with('success','Tarea eliminada correctamente');       
   }
}
