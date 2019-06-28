<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('clientes_rut')->unsigned()->index();
            $table->foreign('clientes_rut')->references('rut')->on('clientes')->onDelete('cascade');
            $table->biginteger('estado_perstamo_id')->unsigned()->index();
            $table->foreign('estado_perstamo_id')->references('id')->on('estado_prestamo')->onDelete('cascade');
            $table->biginteger('products_id')->unsigned()->index();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');

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
        Schema::dropIfExists('prestamos');
    }
}
