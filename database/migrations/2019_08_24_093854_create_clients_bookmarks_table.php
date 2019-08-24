<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsBookmarksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('tourism_id')->unsigned();
            $table->date('date');
            $table->string('title', 100);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('users_id')->references('id')->on('clients_users');
            $table->foreign('tourism_id')->references('id')->on('tourism_dests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients_bookmarks');
    }
}
