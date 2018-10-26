<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\HakAkses;
use File;

class ProfileController extends Controller
{
    public function adminindex()
    {
        $data = Profile::all();
        return view('admin/profile/home',['data'=>$data]);
    }

    public function adminshow($id)
    {
        $data = Profile::where('id',$id)->first();
        return view('admin/profile/show',['data'=>$data]);
    }

    public function adminadd()
    {
        $user = User::all();
        $hak_akses = HakAkses::all();
        return view('admin/profile/add',['user'=>$user,'hak_akses'=>$hak_akses]);
    }

    public function adminstore(Request $request)
    {
        $filename = $request->id.time().'.png';
        $request->file('gambar')->storeAs('public/profile',$filename);

        User::create([
            'name' => $request->nama_profile,
            'email' => $request->email,
            'password' => $request->password
        ]);
  
        $idUser = User::where('email',$request->email)->first();
        
        Profile::create([
            'user_id' => $idUser->id,
            'hak_akses_id' => $request->hak_akses_id,
            'nama_profile' =>$request->nama_profile,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'lokasi_gambar' =>$filename
        ]);

        return redirect('admin/profile');
    }

    public function adminedit($id)
    {
        $edit = Profile::where('id',$id)->first();
        $user = User::all();
        $hak_akses = HakAkses::all();

        return view('admin/profile/edit',['data'=> $edit, 'user'=>$user, 'hak_akses'=>$hak_akses]);
    }

    public function adminupdate(Request $request)
    {
        if($request->hasFile('gambar')) #cek ada gambar atau tidak ketika diedit
        {
            $filename = $request->id.time().'.png';
            $request->file('gambar')->storeAs('public/profile',$filename);

            $gambar_lama = Profile::where('id',$request->id)->first(); #memasukan nama file gambar lama
            $gambar_lama = $gambar_lama->lokasi_gambar;

            if(!empty($gambar_lama)) #cek gambar lama di database
            {
                File::delete(public_path('profile/'.$gambar_lama));
            }

            Profile::where('id',$request->id)
            ->update([
                'loaksi-gambar' => $filename,
            ]);

        }

        Profile::where('id',$request->id)
        ->update([
        'user_id' => $request->user_id,
        'hak_akses_id' => $request->hak_akses_id,
        'nama_profile' =>$request->nama_profile,
        'tanggal_lahir' =>$request->tanggal_lahir,
        'alamat' =>$request->alamat,
        ]);
        
        return redirect('admin/profile');
    }

    public function admindestroy($id)
    {
        Profile::where('id', $id)->delete();
        return redirect('admin/profile');
    }
}
