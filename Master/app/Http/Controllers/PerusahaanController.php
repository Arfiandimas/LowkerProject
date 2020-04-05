<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Perusahaan;
use App\User;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::get();
        $user = Auth::user();
        if( $user == null ){
            abort(403,'Anda tidak punya akses ke halaman ini silahkan login');
        }else{
            $users = User::where('id', auth()->user()->id)->get();
            $stat = Auth::user()->status;
            if($stat == 'siswa'){
                abort(403,'Anda tidak punya akses ke halaman ini');
            }
            return view('perusahaan.dashboard', compact('users', 'perusahaan'));
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
        $perusahaan = Perusahaan::where('user_id', $user)->get('user_id')->first();
        
        if(  $perusahaan['user_id'] != $user ){
            $perusahaan = Perusahaan::create([
                'user_id' => Auth::user()->id
            ]);
            return redirect()->route('perusahaan.index');
        }else{
            return redirect()->route('perusahaan.index');
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        Perusahaan::where('user_id', auth()->user()->id)->update([
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('perusahaan.index')->with('success_message', 'Deskripsi berhasil diperbarui');
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

        return view('perusahaan.dashboard', compact('users', 'perusahaan'), array('user' => Auth::user()));

    }
}