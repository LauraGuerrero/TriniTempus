<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;

class MensajesController extends Controller
{
    function mostrarTodos() {
        
    $mensajes = Mensaje::all();
    //return view('mensajes.index', compact('mensajes'));
    return view('mi_cuenta')->with('mensajes',$mensajes);
        
        
        
        
        
/*		$mensajes = Mensaje::all();

		return view('mi_cuenta', [
			'todosMensajes' => $mensajes
		]);*/
        

/*		$mensajes = Mensaje::all();
		return view('mi_cuenta', ['mensajes' => $mensajes->toArray()]);*/

	}
}
