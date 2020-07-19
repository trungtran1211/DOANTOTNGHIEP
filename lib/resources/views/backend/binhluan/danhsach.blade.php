@extends('backend.master')
@section('title','Bình Luận của khách hàng');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<h3 class="page-header">Bình luận</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        Danh sách các bình luận
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab"><b>Tất cả</b></a>
            </li>
           
        </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
        <br>

        <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>ID_Sảm Phẩm</th>
                    <th>Ngày</th>
                    <th>Nội dung</th>
                    <th>Action</th>
                 
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr class="odd gradeX">
                    <td>{{$item->com_id}}</td>
                    <td>
                        {{$item->com_name}}
                    </td>
                    <td>{{$item->com_product}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->com_content}}</td>
                    <td align="center">
                    <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{url('xoa/'.$item->com_id) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                    </td>
                </tr>
           @endforeach
            </tbody>
        </table>
        </div>
        </div>
        
        
        </div>
        </div>
    </div>
</div>
    <!-- /.panel-body -->
@stop
