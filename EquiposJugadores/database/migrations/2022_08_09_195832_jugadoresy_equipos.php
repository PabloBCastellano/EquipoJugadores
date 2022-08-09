<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadoresyequipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("Id_Player");
            $table->unsignedBigInteger("Id_Team");
            $table->foreign("Id_Player")->references("Id_Player")->on("Jugadores")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
