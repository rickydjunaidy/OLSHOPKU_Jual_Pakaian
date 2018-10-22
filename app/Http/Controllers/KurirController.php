<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function adminindex()
    {
        return view('admin/kurir/home');
    }
}
