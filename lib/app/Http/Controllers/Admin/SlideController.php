<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SlideController extends Controller
{
    public function postaddslide(Request $request)
    {
    	 $imageName = $request->file('fImage')->getClientOriginalName();

        
    	 DB::table('vp_slide')->insert([
            
            'sli_title' => $request->title,
            'sli_img' => $imageName,
            'sli_content' => $request->content,
            'sli_status' => $request ->txtNName

            
        ]);
    	 $request->file('fImage')->move(
            base_path() . '/storage/app/avatar/', $imageName
        );
        
        return back();
    }
    public function getlistslide()
    {
    	$data = DB::table('vp_slide')->get();

    	return view('backend.quangcao.danhsach',compact('data')); 
    }
    public function getDeleteslide($id)
    {
    	 DB::table('vp_slide')->where('sli_id',$id)->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa thành công!!!']);
    }
    public function getUpdateSlide($id) {
    	$data1 = DB::table('vp_slide')->where('sli_id',$id)->first();
    	return view('backend.quangcao.sua',compact('data1'));
    }

    public function postUpdateSlide(Request $request, $id)
    {

        $imageName = $request->fImage;
        if ($request->hasFile('fImage')) {
             $filename=$imageName ->getClientOriginalName();
             DB::table('vp_slide')->where('sli_id',$id)
                            ->update([
                            	'sli_title' => $request->title,
                            	'sli_content'=> $request->content,
                                'sli_status'   => $request->txtNName,
                                'sli_img' => $filename
                                ]);
             $imageName ->move(base_path() . '/storage/app/avatar/', $filename);
             
        } else {
            
             DB::table('vp_slide')->where('sli_id',$id)
                            ->update([
                            	'sli_title' => $request->title,
                            	'sli_content'=> $request->content,
                                'sli_status'   => $request->txtNName
                                ]);
        }
         return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Cập nhật slide thành công!!!']);
        
    }
    public function getUpdateStatus(Request $request)
	{
		// $status = $request->txtChance;
		DB::table('vp_slide')
			->where('sli_id',$request->id)
            ->update([
                'sli_status'   => $request->txtChance
                ]);
        return back();
        
	}
}
