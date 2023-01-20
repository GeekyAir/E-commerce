<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name') ;
            $table->string('short_description');
            $table->string('description') ;
            $table->integer('old_point') ;
            $table->integer('point') ;
            $table->string('main_img');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('country');
            $table->string('qnt');
            $table->integer('valdiation') ;
            $table->string('size');
            $table->string('store_conditions');
            $table->integer('cat_id') ;
           $table->integer('sub_cat_id') ;
            $table->integer('available') ;
            $table->integer('type') ;




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
