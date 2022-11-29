<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\amiiboController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\UsuarioController;
use App\Http\Livewire\Contador;
use App\Http\Livewire\Usuarios;
use App\Http\Livewire\UsuariosCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/amiibos',[amiiboController::class, 'llamarAmiibos']);
//ruta de usuarios get
//Route::get('/usuarios',[UsuarioController::class, 'index']);

//frontend
Route::get('/asset',[AssetController::class, 'index']);

//para mandar a llamar con el live wire mandamos a llamar la clase desde http/livewire/usuarios.php
Route::get('/usuarios', Usuarios::class);
Route::get('/usuarios/create', UsuariosCreate::class);
Route::get('/contador', Contador::class);
