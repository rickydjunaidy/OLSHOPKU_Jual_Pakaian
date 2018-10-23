<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->integer('kurir_id')->unsigned();
            $table->string('status_pembayaran');
            $table->string('status_pengiriman');
            $table->integer('total_harga');            
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table){
            $table->foreign('profile_id')->references('id')->on('profiles');
        });

        Schema::table('orders', function (Blueprint $table){
            $table->foreign('kurir_id')->references('id')->on('kurirs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
