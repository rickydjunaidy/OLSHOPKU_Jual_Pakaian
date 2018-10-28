<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); //data login simpan ke session
        session(['user'=>$user]);

        if(session('user')->profile->hak_akses->nama_hak_akses == "admin")
        {
            $order = Order::all(); //data login simpan ke session
            session(['order'=>$order]);

            return view('admin/home/home');
        }

        $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
        //dd($orderTerbaru);
        if($orderTerbaru == NULL)
        {
            Order::create([
                'profile_id' => session('user')->profile->id,
                'kurir_id' => 1,
                'status_pembayaran' =>"BELUM LUNAS",
                'status_pengiriman' =>"BELUM DIKIRIM",
                'bukti_pembayaran' =>"awal",
                'total_harga' =>0
            ]);
        }

        $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
        session(['orderterbaru'=>$orderTerbaru]);

        return view('home/home');
    }
}
