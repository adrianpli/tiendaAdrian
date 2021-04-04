<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductosController;


Route::get('/',[UsuarioController::class,'inicio']) -> name('inicio');
Route::get('/inicio',[UsuarioController::class,'inicioiniciado']) -> name('inicio.iniciado');

Route::get('/loginAdmin',[UsuarioController::class,'loginadmin']) -> name('loginadmin');
Route::get('/loginAdmin/inicio',[UsuarioController::class,'inicioAdmin']) -> name('inicioAdmin');
Route::get('/cerrar',[UsuarioController::class,'cerrarSesion']) -> name('cerrarSesion');
Route::post('/loginAdmin/sesion',[UsuarioController::class,'verificarAdmin']) -> name('loginadmin.form');

Route::get('/login',[UsuarioController::class,'login']) -> name('login');
Route::post('/login',[UsuarioController::class,'verificarUsuario'])->name('login.form');
Route::get('/registrar/usuario',[UsuarioController::class,'registro'])->name('registrar');
Route::post('/registrar/usuario',[UsuarioController::class,'registroForm']) -> name('registro.form');

Route::get('/registrar/producto',[ProductosController::class,'registroProductos']) -> name('registrarproducto');
Route::post('/registrar/producto',[ProductosController::class,'registraproducto']) -> name('registrarproducto.form');
Route::get('/mostrar/productos',[ProductosController::class,'productos']) -> name('verProductos');
Route::post('/cuenta/carrito',[ProductosController::class,'carrito']) -> name('carrito');
Route::get('/pedidos/ver',[ProductosController::class,'verpedidos']) -> name('verPedidos');
Route::get('clientes/ver',[ProductosController::class,'verclientes'])->name('verClientes');

Route::post('/agregar/carrito',[ProductosController::class,'agregarCarrito']) -> name('carrito.agregar');
Route::post('/carrito/pagar',[ProductosController::class,'pagar']) -> name('pagar.carrito');
Route::post('/usuario/pedidos',[ProductosController::class,'pedidos']) -> name('pedidos');

