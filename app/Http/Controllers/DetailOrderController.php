<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderProduk;
use App\Produk;
use App\Order;

use App\Profile;

class DetailOrderController extends Controller
{
    
    public function adminshow($id)
    {
        $data = Order::where('id',$id)->first();

        //dd($data->orderproduk);
        return view('admin/detailorder/show',['data'=>$data]);
    }

    public function adminadd($id)
    {
        $produk = Produk::all();
        return view('admin/detailorder/add',['data'=>$produk,'id_order'=>$id]);
    }

    public function adminstore(Request $request, $id) //ditambah inputan supaya tidak dobel
    {
        $data = OrderProduk::where('produk_id',$request->produk_id)->where('order_id',$id)->first();
        if($data == NULL){ //input pertama kali, tidak ada produk kedobel
            OrderProduk::create([
                'produk_id' => $request->produk_id,
                'order_id' => $id,
                'jumlah_beli' =>$request->jumlah_beli,
                'harga_produk' =>$request->harga_produk,
                'total_harga_produk' => $request->jumlah_beli * $request->harga_produk,
            ]);
        }
        else { //add data berulang
            $jumlah_beli = $data->jumlah_beli; //ambil di tabel data sebelumnya
            $jumlah_beli += $request->jumlah_beli; //ditambahkan dengan data yang baru

            OrderProduk::where('produk_id',$request->produk_id)->where('order_id',$id)->update([
                'jumlah_beli' =>$jumlah_beli,
                'harga_produk' => $request->harga_produk,
                'total_harga_produk' => $jumlah_beli * $request->harga_produk,
            ]);
        }

        //hitung total di semua orderproduk berdasarkan order_id
        $total = OrderProduk::where('order_id',$id)->get();
        $hasil = 0;

        foreach($total as $total)
        {
            $hasil += $total->total_harga_produk;
        }

        Order::where('id',$id)
        ->update([
            'total_harga' => $hasil
            ]);
        /////////////////////////////////////////////////////////

        $data = Order::where('id',$id)->first();

        return redirect('admin/order/show/'.$id);
    }

    public function admindestroy($id,$id2)
    {
        $total = Order::where('id',$id)->first()->total_harga;
        $total2 = OrderProduk::where('id',$id2)->first()->total_harga_produk;
        $total -= $total2;

        Order::where('id',$id)->update([
            'total_harga' => $total
        ]);

        OrderProduk::where('id', $id2)->delete();
        return redirect('admin/order/show/'.$id);
    }
}
