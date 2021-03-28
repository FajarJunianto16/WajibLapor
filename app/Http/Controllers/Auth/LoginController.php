<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use DB;
use App\Model\Petugas;


class LoginController extends Controller

{
    use AuthenticatesUsers;
    //login untuk masyarakat
     public function FormLoginMasyarakat()
    {
       return view('auth.login');
    }

    public function LoginMasyarakat()
    {
        $auth = request()->only('username','password');
        if(Auth()->guard('masyarakat')->attempt($auth))

       {
        return redirect()->to('/pengaduan');
       }
    }

    //login untuk petugas
    public function FormLoginpetugas()
    {
        return view('petugas.auth.login');
    }

    public function Loginpetugas(){

        $auth = request()->only('username','password');
        if(Auth()->guard('petugas')->attempt($auth))
        {
            if(Auth()->guard('petugas')->user()->level == "petugas")
        {

                return redirect()->to('/petugas/pengaduan');

            }else if(Auth()->guard('petugas')->user()->level == "admin")
            {
                return redirect()->to('/admin');

            }

            }else {
                return redirect()->to('/petugas/login');


            }
        }


        }








     // $userdata = array(
    //     'username' => Input::get('username'),
    //     'password' => Input::get('password'),
    //     'level' => 'petugas',
    // );

    // if (Auth::guard('petugas')->attempt($userdata)) {
    //     return Redirect::intended('/petugas/pengaduan');

    // }else{
    //     return redirect()->to('/petugas/login');
    // }



    // $auth = request()->only('username','password');
    // if(Auth()->guard('petugas')->attempt($auth));
    // {

    //     if(Auth()->guard('petugas')->user()->level == "petugas")
    // {
    //         return redirect()->to('/petugas/pengaduan');


    //     }else if (Auth()->guard('petugas')->user()->level == "admin") {
    //         return redirect()->to('/pengaduan');

    //     }

    //     return redirect()->to('/petugas/login');

    //     }

    //     }

    // $userdata = array(
    //     'username' => Input::get('username'),
    //     'password' => Input::get('password'),
    //     'level' => 'petugas',
    // );

    // if (Auth::guard('petugas')->attempt($userdata)) {
    //     return Redirect::intended('/petugas/pengaduan');

    // }else{
    //     return redirect()->to('/petugas/login');
    // }

    // if (Auth::attempt($request->only('username','password'))) {

    //     $akun = DB::table('petugas')->where('username', $request->username)->first();
    //     if ($akun->role == 'admin') {

    //         Auth::guard('admin')->loginUsingId($akun->id);
    //         return redirect('/petugas/pengaduan')->with('sukses','anda berhasil login');


    //     }else if ($akun->role == 'petugas') {

    //         Auth::guard('petugas')->loginUsingId($akun->id);
    //         return redirect('/petugas/pengaduan')->with('sukses','anda berhasil login');


    //     }

    // }



















