<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['profile_id','kurir_id','status_pembayaran','status_pengiriman','bukti_pembayaran','total_harga'];
    protected $guarded = ['id'];

    public function kurir()
    {
        return $this->belongsTo('App\Kurir');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function orderproduk()
    {
        return $this->belongsToMany('App\Produk','order_produks','order_id','produk_id')->withPivot('id','jumlah_beli','harga_produk','total_harga_produk');
    }
}
