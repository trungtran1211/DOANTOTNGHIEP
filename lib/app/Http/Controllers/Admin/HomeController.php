<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    //
    public function getHome(){
    	return view('backend.index');
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('login');
    }
}
