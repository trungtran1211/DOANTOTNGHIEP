@extends('backend.master')
@section('title','Cập nhật hóa đơn');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<form action="" method="POST">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
    <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px; background-color: #afd2d8;">
              <h3 >
                <a href="" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Quản lý đơn hàng</i></a>
                /Chi tiết đơn hàng số SDFGH
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
    <div class="row">
        <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading" style=" background-color: #afd2d8;">
            <h3 class="panel-title">Thông tin khách hàng</h3>
          </div>
          <div class="panel-body">
          <div class="table-responsive">
              <table class="table table-hover">

                  <tbody>
                      <tr>
                          <td><b>Tên khách hàng</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Số điện thoại</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Email</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Địa chỉ</b></td>
                          <td>fghjk</td>
                      </tr>
                  </tbody>
              </table>
          </div>    
        </div>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <label for="input" >Tình trạng đơn hàng</label>
                <div>
                    <select id="input" name="selStatus"  class="form-control">
                            <option >Chưa duyệt</option>
                            <option >Đã duyệt</option>
                            
                            
                    </select>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading" style=" background-color: #afd2d8;" >
            <h3 class="panel-title">Thông tin giao hàng</h3>
          </div>
          <div class="panel-body">
          <div class="table-responsive">
              <table class="table table-hover">

                  <tbody>
                      <tr>
                          <td><b>Người nhận hàng</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Số điện thoại</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Email</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Địa chỉ</b></td>
                          <td>fghjk</td>
                      </tr>
                      <tr>
                          <td><b>Ghi chú</b></td>
                          <td>
                          fghjk
                            
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          </div>
        </div> 
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default" >
          <div class="panel-heading" style=" background-color: #afd2d8;">
            <h2 class="panel-title" ><b>Danh sách sản phẩm</b></h2>
          </div>
          <div class="panel-body">
            <div class="col-lg-12" >
                <div class="table-responsive">
                    <table class="table table-hovered" >
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                <tr>
                                    <td>dfgh</td>
                                    <td>
                                       rtyui 
                                    </td>
                                    <td>
                                    fghjk
                                    </td>
                                    <td>dfgh</td>
                                    <td>dfgh</td>
                                </tr>
                            
                            <tr>
                            <td colspan="5">
                            <b>Tổng tiền : dfghj </b>
                                
                            </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
</div>
@stop