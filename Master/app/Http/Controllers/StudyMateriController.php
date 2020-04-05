<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;

class StudyMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if( $user == null ){
            abort(403,'Anda tidak punya akses ke halaman ini silahkan login');
        }else{
            $users = User::where('id', auth()->user()->id)->get();
            $stat = Auth::user()->status;
            if($stat == 'perusahaan'){
                abort(403,'Anda tidak punya akses ke halaman ini');
            }else{
                $user = auth()->user()->id;
                $sisa = Siswa::where('user_id', $user)->get('status')->first();
                if($sisa['status'] == 'belum bayar'){
                    abort(403,'Anda belum membeli fitur belajar online');
                }
                return view('study.materi', compact('users', 'user'));
            }
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
    public function update(Request $request, $id)
    {
        //
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
