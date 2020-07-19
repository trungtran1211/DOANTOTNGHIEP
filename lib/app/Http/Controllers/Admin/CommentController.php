<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BinhLuanRequest;
use DB;
use App\Models\Comment;
class CommentController extends Controller
{
    public function getList()
    {
    	$data = DB::table('vp_comment')->orderBy('com_id','DESC')->get();
    	return view('backend.binhluan.danhsach',compact('data'));
    }
    public function getDelete($id)
    {
    	DB::table('vp_comment')->where('com_id',$id)->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!!!']);
    }

    public function getListkh(){
        $i = 1;
        $data1 = DB::table('vp_users')->where('level',2)->orderBy('id','DESC')->get();
        return view('backend.khachhang.danhsach',compact('data1','i'));
    }
    public function getDeletekh($id)
    {
        DB::table('vp_users')->where('id',$id)->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!!!']);
    }
    
    
}
