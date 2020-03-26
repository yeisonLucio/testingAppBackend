<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->bigIncrements('id_tarea');
            $table->string('nombre_tarea');
            $table->string('codigo_tarea');
            $table->string('descripcion');
            $table->string('servidor');
            $table->string('estado');
            $table->bigInteger('proyecto_id')->unsigned()->index();
            $table->bigInteger('material_id')->unsigned()->nullable()->index();
            $table->foreign('proyecto_id')->references('id_proyecto')->on('proyecto');
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
        Schema::dropIfExists('tarea');
    }
}
