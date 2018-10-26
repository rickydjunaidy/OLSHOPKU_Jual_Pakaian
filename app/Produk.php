<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['kategori_id','nama_produk','deskripsi_produk','harga','stok_barang','lokasi_gambar'];
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function orderproduk()
    {
        return $this->belongsToMany('App\Order','order_produks','produk_id','order_id')->withPivot('id','jumlah_beli','harga_produk','total_harga_produk');;
    }
}
