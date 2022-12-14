<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('PanelAcciones');
});

Route::get("/VerJugadores",[JugadoresController::class,"show"]);

Route::post("/VerJugadores",[JugadoresController::class,"destroy"])

->name("BorrarUsuario");

Route::get("/NuevoJugador",function(){
    return view("NuevoJugador");
})->name("FormularioJugador");


Route::post("/NuevoJugador",[JugadoresController::class,"create"]
)->name("NuevoJugador");

Route::get("/VerEquipos",[EquiposController::class,"show"]);

Route::get("/NuevoEquipo",function(){
    return view("NuevoEquipo");
});
Route::post("/NuevoEquipo",[EquiposController::class,"create"]
)->name("NuevoEquipo");

Route::post("/VerEquipos",[EquiposController::class,"destroy"])

->name("BorrarEquipo");


Route::get("/AsignarEquipo",[EquiposController::class,"index"]);

Route::post("/AsignarEquipo",[EquiposController::class,"store"])->name("EquipoJugador");


