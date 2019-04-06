<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
class Link extends Controller
{
    public function link(Request $request){
    
    	if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data =  DB::table('link')->get();
        
        return view('pages.link',['data' => $data]); 
    }
}
