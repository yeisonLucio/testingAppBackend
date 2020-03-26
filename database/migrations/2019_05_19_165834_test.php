<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id_test');
            $table->string('nombre_test');
            $table->string('estado');
            $table->bigInteger('usuario_id')->unsigned()->index();
            $table->bigInteger('tarea_id')->unsigned()->index();
            $table->bigInteger('material_id')->unsigned()->nullable()->index();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('tarea_id')->references('id_tarea')->on('tarea');
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
        Schema::dropIfExists('test');
    }
}
