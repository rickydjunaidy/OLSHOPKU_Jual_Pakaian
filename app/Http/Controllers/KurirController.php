<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Kurir;

class KurirController extends Controller
{
    public function adminindex()
    {
        $data = Kurir::all();
        return view('admin/kurir/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = Kurir::where('id',$id)->first();
        return view('admin/kurir/show',['data'=>$data]);
    }

    public function adminadd()
    {
        return view('admin/kurir/add');
    }

    public function adminstore(Request $request)
    {
        Kurir::create([
            'nama_kurir' => $request->nama_kurir,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('admin/kurir');
    }

    public function adminedit($id)
    {
        $edit = Kurir::where('id',$id)->first();

        return view('admin/kurir/edit',['data'=> $edit]);
    }

    public function adminupdate(Request $request)
    {
        Kurir::where('id',$request->id)
        ->update([
            'nama_kurir' =>$request->nama_kurir,
            'no_telepon' => $request->no_telepon
        ]);

        return redirect('admin/kurir');
    }

    public function admindestroy($id)
    {
        Kurir::where('id', $id)->delete();

        return redirect('admin/kurir');
    }
}