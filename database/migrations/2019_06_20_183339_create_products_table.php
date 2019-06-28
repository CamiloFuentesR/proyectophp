<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use PhpParser\Node\Expr\Cast\String_;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tittle');
            $table->string('description');
            $table->biginteger('authors_id')->unsigned()->index();
            $table->foreign('authors_id')->references('id')->on('authors')->onDelete('cascade');
            $table->biginteger('products_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('products')->onDelete('cascade');
            $table->biginteger('generos_id')->unsigned()->index();
            $table->foreign('geneross_id')->references('id')->on('generos')->onDelete('cascade');
            $table->biginteger('editorials_id')->unsigned()->index();
            $table->foreign('editorials_id')->references('id')->on('editorials')->onDelete('cascade');
            $table->biginteger('seccions_id')->unsigned()->index();
            $table->foreign('seccions_id')->references('id')->on('seccions')->onDelete('cascade');


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
        Schema::dropIfExists('products');
    }
}
