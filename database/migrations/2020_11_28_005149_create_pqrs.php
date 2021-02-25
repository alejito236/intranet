<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->increments('id_pqrs');
            $table->string('cuerpo_pqrs');
            $table->string('apellido_pqrs');
            $table->string('email_pqrs');
            $table->string('tipoid_pqrs');
            $table->string('numeroid_pqrs');
            $table->string('telefono_pqrs');
            $table->string('tiposolicitud_pqrs');
            $table->string('solicitud_pqrs');
            $table->string('contenido_pqrs');
            $table->date('fecha_pqrs');
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
        Schema::dropIfExists('pqrs');
    }
}
