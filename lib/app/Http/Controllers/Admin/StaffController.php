<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StaffController extends Controller
{
    public function postAddStaff(Request $request){
    	
         $data = DB::table('vp_users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'level' => 1
        	
        ]);
        return back();
    }
    public function getListstaff()
    {
    	$data1 = DB::table('vp_users')->where('level',1)->orderBy('id','DESC')->get();
    	return view('backend.nhanvien.danhsach',compact('data1'));
    }
    public function getDeletestaff($id)
    {
        DB::table('vp_users')->where('id',$id)->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!!!']);
    }
}
