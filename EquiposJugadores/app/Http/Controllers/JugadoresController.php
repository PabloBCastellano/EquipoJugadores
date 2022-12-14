<?php

namespace App\Http\Controllers;

use App\Models\Jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(DB::table("Jugadores")->insert([
            "Name_Player"=>$request->Player_Name,
            "TShirt_Number"=>$request->TShirt_Number
        ])){
            echo "<script>alert('Nuevo Jugador dado de Alta');</script>";
            return view("NuevoJugador");
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Jugadores=DB::table("Jugadores")->get();
        return view("JugadoresDisponibles",['PlantillaJugadores' => $Jugadores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        for($i=0;$i<sizeof($request->Elegir);$i++){
            Jugadores::where("Id_Player",$request->Elegir[$i])->delete();
        }

        $Jugadores=DB::table("Jugadores")->get();
        return view("JugadoresDisponibles",['PlantillaJugadores' => $Jugadores]);



    }
}
