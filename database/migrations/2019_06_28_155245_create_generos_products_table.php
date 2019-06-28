<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('generos_id')->unsigned()->index();
            $table->foreign('generos_id')->references('id')->on('generos')->onDelete('cascade');
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
        Schema::dropIfExists('generos_products');
    }
}
