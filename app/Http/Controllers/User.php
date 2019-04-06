<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\UserModel;
class User extends Controller
{
    public function user(Request $request){
    
    	if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data =  DB::table('user')->get();
        
        return view('pages.user',['data' => $data]); 
    }
}
