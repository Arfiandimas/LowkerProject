<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Perusahaan;
use App\Siswa;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('landing', compact('users'));
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
     *a
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
    public function pencarian(Request $request)
    {
        if($request->ajax())
        {
            $query = $request->pencarian;
            $output = "";
            $output2 = "";
            
            $data = User::get();
            $siswa = Siswa::where('nama_depan', 'like', '%'.$query.'%')
                            ->orWhere('nama_belakang', 'like', '%'.$query.'%')
                            ->orWhere('email', 'like', '%'.$query.'%')->get();
            $perusahaan = Perusahaan::where('direktur', 'like', '%'.$query.'%')
                            ->orWhere('deskripsi', 'like', '%'.$query.'%')
                            ->orWhere('email', 'like', '%'.$query.'%')->get();
            $cont1 = $siswa->count();
            $cont2 = $perusahaan->count();
            if($cont1 > 0 || $cont2 > 0)
            {

                foreach($data as $key => $dat){
                    foreach($siswa as $keys => $siwa){
                        if( $dat->id == $siwa->user_id){
                            $output.='<div class="width-1-2@s uk-align-center">'.
                                    '<img src="uploads/avatars/'.$dat->avatar.'" alt="">'.
                                    '</div>'.

                                    '<div class="width-1-2@s" >'.
                                    '<ul class="uk-nav uk-dropdown-nav uk-text-left">'.
                                        '<li> Nama : '.$siwa->nama_depan.'</li>'.
                                        '<li> Email : '.$siwa->email.'</li>'.
                                        '<li> Job :'.$siwa->pekerjaan_diinginkan.'</li>'.
                                    '</ul>'.
                                    '</div>';
                        }
                    }
                    foreach($perusahaan as $keyss => $peru){
                        if($dat->id == $peru->user_id){
                            $output.= '<div class="width-1-2@s uk-align-center">'.
                                    '<img src="uploads/avatars/'.$dat->avatar.'" alt="">'.
                                    '</div>'.

                                    '<div class="width-1-2@s" >'.
                                    '<ul class="uk-nav uk-dropdown-nav uk-text-left">'.
                                        '<li> Nama : '.$peru->direktur.'</li>'.
                                        '<li> Deskripsi : '.$peru->deskripsi.'</li>'.
                                        '<li> Email :'.$peru->email.'</li>'.
                                    '</ul>'.
                                    '</div>';
                        }
                    }
                }
                return Response($output);
            }else{
                $output = '
                        <div class="width-1-2@s" >
                            <ul class="uk-nav uk-dropdown-nav uk-text-left">
                                <li> Data Tidak Ditemukan </li>
                            </ul>
                        </div';
                return Response($output);
            }
        }
    }
}
    