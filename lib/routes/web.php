<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/'], function () {
	Route::get('/', 'FrontendController@getHome');
    
});
Route::group(['middleware' => ['lang']], function() {
	Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');
	Route::post('detail/{id}/{slug}.html', 'FrontendController@postComment');

	Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

	Route::get('search','FrontendController@getSearch');

Route::group(['prefix'=>'login1'],function(){
	Route::get('/', 'LoginCustomController@getlogincustom');
	Route::post('/', 'LoginCustomController@postlogincustom');
	Route::get('logout1', 'LoginCustomController@getLogout1');
	
	
	});

Route::post('regrister', 'LoginCustomController@postregrister');
Route::get('signup','LoginCustomController@getSignUp');
Route::get('contact','FrontendController@getContact');


Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('ad/{id}','CartController@getShow');
	Route::get('show','CartController@getShowCart')->name('show-cart');
	Route::get('delete/{id}','CartController@getDeleteCart');
	Route::get('update','CartController@getUpdateCart');
	Route::post('update-size','CartController@getUpdateSize');
	Route::post('show','CartController@postComplete');
	Route::get('checkout','CartController@getCheckout');

});

	Route::get('complete','CartController@getComplete')->name('complete');
	 
});
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');

		
	});
	Route::get('logout','HomeController@getLogout');
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');

		Route::group(['prefix'=>'category'], function(){
			Route::get('/','CategoryController@getCate');
			Route::post('/','CategoryController@postCate');

			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit/{id}','CategoryController@postEditCate');

			Route::get('delete/{id}','CategoryController@getDeleteCate');
		});

	Route::post('addstaff','StaffController@postAddStaff');
	Route::get('staff','StaffController@getListstaff');
    Route::get('admin/xoa/{id}','StaffController@getDeletestaff');

    Route::post('addslide','SlideController@postaddslide');


	Route::get('binhluan','CommentController@getList');
    Route::get('xoa/{id}','CommentController@getDelete');

    Route::get('sua/{id}','SlideController@getUpdateSlide');
    Route::post('sua/{id}','SlideController@postUpdateSlide');
    Route::post('updatestatus','SlideController@getUpdateStatus');

	Route::get('khachhang','CommentController@getListkh');
    Route::get('xoa/{id}','CommentController@getDeletekh');	//chổ ni à m
        
        /*Route::get('chap-nhan/{id}',['as'=>'admin.binhluan.getEdit','uses'=>'CommentController@getEdit']);*/
       /* Route::get('khong-chap-nhan/{id}',['as'=>'admin.binhluan.getEdit1','uses'=>'CommentController@getEdit1']);*/
    	Route::get('bill','BillController@getbill');
    	Route::get('delbill/{id}','BillController@getdelbill');
    	Route::get('listbill','BillController@getlistBill');

		Route::group(['prefix'=>'product'],function(){
			Route::get('/','ProductController@getProduct');

			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');

			Route::get('khachhang','ProductController@khachhang');
			Route::get('binhluan','ProductController@binhluan');
			Route::get('lichsu','ProductController@lichsu');

			Route::get('nhanvien','ProductController@nhanvien');
			Route::get('addnhanvien','ProductController@addnhanvien');
			Route::get('slide','ProductController@slide');

			Route::get('addslide','ProductController@addslide');
			Route::get('updateslide','ProductController@updateslide');
			Route::get('listslide','SlideController@getlistslide');
			Route::get('xoa/{id}','SlideController@getDeleteslide');
			



			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@postEditProduct');

			Route::get('delete/{id}','ProductController@getDeleteProduct');
		});
	});
});

