<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['profile_id','kurir_id','status_pembayaran','status_pengiriman','total_harga'];
    protected $guarded = ['id'];

    public function kurir()
    {
        return $this->belongsTo('App\Kurir');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function produk()
    {
        return $this->belongsToMany('App\Produk','OrderProduk','order_id','produk_id');
    }
}
