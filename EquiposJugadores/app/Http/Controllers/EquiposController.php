<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class EquiposController extends Controller
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
    {   if(DB::table("Equipos")->insert([
            "Name_Team"=>$request->Team_Name
        ])){
            echo "<script>alert('Nuevo Equipo dado de Alta');</script>";
            return view("NuevoEquipo");
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
        $Equipos=DB::table("Equipos")

        ->get();

        return view("EquiposDisponibles",["EquiposActuales"=>$Equipos]);
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
            Equipos::where("Id_Team",$request->Elegir[$i])->delete();
        }

        $Equipos=DB::table("Equipos")

        ->get();

        return view("EquiposDisponibles",["EquiposActuales"=>$Equipos]);




    }
}
