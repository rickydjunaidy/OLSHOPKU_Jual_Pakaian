<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produk_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->string('jumlah_beli');
            $table->string('harga_produk');
            $table->integer('total_harga_produk'); 
            $table->timestamps();
        });

        Schema::table('order_produks', function (Blueprint $table){
            $table->foreign('produk_id')->references('id')->on('produks');
        });

        Schema::table('order_produks', function (Blueprint $table){
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_produks');
    }
}
