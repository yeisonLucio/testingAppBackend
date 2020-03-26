<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Escenario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escenario', function (Blueprint $table) {
            $table->bigIncrements('id_escenario');
            $table->string('titulo');
            $table->string('resultado_actual');
            $table->string('resultado_previsto');
            $table->string('pasos_para_reproducir')->nullable();
            $table->string('severidad_error')->nullable();
            $table->string('nota_adicional')->nullable();
            $table->string('estado');
            $table->bigInteger('test_id')->unsigned()->index();
            $table->bigInteger('material_id')->unsigned()->nullable()->index();
            $table->foreign('test_id')->references('id_test')->on('test');
            $table->foreign('material_id')->references('id_material')->on('material');
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
        Schema::dropIfExists('escenario');
    }
}
