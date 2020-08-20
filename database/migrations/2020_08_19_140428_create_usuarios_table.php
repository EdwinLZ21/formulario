<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre y apellidos',100)->required();
            $table->char("tipo de documento")->required();
            $table->string("número de documento",15)->required();
            $table->string("Correo electrónico",50)->required();
            $table->date("fecha de nacimiento")->format('dd-mm-aaaa');
            $table->string("dirección",150)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
