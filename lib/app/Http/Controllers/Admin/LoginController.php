<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Models\Users;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('backend.login');
    }
    public function postlogin(request $request){
        $email = $request->email;
        $level =  DB::table('vp_users')->select('level')->where('email', $email)->first();
    	$arr = ['email' => $request->email,'password'=>$request->password ];
    	if($request->remember = 'Remember Me'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}
    	if (Auth::attempt($arr,$remember)) {
            if($level = 1){
    		  return redirect()->intended('admin/home');
            }else{
               return redirect()->intended('/'); 
            }
    	}else{
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
    	}
    }
}

