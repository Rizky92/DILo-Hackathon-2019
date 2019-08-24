<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourismEventsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_event_cats')->unsigned();
            $table->string('desc');
            $table->string('event_holder');
            $table->string('event_holder_tel')->unique();
            $table->string('event_holder_email')->unique();
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time_start');
            $table->time('time_end');
            $table->integer('isDays', false, true);
            $table->int('quota');
            $table->integer('rundown_id')->unsigned();
            $table->integer('tourism_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_event_cats')->references('id')->on('event_cats');
            $table->foreign('rundown_id')->references('id')->on('rundown');
            $table->foreign('tourism_id')->references('id')->on('tourisms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tourism_events');
    }
}
