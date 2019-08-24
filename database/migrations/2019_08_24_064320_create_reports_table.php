<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('target');
            $table->integer('achieved');
            $table->integer('num_of_reservations');
            $table->integer('num_of_visitors');
            $table->integer('income_amount');
            $table->integer('costs');
            $table->integer('profit');
            $table->double('margin');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reports');
    }
}
