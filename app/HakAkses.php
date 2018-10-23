<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    protected $fillable = ['nama_hak_akses'];
    protected $guarded = ['id'];

    public function profile()
    {
        return $this->hasMany('App\Profile','hak_akses_id');
    }
}
