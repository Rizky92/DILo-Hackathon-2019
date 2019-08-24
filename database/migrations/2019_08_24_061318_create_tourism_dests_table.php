<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourismDestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_dests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('desc');
            $table->text('address');
            $table->string('owner', 100);
            $table->integer('id_des_cats')->unsgined();
            $table->string('coords', 100);
            $table->string('email')->unique();
            $table->string('tel')->unique(25);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_des_cats')->references('id')->on('tourism_des_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tourism_dests');
    }
}
