<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Users;
use Mail;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class CartController extends Controller
{
    public function getAddCart($id){
    	$product = Product::select('*')->where('prod_id', $id)->first();
        /*$size = Input::get('size');
        */
    	Cart::add([
            'id' => $id,
            'name' => $product->prod_name,
            
            'qty' => 1,
            'price' => $product->prod_price,
            'options' => [
                'img' => $product->prod_img,
                
               
            ]
        ]);
    	return redirect('cart/show');
    }

    public function getShow($id){
        $product = Product::select('*')->where('prod_id', $id)->first();
        Cart::add([
            'id' => $id,  
            'name' => $product->prod_name,
            'qty' => 1, 
            'price' => $product->prod_price, 
            'options' => ['img' => $product->prod_img ]
        ]);

        return redirect()->back();
    }
    public function getShowCart(){
    	$data['total'] = Cart::total();
    	$data['items'] = Cart::content();
    	return view('frontend.cart',$data);
    }
    public function getDeleteCart($id){
        if ($id=='all') {
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }
    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);
    }
    public function postComplete(Request $request){
        $data ['info'] = $request->all();
        
        $email = $request->email;
        $data ['total'] = Cart::total();
        $data ['cart'] = Cart::content();
         
            Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('truongchode0202@gmail.com', 'Giày Store');

            $message->to($email , $email);

            $message->cc('thanhtrungtran8888@gmail.com', 'Trần Thanh Trung');

            $message->subject('Xác nhận hóa đơn mua hàng Giày Store');
        
        });
        //return redirect(route('complete'));

        $user = Auth::user();
        $total = Cart::total(0,'','');
        $cart = Cart::content();
        $user_id = Auth::check() ?  Auth::user()->id : 9999;
        $name = Auth::check() ? Auth::user()->name : $request->get('name');
        $phone = Auth::check() ? Auth::user()->phone : $request->phone;
        $address = Auth::check() ? Auth::user()->address : $request->add;
        $email = Auth::check() ? Auth::user()->email : $request->email;

        $bill = new Bill;
        $bill->bil_iduser = $user_id;
        $bill->bil_name = $name;
        $bill->bil_phone = $phone;
        $bill->bil_address = $address;
        $bill->bil_total = $total;

        $bill->bil_payments = 'Thanh toán khi nhận hàng';
        $bill->bil_ngaydat = carbon::now();
        $bill->bil_status = 1;
        if ($bill->save()) {
            $id_bill = Bill::select('bil_id')->max('bil_id');
            $bills = Bill::where('bil_id',$id_bill)->first();
            
            foreach ($cart as  $value)
            {
               $detailbill = new BillDetail;
               $detailbill->bill_id = $id_bill;
               $detailbill->product_id = $value->id; 
               $detailbill->det_quantity = $value->qty;
               $detailbill->det_total = $value->price*$value->qty;
               $detailbill->save();
               $qtynumber = 0;
               $qty_product = Product::select('soluongcon')->where('prod_id',$value->id)->first();
               $qty_update = $qty_product->soluongcon - $value->qty;
               $qtynumber += $value->qty;
               Product::where('prod_id', $value->id )->update(['soluongcon'=>$qty_update,'soluongban'=>$qtynumber]); 

            }
        }
         Cart::destroy();
        return view('frontend.success', compact('bills', 'cart','total'));
    }
    /*public function getComplete()

    {
        dd($data);
        $user = Auth::user();
        $total = Cart::total(0,'','');

        //$random = random_int(1, 100);
        //random ri trùng id sao m
       //kiểm tra random được không m nếu k đăng nhập thì user_id = null
        $cart = Cart::content();
        //$user_id = Auth::check() ?  Auth::user()->id : $random;
        $name = Auth::check() ? Auth::user()->name : $request->get('name');
        dd($name);
        $phone = Auth::check() ? Auth::user()->phone : $request->phone;
        $address = Auth::check() ? Auth::user()->address : $request->add;
        $email = Auth::check() ? Auth::user()->email : $request->email;

        $bill = new Bill;
        $bill->bil_iduser = $user_id;
        $bill->bil_name = $name;
        $bill->bil_phone = $phone;
        $bill->bil_address = $address;
        $bill->bil_total = $total;

        $bill->bil_payments = 'Thanh toán khi nhận hàng';
        $bill->bil_ngaydat = carbon::now();
        $bill->bil_status = 1;
        if ($bill->save()) {
            $id_bill = Bill::select('bil_id')->max('bil_id');
            $bills = Bill::where('bil_id',$id_bill)->first();
            
            foreach ($cart as  $value)
            {
               $detailbill = new BillDetail;
               $detailbill->bill_id = $id_bill;
               $detailbill->product_id = $value->id; 
               $detailbill->det_quantity = $value->qty;
               $detailbill->det_total = $value->price*$value->qty;
               $detailbill->save();
               $qtynumber = 0;
               $qty_product = Product::select('soluongcon')->where('prod_id',$value->id)->first();
               $qty_update = $qty_product->soluongcon - $value->qty;
               $qtynumber += $value->qty;
               Product::where('prod_id', $value->id )->update(['soluongcon'=>$qty_update,'soluongban'=>$qtynumber]); 

            }
        }
        Cart::destroy();
        return view('frontend.success');
        
    }*/
   /*public function postComplete1(Request $request,$id)
    {
        $user = Auth::user();
        $total= Cart::total();
        $cart = Cart::content();
        $user_id = Auth::check() ?  Auth::user()->id : '';
        $name = Auth::check() ? Auth::user()->name : $request->name;
        dd($name);
        $phone = Auth::check() ? Auth::user()->phone : $request->phone;*/
        

        /*Cart::destroy();*/


        /*$bill = new Bill;
        $bill->bil_iduser = $user_id;
        $bill->bil_name = 

        return back();
    }*/
    public function getCheckout( Request $request)
    {
    
        
       $data['total'] = Cart::total();
        $data['items'] = Cart::content();
        $title = 'Thanh toán đơn hàng';

        $email = Auth::check() ? Auth::user()->email : '';
        $name = Auth::check() ? Auth::user()->name : '';
        $phone = Auth::check() ? Auth::user()->phone : '';
        $address = Auth::check() ? Auth::user()->address : '';
        return view('frontend.checkout',$data,compact('title', 'name', 'email', 'address', 'phone'));
    }

    /*public function getShowCartTest()
    {
        $a = Cart::add(['id' => 1, 'name' => 'sdfdf','qty' => 1, 'price' => 12312,'options' => ['img' => 'ádd', 'size' => 1]]);
        dd($a);
    }*/
    /*public function getUpdateSize(Request $request)
    {
        $rowId = $request->rowId;
        $item = $request->size;
        $size = ['options' => ['size' =>$item ]];
            $cart = Cart::update($rowId,$size );//sai chổ ni k biết để ren
            return response()->json(['code' => 'Thêm mới thành công','cart' => $cart]);
        
        
    }*/
}
//dc chwua m
//được rồi m
//ok coi xóa Cart
//mi có mặc định 999 luôn hợ
//rứa sau ni muốn duyệt đơn hàng có bị chi k m