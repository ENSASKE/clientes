<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Clientes;
use App\Http\Requests\GuardarCliente;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Clientes::orderby('cliente_id', 'desc')->get();
        
        return view('clientes.lista', ['clientes' => $clientes]); 
    }

    public function formulario($cliente_id = null){
        $cliente = Clientes::find($cliente_id);

        return view('clientes.formulario', ['cliente' => $cliente]); 
    }

    public function guardar(GuardarCliente $request){

        $esValido = $request->validated();

        if(!empty($request->input('cliente_id'))){
            $cliente = Clientes::find($request->input('cliente_id'));
        } else {
            $cliente = new Clientes;
        }
        
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->correo = $request->input('correo');
        $cliente->fecha_nacimiento = date("Y-m-d", strtotime($request->input('fecha_nacimiento')));

        $cliente->save();

        Session::flash('flash_message', 'Guardado Correctamente');

        return redirect()->action('ClientesController@index');
    }

    public function eliminar($cliente_id){
        $cliente = Clientes::find($cliente_id);

        $cliente->delete();

        Session::flash('flash_message', 'Eliminado Correctamente');

        return redirect()->action('ClientesController@index');
    }
}
