<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('hak_akses_id')->unsigned();
            $table->string('nama_profile');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('lokasi_gambar');
            $table->timestamps();
        });

        Schema::table('profiles', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('profiles', function (Blueprint $table){
            $table->foreign('hak_akses_id')->references('id')->on('hak_akses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
