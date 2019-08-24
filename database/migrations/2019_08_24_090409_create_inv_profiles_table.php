<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc_profile');
            $table->string('address');
            $table->string('owner');
            $table->string('coords');
            $table->string('email')->unique();
            $table->string('telp')->unique();
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
        Schema::drop('inv_profiles');
    }
}
