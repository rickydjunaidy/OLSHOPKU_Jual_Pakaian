<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduk extends Model
{
    protected $fillable = ['produk_id','order_id','jumlah_beli','harga_produk','total_harga_produk'];
    protected $guarded = ['id'];
}
