<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamp('fecha_nacimiento');
            $table->integer('dni');
            $table->integer('id_pais')->nullable()->unsigned();
            $table->string('direccion_postal');
            $table->text('trayectoria')->nullable();
            $table->integer('celular');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->text('estudios');
            $table->string('disponibilidad');
            $table->string('carta_solicitud');
            $table->string('aval_personal');
            $table->string('curriculum');
            $table->string('recibo_sueldo_1');
            $table->string('recibo_sueldo_2');
            $table->string('recibo_sueldo_3');
            $table->string('foto');
            $table->string('analitico');
            $table->string('scan_dni');
            $table->string('matricula');
            $table->string('como_se_entero');
            $table->string('otro_beneficio');




            $table->timestamps();

            $table->foreign('id_pais')->references('id')->on('paises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate');
    }
}
