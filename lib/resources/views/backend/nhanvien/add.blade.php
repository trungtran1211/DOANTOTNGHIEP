@extends('backend.master')
@section('title','Them nhân viên');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Nhân viên</h1>
    </div>
  </div><!--/.row-->
  
  <div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
      
      <div class="panel panel-primary">
        <div class="panel-heading">Thêm nhân viên</div>
        <div class="panel-body">
          
          <form method="post" action="{{ url('admin/addstaff') }}"  enctype="multipart/form-data">
            <div class="row" style="margin-bottom:40px">
              <div class="col-xs-8">
                <div class="form-group" >
                  <label>Tên nhân viên</label>
                  <input required type="text" name="name" class="form-control">
                </div>
                <div class="form-group" >
                  <label>email</label>
                  <input required type="text" name="email" class="form-control" >
                </div>
                <div class="form-group" >
                  <label>Phone</label>
                  <input required type="text" name="phone" class="form-control" >
                </div>
                
                <div class="form-group" >
                  <label>Địa chỉ</label>
                  <input required type="text" name="address" class="form-control" >
                </div>
                <div class="form-group" >
                  <label>Password</label>
                  <input required type="text" name="password" class="form-control" >
                </div>
                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                <a href="#" class="btn btn-danger">Hủy bỏ</a>
              </div>
            </div>
            {{ csrf_field() }}
          </form>
          
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div>  <!--/.main-->
@stop