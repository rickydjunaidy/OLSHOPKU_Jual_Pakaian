<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\HakAkses;
use App\Order;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use File;

class ProfileController extends Controller
{
    //untuk user
    public function index()
    {
        $data = Profile::where('id',session('user')->profile->id)->first();
        return view('profile/home',['data'=>$data]);
    }

    public function update(Request $request)
    {
        if($request->hasFile('gambar')) #cek ada gambar atau tidak ketika diedit
        {
            $filename = session('user')->profile->id.time().'.png';
            $request->file('gambar')->storeAs('public/profile',$filename);

            $gambar_lama = Profile::where('id',session('user')->profile->id)->first(); #memasukan nama file gambar lama
            $gambar_lama = $gambar_lama->lokasi_gambar;

            if(!empty($gambar_lama)) #cek gambar dan delete gambar lama di database
            {
                File::delete(public_path('profile/'.$gambar_lama));
            }

            Profile::where('id',session('user')->profile->id)
            ->update([
                'lokasi_gambar' => $filename,
            ]);

        }

            Profile::where('id',session('user')->profile->id)
            ->update([
            'nama_profile' =>$request->nama_profile,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            ]);

            $orderTerbaru = Order::where('profile_id',session('user')->profile->id)->orderBy('id', 'DESC')->first();
            session(['orderterbaru'=>$orderTerbaru]);

            return redirect('/home');
    }

    //untuk admin
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
            'password' => Hash::make($request->password)
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

            if(!empty($gambar_lama)) #cek gambar dan delete gambar lama di database
            {
                File::delete(public_path('profile/'.$gambar_lama));
            }

            Profile::where('id',$request->id)
            ->update([
                'lokasi_gambar' => $filename,
            ]);

        }

        Profile::where('id',$request->id)
        ->update([
        'hak_akses_id' => $request->hak_akses_id,
        'nama_profile' =>$request->nama_profile,
        'tanggal_lahir' =>$request->tanggal_lahir,
        'alamat' =>$request->alamat,
        ]);

        $user = Auth::user(); //data login simpan ke session
        session(['user'=>$user]);
        
        return redirect('admin/profile');
    }

    public function admindestroy($id)
    {
        Profile::where('id', $id)->delete();
        return redirect('admin/profile');
    }
}
