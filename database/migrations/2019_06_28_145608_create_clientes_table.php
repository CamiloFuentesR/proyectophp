<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('rut')->primary();
            $table->string('name');
            $table->string('last_name');

            $table->string('email')->unique();
            $table->biginteger('addresses_id')->unsigned()->index();
            $table->foreign('addresses_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->biginteger('phones_id')->unsigned()->index();
            $table->foreign('phones_id')->references('id')->on('phones')->onDelete('cascade');


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
        Schema::dropIfExists('clientes');
    }
}
