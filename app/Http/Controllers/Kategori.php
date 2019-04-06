<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
class Kategori extends Controller
{
    public function kategori(Request $request){
    
    	if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data =  DB::table('kategori')->get();
        
        return view('pages.kategori',['data' => $data]); 
    }
}
