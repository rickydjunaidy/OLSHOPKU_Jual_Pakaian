<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function adminindex()
    {
        $data = Kategori::all();
        return view('admin/kategori/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = Kategori::where('id',$id)->first();
        return view('admin/kategori/show',['data'=>$data]);
    }

    public function adminadd()
    {
        return view('admin/kategori/add');
    }

    public function adminstore(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('admin/kategori');
    }

    public function adminedit($id)
    {
        $edit = Kategori::where('id',$id)->first();

        return view('admin/kategori/edit',['data'=> $edit]);
    }

    public function adminupdate(Request $request)
    {
        Kategori::where('id',$request->id)
        ->update([
            'nama_kategori' =>$request->nama_kategori
        ]);

        return redirect('admin/kategori');
    }

    public function admindestroy($id)
    {
        Kategori::where('id', $id)->delete();

        return redirect('admin/kategori');
    }

}
