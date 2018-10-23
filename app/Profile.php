<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['hak_akses_id','user_id','nama_profile','tanggal_lahir','alamat','lokasi_gambar'];
    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasMany('App\Order','profile_id');
    }

    public function hak_akses()
    {
        return $this->belongsTo('App\HakAkses');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
