<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kategori;
use App\Produk;
use File;

class ProdukController extends Controller
{
    public function adminindex()
    {
        $data = Produk::all();
        return view('admin/produk/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = Produk::where('id',$id)->first();
        return view('admin/produk/show',['data'=>$data]);
    }

    public function adminadd()
    {
        $kategori = Kategori::all();
        return view('admin/produk/add',['kategori'=>$kategori]);
    }

    public function adminstore(Request $request)
    {
        $filename = $request->id.time().'.png';
        $request->file('gambar')->storeAs('public/produk',$filename);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request->kategori_id,
            'deskripsi_produk' =>$request->deskripsi_produk,
            'harga' =>$request->harga,
            'stok_barang' =>$request->stok_barang,
            'lokasi_gambar' =>$filename
        ]);

        return redirect('admin/produk');
    }

    public function adminedit($id)
    {
        $edit = Produk::where('id',$id)->first();
        $kategori = Kategori::all();

        return view('admin/produk/edit',['data'=> $edit, 'kategori'=>$kategori]);
    }

    public function adminupdate(Request $request)
    {
        if($request->hasFile('gambar')) #cek ada gambar atau tidak ketika diedit
        {
            $filename = $request->id.time().'.png';
            $request->file('gambar')->storeAs('public/produk',$filename);

            $gambar_lama = Produk::where('id',$request->id)->first(); #memasukan nama file gambar lama
            $gambar_lama = $gambar_lama->lokasi_gambar;

            if(!empty($gambar_lama)) #cek gambar lama di database
            {
                File::delete(public_path('produk/'.$gambar_lama));
            }

            Produk::where('id',$request->id)
            ->update([
                'lokasi_gambar' => $filename,
            ]);

        }

        Produk::where('id',$request->id)
        ->update([
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request->kategori_id,
            'deskripsi_produk' =>$request->deskripsi_produk,
            'harga' =>$request->harga,
            'stok_barang' =>$request->stok_barang,
        ]);
        
        return redirect('admin/produk');
    }

    public function admindestroy($id)
    {
        Produk::where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
