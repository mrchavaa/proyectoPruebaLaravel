<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contacto;

    class ContactoController extends Controller
    {
        public function listado(){
            //Regrresar todo lo que tiene la tabla contacto
            $mensajes = Contacto::all();
            return view('listado-contactos', compact('mensajes'));
            //return view('listado-contactos', ['mensajes' => $mensajes]);

        }

        public function formularioContacto(){
            return view('contacto');
        }

        public function guardarFormulario(Request $request){
                //recibir datos
        //dd es para matar la app y arrojar un mensaje 
        //dd($request->all());

        //validar datos
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10']
        ]);

        //guardar datos
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect('/contacto');




        //validar datos

        //guardar datos

        //redireccionar
        }
    }
