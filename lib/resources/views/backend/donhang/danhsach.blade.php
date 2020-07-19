@extends('backend.master')
@section('title','Danh sách');
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> Danh sách đơn hàng hàng</h3>
        </div>
    </div><!--/.row-->           
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách đơn hàng</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Thời gian đặt hàng</th>
                <th>Tổng tiền</th>
                <th>Tình trạng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
             @foreach($data as $item)
                <tr class="even gradeC" align="center">
                   
                    <td>{{$item->bil_id}}</td>
                    <td>
                    {{$item->bil_name}}
                    </td>
                    <td>{{$item->bil_ngaydat}}</td>
                    <td>{{$item->bil_total}}</td>
                    <td>
                    fghjk
                    </td>
                   
                    <td class="center">
                    <a href="{{asset('admin/listbill')}}" 
                       type="button" class="btn btn-primary" 
                       data-toggle="tooltip" data-placement="left" 
                       title="Cập nhât Thông tin Hóa Đơn">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{url('admin/delbill/'.$item->bil_id)}}" 
                       type="button" class="btn btn-danger" 
                       data-toggle="tooltip" data-placement="left" 
                       title="Xóa đơn hàng">
                        <i class="fa fa-trash-o  fa-fw"></i>
                    </a>
                    
                    <a href="" 
                       type="button" class="btn btn-default" 
                       data-toggle="tooltip" data-placement="left" 
                       title="In hóa đơn">
                        <i class="fa fa-print"></i>
                    </a>
                </td>
            </tr>
            @endforeach
                </tr>
            
            
        </tbody>
        </table>
</div>
    <!-- /.row -->
</div>
</div>
</div>
</div>
</div>
@stop
