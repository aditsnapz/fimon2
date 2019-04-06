<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
    	if(Session::get('username') != null){
    		return redirect()->route('login.form');
    	}
        
    	return redirect()->route('login.form');
    }
}
