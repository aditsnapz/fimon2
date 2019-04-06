<?php

namespace App\Http\Controllers;

use Hash;
use DB;
use App\AdminModel;
use Illuminate\Http\Request;
use Validate;

class AuthAdmin extends Controller
{
    public function login(Request $request) {


        if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data = AdminModel::get([['username',  $request->session()->get('username')]])->first();
        // dd($data);
        return view('pages.dashboard', ['data' => $data]); 
        
    }

    public function loginattempt(Request $request) {
        
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);
        $attempts = [
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'foto' => $request->foto,
        ];
        $attempt = AdminModel::value([['username',$request->username]],'password');
        
        
        if($attempt != null && Hash::check($attempts['password'],$attempt)) {
            $request->session()->put('username', $attempts['username']); 
        }
        return redirect()->route('index');
    }

    public function logout(Request $request) {
        if($request->session()->get('username') != null) {
            $request->session()->forget('username');
            $request->session()->forget('nama');
            $request->session()->forget('foto');
        }
       
        return redirect()->route('index');    
    }

    

    
}
