<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;
use App\Perusahaan;
use App\BuatMagang;
use App\User;

class BuatmagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::get();
        $users = User::where('id', auth()->user()->id)->get();
        return view('perusahaan.buatmagang',  compact('users', 'perusahaan'));
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
    public function update(Request $request, BuatMagang $magang)
    {  
        $usepas = Auth::user()->password;
        $konpas = $request->password;
        $user = auth()->user()->id;
        $perusahaan = Perusahaan::where('user_id', $user)->get('id')->first();
        if( password_verify($konpas, $usepas) ){
            BuatMagang::create([
                'id_perusahaan' => $perusahaan['id'],
                'status_kerjaan' => $request->statkerja,
                'nama_magang' => $request->jobmagang,
                'tentang_magang' => $request->tentangmagang,
                'waktu_kerja' => $request->harian,
                'waktu_kerja' => $request->mingguan,
                'waktu_kerja' => $request->bulanan,
                'waktu_kerja' => $request->tahunan,
                'negara' => $request->negara,
                'kota' => $request->kota,
                'jumlah' => $request->jmlpelamar
            ]);
            return redirect()->route('buatmagangperusahaan.index')->with('success_message', 'Deskripsi berhasil diperbarui');
        }else{
            return redirect()->route('buatmagangperusahaan.index')->with('success_message', 'Password yang anda masukkan salah');
        }
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
