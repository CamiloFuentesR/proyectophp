<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoPrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_prestamo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('prestamos_id')->unsigned()->index();
            $table->foreign('prestamos_id')->references('id')->on('prestamos')->onDelete('cascade');
            $table->biginteger('estado_id')->unsigned()->index();
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
            $table->string('name');
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
        Schema::dropIfExists('estado_prestamo');
    }
}
