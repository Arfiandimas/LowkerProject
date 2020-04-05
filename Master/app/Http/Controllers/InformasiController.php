<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Perusahaan;
use App\User;

class InformasiController extends Controller
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
            abort(403,'Anda tidak punya akses ke halaman ini');
        }else{
            $users = User::where('id', auth()->user()->id)->get();
            $stat = Auth::user()->status;
            if($stat == 'siswa'){
                abort(403,'Anda tidak punya akses ke halaman ini');
            }
            return view('perusahaan.informasi', compact('users', 'perusahaan'));
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
        //
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
    public function update(Request $request, Perusahaan $perusahaan)
    {
        Perusahaan::where('user_id', auth()->user()->id)->update([
            'direktur' => $request->direktur,
            'email' => $request->email,
            'email_lain' => $request->email_lain,
            'nomor_tlp' => $request->notelp,
        ]);
        return redirect()->route('informasiperusahaan.index')->with('success_message', 'Deskripsi berhasil diperbarui');
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
}
