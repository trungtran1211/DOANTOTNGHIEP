<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Cart;

class FrontendController extends Controller
{
    public function getHome(){
    	$data['featured'] = Product::where('prod_featured',0)->orderBy('prod_id','desc')->take(8)->get();
    	$data['news'] = Product::where('prod_featured',1)->orderBy('prod_id','desc')->take(8)->get();
        $data['new'] = Product::where('prod_featured',2)->orderBy('prod_id','desc')->take(8)->get();
        $cart = Cart::subtotal() != 0 ? Cart::content() : 'Rỗng';
    	return view('frontend.home',$data,compact( 'cart'));
    }
    public function getDetail($id){
    	$data['item'] = Product::select('*')->where('prod_id', $id)->first();
        $data['items'] = Size::select('*')->first();
    	$data['comments'] = Comment::where('com_product',$id)->get(); 
    	return view('frontend.details',$data);
    }
    public function getCategory($id){
    	$data['catename'] = Category::select('*')->where('cate_id', $id)->first();
    	$data['items'] = Product::where('prod_cate',$id)->orderBy('prod_id','desc')->paginate(8);
    	return view('frontend.category',$data);
    }
    public function postComment(Request $request,$id){
       
    	$comment = new Comment;
    	$comment ->com_name = $request->name;
    	$comment ->com_email = $request->email;
    	$comment ->com_content = $request->content;
    	$comment->com_product = $id;
    	$comment ->save();
    	return back();
    }
    public function getSearch(Request $request){
    	 $result = $request->result;
    	 $data ['keyword'] = $result;
    	 $result = str_replace(' ', '%', $result);
    	 $data['search'] = Product::where('prod_name','like','%'.$result.'%')->get();
    	 return view('frontend.search',$data);
    }
    public function getContact()
    {
        $title = 'Thông tin Cửa hàng';
        return view('frontend.contact', compact('title'));
    }
    

}
