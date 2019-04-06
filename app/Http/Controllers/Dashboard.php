<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\AdminModel;
class Dashboard extends Controller
{
    public function dashboard(Request $request){
    
    	if($request->session()->get('username') == null) {
            return view('login');   
        }
        $data = AdminModel::get([['username',  $request->session()->get('username')]])->first();
        // dd($data);
        return view('pages.dashboard', ['data' => $data]); 
    }
}
