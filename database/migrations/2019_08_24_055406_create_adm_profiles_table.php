<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmProfilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->date('tgl_lahir');
            $table->enum('jk', ['male','female']);
            $table->text('alamat');
            $table->string('no_hp')->unique(25);
            $table->string('email')->unique();
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
        Schema::drop('adm_profiles');
    }
}
