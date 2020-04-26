<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Perusahaan;
use App\Siswa;
use DB;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password','status'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            $stat = $request->status;
            //dd($akun);
            if($stat == 'perusahaan'){
                if($akun->status =='perusahaan'){
                    Auth::guard('perusahaan')->LoginUsingId($akun->id);
                    return redirect('/')->with('sukses','Anda Berhasil Login');
                }
            }elseif($stat =='siswa'){
                if($akun->status =='siswa'){
                    Auth::guard('siswa')->LoginUsingId($akun->id);
                    return redirect('/')->with('sukses','Anda Berhasil Login');
                }
            }
        }
        return redirect('/')->with(['error' => 'silahkan login di halaman perusahaan']);
    }

}
