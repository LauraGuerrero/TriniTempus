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
	
	function mostrarTodosVistaMensajes() {
        
    $mensajes = Mensaje::all();
    //return view('mensajes.index', compact('mensajes'));
    return view('mensajes')->with('mensajes',$mensajes);
	}
	/*
	function mostrarMensajesUsuario($id) {
    $mensajes = Mensaje::all();
		//$mensajesUsuario;
    //return view('mensajes.index', compact('mensajes'));
		foreach($mensajes as $mensaje){
			if($mensaje->emisor==$id)
				$mensajesUsuario
		}
    return view('mensajes')->with('mensajes',$mensajesUsuario);
	}*/
}
