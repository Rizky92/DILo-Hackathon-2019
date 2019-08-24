<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

<<<<<<< HEAD:database/migrations/2019_08_24_084431_create_event_cats_table.php
class CreateEventCatsTable extends Migration
=======
class CreateEventCommitteesTable extends Migration
>>>>>>> d4db1b6d601bc8913dccf262599bd47c8ac92dbd:database/migrations/2019_08_24_084416_create_event_committees_table.php
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2019_08_24_084431_create_event_cats_table.php
        Schema::create('event_cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
=======
        Schema::create('event_committees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('role');
            $table->string('tel')->unique();
            $table->string('email')->unique();
>>>>>>> d4db1b6d601bc8913dccf262599bd47c8ac92dbd:database/migrations/2019_08_24_084416_create_event_committees_table.php
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
<<<<<<< HEAD:database/migrations/2019_08_24_084431_create_event_cats_table.php
        Schema::drop('event_cats');
=======
        Schema::drop('event_committees');
>>>>>>> d4db1b6d601bc8913dccf262599bd47c8ac92dbd:database/migrations/2019_08_24_084416_create_event_committees_table.php
    }
}
