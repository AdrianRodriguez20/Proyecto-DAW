<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicloFormativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_formativos', function (Blueprint $table) {
            $table->string('nombre_ciclo');
            $table->string('nivel');
            $table->string('ley_educativa');
            $table->string('familia_profesional');
            $table->string('dni');
            $table->foreign('dni')
                ->references('dni')->on('alumnos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciclo_formativos');
    }
}
