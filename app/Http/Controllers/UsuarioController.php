<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admins;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    public function inicioiniciado(){
        $productos = Productos::get();
        return view('inicio',["sesion"=>"iniciada",'productos' => $productos]);
    }
    public function inicio(){
        $productos = Productos::get();
        return view('inicio',['productos' => $productos]);
    }
    public function loginadmin(){
        return view('loginAdmin');
    }
    public function inicioAdmin(){
        return view('admin');
    }
    public function login(){
        return view('login');
    }
    public function registro(){
        return view('registroUsuario');
    }
    public function verificarUsuario(Request $datos){
        $usuario = Usuario::where("correo",$datos -> correo)->first();

        if(!$usuario)
            return view("login",["estatus"=> "error", "mensaje"=> "¡El correo no esta registrado!"]);
        if(!Hash::check($datos->password,$usuario->contra))
            return view("login",["estatus"=> "error", "mensaje"=> "¡Datos incorrectos!"]);

        Session::put("usuario",$usuario);
$productos = Productos::get();
        return view("inicio",["sesion" => "iniciada","productos" => $productos]);
    }
    public function registroForm(Request $datos){

        if(!$datos -> nombre  || !$datos -> correo || !$datos -> password)
            return view("registroUsuario",["estatus"=> "error", "mensaje"=> "¡Falta información!"]);

        $usuario = Usuario::where('correo',$datos->correo)->first();
        if($usuario)
            return view("registroUsuario",["estatus"=> "error", "mensaje"=> "¡El correo ya se encuentra registrado!"]);

        $nombre = $datos -> nombre;

        $correo = $datos -> correo;
        $password = $datos -> password;

        $usuario = new Usuario();
        $usuario -> nombre = $nombre;
        $usuario -> correo =  $correo;
        $usuario -> contra = bcrypt($password);
        $usuario -> save();

        return view("login",["estatus"=> "success", "mensaje"=> "¡Cuenta Creada!"]);

    }



    public function verificarAdmin(Request $datos){
        $admin = Admins::where("correo",$datos -> correo)->first();
        if(!$admin)
            return view("loginAdmin",["estatus"=> "error", "mensaje"=> "¡El correo no esta registrado!"]);
        if($datos->password===$admin->contra){
            Session::put("usuario",$admin);

            return view("admin");
        }else{
            return view("loginAdmin",["estatus"=> "error", "mensaje"=> "¡Datos incorrectos!"]);

        }
    }
    public function cerrarSesion(){
        if(Session::has('usuario'))
            Session::forget('usuario');
$productos = Productos::get();
        return view("inicio",["sesion" => "cerrada","productos" => $productos]);
    }

}
