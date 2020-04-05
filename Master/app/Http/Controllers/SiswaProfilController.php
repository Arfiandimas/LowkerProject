<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Siswa;
use App\Perusahaan;
use App\User;

class SiswaProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $siswa = Siswa::get();
        if( $user == null ){
            abort(403,'Anda tidak punya akses ke halaman ini silahkan login');
        }else{
            $users = User::where('id', auth()->user()->id)->get();
            $stat = Auth::user()->status;
            if($stat == 'perusahaan'){
                abort(403,'Anda tidak punya akses ke halaman ini');
            }
            return view('siswa.profilsiswa', compact('users', 'user', 'siswa'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user)->get('user_id')->first();
        
        if(  $siswa['user_id'] != $user ){
            $siswa = siswa::create([
                'user_id' => Auth::user()->id,
                'password' => Auth::user()->password,
                'nama_depan' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
            return redirect()->route('siswa.index');
        }else{
            return redirect()->route('siswa.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        Siswa::where('user_id', auth()->user()->id)->update([
            'nama_depan' => $request->namadep,
            'nama_belakang' => $request->namabel,
            'email' => $request->email,
            'password' => Auth::user()->password,
            'telepon' => $request->notelp,
            'alamat' => $request->alamat,
            'negara' => $request->negara,
        ]);
        return redirect()->route('siswa.index')->with('success_message', 'Deskripsi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500, 500)->save( public_path('/uploads/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $users = User::where('id', auth()->user()->id)->get();
        $perusahaan = Perusahaan::get();

        return view('siswa.profilsiswa', compact('users', 'perusahaan'), array('user' => Auth::user()));

    }
}
