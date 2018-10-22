<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function adminindex()
    {
        return view('admin/kategori/home');
    }
}
