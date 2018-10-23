<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order/home');
    }

    public function pembayaran($id)
    {
        return view ('order/pembayaran');
    }
}