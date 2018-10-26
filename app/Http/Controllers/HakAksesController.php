<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\HakAkses;

class HakAksesController extends Controller
{
    public function adminindex()
    {
        $data = HakAkses::all();
        return view('admin/hak_akses/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = HakAkses::where('id',$id)->first();
        return view('admin/hak_akses/show',['data'=>$data]);
    }

    public function adminadd()
    {
        return view('admin/hak_akses/add');
    }

    public function adminstore(Request $request)
    {
        HakAkses::create([
            'nama_hak_akses' => $request->nama_hak_akses,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('admin/hak_akses');
    }

    public function adminedit($id)
    {
        $edit = HakAkses::where('id',$id)->first();

        return view('admin/hak_akses/edit',['data'=> $edit]);
    }

    public function adminupdate(Request $request)
    {
        HakAkses::where('id',$request->id)
        ->update([
            'nama_hak_akses' =>$request->nama_hak_akses
        ]);

        return redirect('admin/hak_akses');
    }

    public function admindestroy($id)
    {
        HakAkses::where('id', $id)->delete();
        return redirect('admin/hak_akses');
    }
}
