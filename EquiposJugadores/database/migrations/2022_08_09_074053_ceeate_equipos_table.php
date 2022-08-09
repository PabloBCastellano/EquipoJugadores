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
        Schema::create('Equipos', function (Blueprint $table) {
            $table->id("Id_Team");
            $table->string('Name_Team');
            /*$table->unsignedBigInteger("Id_Player")->unique();
            $table->foreign("Id_Player")
            ->references("Id_Player")->on("Jugadores")
            ->onDelete("cascade")
            ->onUpdate("cascade");*/

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::drop('Equipos');
    }

};
