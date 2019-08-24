<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('name', 100);
            $table->integer('id_prod_cats')->unsigned();
            $table->integer('price', 20);
            $table->integer('isAvailable', false, true);
            $table->string('contact_tel')->unique(25);
            $table->string('contact_email')->unique();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_prod_cats')->references('id')->on('prod_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
