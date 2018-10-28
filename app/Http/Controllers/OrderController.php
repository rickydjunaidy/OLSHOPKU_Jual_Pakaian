<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Kurir;
use App\Profile;
use App\OrderProduk;
use File;
class OrderController extends Controller
{
    public function index()
    {
        $data = Order::where('profile_id',session('user')->profile->id)->get();
        return view('order/home',['data'=>$data]);
    }

    public function checkout($id)
    {
        if(session('user')->profile->id != Order::where('id',$id)->first()->profile_id || session('orderterbaru')->status_pembayaran == "READY")
        {
            return redirect ('order');
        }

        $kurir = Kurir::all();
        $order = Order::where('id',$id)->first();


        return view ('order/checkout',['kurir'=>$kurir,'order'=>$order]);

    }

    public function pembayaran($id)
    {
        if(session('user')->profile->id != Order::where('id',$id)->first()->profile_id || session('orderterbaru')->status_pembayaran == "LUNAS")
        {
            return redirect ('order');
        }

        $order = Order::where('id',$id)->update([
            'status_pembayaran' =>"READY",
        ]);

        $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
        session(['orderterbaru'=>$orderTerbaru]);

        return view ('order/pembayaran');
    }

    public function uploadpembayaran(Request $request)
    {
        $filename = session('orderterbaru')->id.time().'.png';
        $request->file('gambar')->storeAs('public/bukti_pembayaran',$filename);

        Order::where('id',session('orderterbaru')->id)
        ->update([
            'status_pembayaran' =>"ADMIN CHECK",
            'bukti_pembayaran' =>$filename
        ]);

        //disini order akan diperbaharui agar user bisa bertransaksi lagi.
        Order::create([
            'profile_id' => session('user')->profile->id,
            'kurir_id' => 1,
            'status_pembayaran' =>"BELUM LUNAS",
            'status_pengiriman' =>"BELUM DIKIRIM",
            'bukti_pembayaran' =>"awal",
            'total_harga' => 0
        ]);

        $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
        session(['orderterbaru'=>$orderTerbaru]);

        $data = Order::where('profile_id',session('user')->profile->id)->get();
        return view('order/home',['data'=>$data]);
    }

    public function cancelpembayaran()
    {
        Order::where('id',session('orderterbaru')->id)
        ->update([
            'status_pembayaran' =>"BELUM LUNAS",
        ]);

        $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
        session(['orderterbaru'=>$orderTerbaru]);

        $data = Order::where('profile_id',session('user')->profile->id)->get();
        return view('order/home',['data'=>$data]);
    }


//admin only
    public function adminindex()
    {
        $data = Order::all();
        return view('admin/order/home',['data'=>$data]);
    }

    public function admincekbuktipembayaran()
    {
        $data = Order::where('status_pembayaran','ADMIN CHECK')->get();
        return view('admin/order/home',['data'=>$data]);
    }

    public function admincekpengiriman()
    {
        $data = Order::where('status_pembayaran','LUNAS')->where('status_pengiriman','!=','BARANG TIBA')->get();
        return view('admin/order/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = Order::where('id',$id)->first();

        //dd($data->orderproduk);
        return view('admin/order/show',['data'=>$data]);
    }

    public function adminadd()
    {
        $profile = Profile::all();
        $kurir = Kurir::all();
        return view('admin/order/add',['profile'=>$profile,'kurir'=>$kurir]);
    }

    public function adminstore(Request $request)
    {
        Order::create([
            'profile_id' => $request->profile_id,
            'kurir_id' => $request->kurir_id,
            'status_pembayaran' =>$request->status_pembayaran,
            'status_pengiriman' =>$request->status_pengiriman,
            'bukti_pembayaran' =>$request->bukti_pembayaran,
            'total_harga' =>$request->total_harga
        ]);

        return redirect('admin/order');
    }

    public function adminedit($id)
    {
        $edit = Order::where('id',$id)->first();
        $profile = Profile::all();
        $kurir = Kurir::all();

        return view('admin/order/edit',['data'=> $edit, 'profile'=>$profile,'kurir'=>$kurir]);
    }

    public function adminupdate(Request $request)
    {
        Order::where('id',$request->id)
        ->update([
            'status_pembayaran' =>$request->status_pembayaran,
            'status_pengiriman' =>$request->status_pengiriman,
            'total_harga' =>$request->total_harga,
        ]);
        
        return redirect('admin/order');
    }

    public function admindestroy($id)
    {
        Order::where('id', $id)->delete();
        return redirect('admin/order');
    }
}