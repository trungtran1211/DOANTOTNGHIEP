<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class BillController extends Controller
{
    public function getbill(){
    	$data = DB::table('vp_bill')->orderBy('bil_id','DESC')->get();
    	return view('backend.donhang.danhsach',compact('data'));
    }
    public function getdelbill($id){
    	DB::table('vp_bill')->where('bil_id',$id)->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!!!']);
    }
    public function getlistBill()
    {
        $title = 'Hóa đơn';
        return view('backend.donhang.sua', compact('title'));
    }
}
