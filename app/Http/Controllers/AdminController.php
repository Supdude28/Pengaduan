<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('Administrator.Login');
    }
    public function ceklogin(Request $request){
        $dang = new Petugas();
        $dang = $dang->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($dang->exists()){
            session ([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/admin');
        }
        return back();
    }

    public function logout(){
        session()->flush();
        return back();
    }
}
