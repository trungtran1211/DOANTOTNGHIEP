@extends('backend.master')
@section('title','Thêm slide quảng cáo');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <form action="{{ url('admin/addslide') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="" />
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Quảng cáo</i></a>
                /Thêm mới
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
        <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <span>Nhập tiêu đề:</span>
               <input type="text" name="title">
            </div> 
            <div class="form-group">
                <span>Nhập nội dung Slide:</span>
               <input type="text" name="content">
            </div>
            <div class="form-group">
                <label for="input" >Trạng thái</label>
                
                <div class="input-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="txtNName" id="input" value="0" checked="checked">
                            Hiện
                            <br>
                            <input type="radio" name="txtNName" id="input" value="1" >
                            Ẩn
                        </label>
                    </div>
                </div>
                

            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Ảnh</label>
                <input type="file" name="fImage">
                
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    {{ csrf_field() }}
</form>
@stop