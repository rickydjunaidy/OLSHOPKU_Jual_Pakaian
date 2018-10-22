<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailOrderController extends Controller
{
    public function index($id)
    {
        return view ('detail_order/home');
    }
}
