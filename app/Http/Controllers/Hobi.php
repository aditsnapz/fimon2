<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
class Hobi extends Controller
{
    public function hobi(Request $request){
    
    	if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data =  DB::table('hobi')->get();
        
        return view('pages.hobi',['data' => $data]); 
    }
}
