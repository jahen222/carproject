<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('path_to_thumbnail')->default('/images/missing.png');
            $table->float('price')->unsigned();
            $table->integer('quantity')->unsigned()->nullable();
            $table->integer('number_of_ratings')->unsigned()->nullable();
            $table->float('ratings_sum')->unsigned()->nullable();
            $table->float('average_rating')->unsigned()->nullable();
            $table->timestamps();

            $table->integer('subcategory_id')->index()->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')
                ->onDelete('cascade');
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
