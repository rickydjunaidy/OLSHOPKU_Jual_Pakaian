<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillables = ['nama_produk'];
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasmany('App\Produk','kategori_id');
    }
}
