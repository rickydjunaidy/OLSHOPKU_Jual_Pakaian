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
        return view('order/home');
    }

    public function pembayaran($id)
    {
        return view ('order/pembayaran');
    }


//admin only
    public function adminindex()
    {
        $data = Order::all();
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
            'profile_id' => $request->profile_id,
            'kurir_id' => $request->kurir_id,
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