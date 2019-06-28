<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('authors_id')->unsigned()->index();
            $table->foreign('authors_id')->references('id')->on('authors')->onDelete('cascade');
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
        Schema::dropIfExists('authors_products');
    }
}
