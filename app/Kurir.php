<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $fillable = ['nama_kurir','no_telepon'];
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasmany('App\Order','kurir_id');
    }
}
