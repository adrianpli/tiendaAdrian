<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Usuario;
use App\Models\carrito;
use App\Models\Compras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductosController extends Controller
{
    public function registroProductos(){
    return view('registrarProducto');
}
    public function registraproducto(Request $datos){
        $datos->validate([
            'img1' => 'required|image|max:2048'
        ]);
        $imagen1 = $datos->file('img1')->store('public');
        $url1 = Storage::url($imagen1);

        $datos->validate([
            'img2' => 'required|image|max:2048'
        ]);
        $imagen2 = $datos->file('img2')->store('public');
        $url2 = Storage::url($imagen2);

        $producto = new Productos();
        $producto -> producto = $datos -> nombreP;
        $producto -> descripcion = $datos -> descP;
        $producto -> precio = $datos -> precio;
        $producto -> stock = $datos -> stock;
        $producto -> imagen1 = $url1;
        $producto -> imagen2 = $url2;
        $producto -> save();

        return view('registrarProducto',["estado" => "Se Registro el producto $datos->nombreP"]);
    }

    public function productos(){
$existentes = Productos::get();
return view('productos',["allProductos" => $existentes]);
    }
public function agregarCarrito(Request $datos){
        $todos = Productos::get();
        $producto = Productos::where("ID",$datos -> idProducto)->first();
$carrito = new carrito();
$carrito -> ID_producto = $datos -> idProducto;
$carrito -> ID_usuario = $datos -> idUsuario;
$carrito -> producto = $producto -> producto;
$carrito -> descripcion = $producto -> descripcion;
$carrito -> precio = $producto -> precio;
$carrito -> imagen1 = $producto -> imagen1;
$carrito -> save();

return view('inicio',["sesion" => "iniciada",
    "productos" => $todos,
    "mensaje" => "$producto->producto agregado al carrito"]);


}
    public  function carrito(Request $datos){
        $productos = carrito::where('ID_usuario',$datos->id)->get();
        $Nproductos = carrito::where('ID_usuario',$datos->id)->count();
        $total = carrito::where('ID_usuario',$datos->id)->sum('precio');

        return view('carrito',["sesion" => "iniciada",
            "productosAgregados" => $productos,
            "nproductos" => $Nproductos,
            "total" => $total]);
    }

    public function pagar(Request $datos){
        $productos = carrito::where('ID_usuario',$datos->id)->get();

        foreach ($productos as $producto){
            $comprado = new Compras();
        $articulo = Productos::where('ID',$producto->ID_producto)->first();
        $comprado -> id_comprador = $producto -> ID_usuario;
        $comprado -> producto = $articulo -> producto;
        $comprado -> descripcion = $articulo -> descripcion;
        $comprado -> precio = $articulo -> precio;
        $comprado -> imagen1 = $articulo -> imagen1;
        $comprado -> imagen2 = $articulo -> imagen2;
        $comprado -> save();

        }
        /*foreach ($productos as $producto){
       $this->destroy($producto->ID);
        }*/
        $todos = Productos::get();
        return view('inicio',["sesion" => "iniciada",
            "productos" => $todos,
            "mensaje" => "$producto->producto agregado al carrito"]);

    }
    public function destroy($id){

carrito::destroy($id);

    }
    public function pedidos(Request $datos){
        $pedidos = Compras::where("id_comprador",$datos->id)->get();
        return view('pedidos',["sesion" => "iniciada","pedidos" => $pedidos]);
    }

    public function verpedidos(){
        $todos = Compras::get();
        return view('pedidosAdmin',["todos"=>$todos]);
    }
    public function verclientes(){
        $todos = Usuario::get();
        return view('clientesAdmin',["todos"=>$todos]);
    }


}
