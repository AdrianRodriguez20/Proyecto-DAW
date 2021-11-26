<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('dni', 9)->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('domicilio');
            $table->integer('cod_postal');
            $table->string('provincia');
            $table->string('localidad');
            $table->integer('telefono_1');
            $table->integer('telefono_2');
            $table->string('email');
            $table->string('certificadoNotas');
            //0->pendiente y 1->resuelto
            $table->boolean('estado')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
