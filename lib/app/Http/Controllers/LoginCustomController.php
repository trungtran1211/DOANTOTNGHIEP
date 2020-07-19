<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class LoginCustomController extends Controller
{
    public function getlogincustom(){
         $title = 'login-custom';
        return view('frontend.login1', compact('title'));
    }

	
	public function postlogincustom(Request $request){
         // Kiểm tra dữ liệu nhập vào
		$remember = $request-> has('remember') ? true : false;  
		if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level' =>$request->level = 2],$remember)) {
			if(Auth::check()) {
				
				return redirect('cart/checkout')->with('messenger','Đăng nhập thành công');

			}
		}
		else{
			return redirect('login1')->with('messenger','Đăng nhập không thành công');
		}
		/*return redirect('login1')->with('messenger','Đăng nhập không thành công');*/
    }

    public function getLogout1(){
         Auth::logout();
        return back();
    }

    
    public function postregrister(Request $request){
    	$this->validate(
                $request,
                [
                    /*'name' => 'required|min:5|max:255',
                    'phone' => 'required|min:5|max:255',
                    'street' => 'required|min:5|max:255',
                    'username' => 'required|min:5|max:25',*/
                    'password' => 'required|min:5|max:25',
                    'cfpassword' => 'required|min:5|max:25|same:password',
                    'email' => 'required|email|unique:vp_users'
                ],

                [
                     
                    /*'required' => '*:attribute không được để trống',
                    'min' => '*do dai cua :attribute phai nhieu hon :min ky tu',
                    'max' => '*:attribute không được lớn hơn :max ky tu',*/
                    'same' => 'Password khong khớp',
                    'unique' => '*:attribute đã tồn tại'
                ]
            );


        $data = DB::table('vp_users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone'=>$request->phone,
            'password' => bcrypt($request->password),
            'level' => 2
        
        ]);

         return redirect('login1');
    }

    public function getSignUp(){
         $title = 'signup';
        return view('frontend.signup', compact('title'));
    }

}

