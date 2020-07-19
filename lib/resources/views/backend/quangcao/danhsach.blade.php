@extends('backend.master')
@section('title','Danh sách slide Quảng cáo');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <h3 class="page-header ">
        Quảng cáo /
        <a href="{{asset('admin/product/addslide')}}" class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
                
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách ảnh</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr  align="center">
                
                <th class="col-lg-1">ID</th>
                <th class="col-lg-2">Ảnh</th>
                <th class="col-lg-5">Tên</th>
                <th class="col-lg-5">Nội Dung</th>
                <th class="col-lg-2">Trạng thái</th>
                <th class="col-lg-1">Xóa</th>
                <th class="col-lg-1">Sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item) 
            <tr class="odd gradeX">
                
                <td>{{$item->sli_id}}</td>
                <td>
                <img src="{{asset('lib/storage/app/avatar/'.$item->sli_img)}}" class="img-responsive img-rounded" alt="Image" style="width: 70px; height: 40px;">
                </td>
                <td>{{$item->sli_title}}</td>
                <td>{{$item->sli_content}}</td>
                <td align="center">
                    <form action="{{url('admin/updatestatus') }}" method="post">
                        {{ csrf_field() }}
                   @if ($item->sli_status == 1)
                    <!-- <a href="{{url('admin/updatestatus/'.$item->sli_id/$item->sli_status,0) }}" type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="left" title="Cập nhật trạng thái"><i class="fa fa-retweet"></i>Ẩn ảnh</a> -->
                    <button class="btn btn-warning" type="submit"><i class="fa fa-retweet"></i>Ẩn ảnh</button>
                    <input type="hidden" name="txtChance" value="0" />
                    <input type="hidden" name="id" value="{{$item->sli_id}}">
                   @else

                    <!-- <a href="{{url('admin/updatestatus/'.$item->sli_id) }}" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Cập nhật trạng thái"><i class="fa fa-retweet"></i>Hiện ảnh</a> -->
                    <button class="btn btn-warning" type="submit"><i class="fa fa-retweet"></i>Hiện ảnh</button>
                    <input type="hidden" name="txtChance" value="1" />
                    <input type="hidden" name="id" value="{{$item->sli_id}}">
                   @endif
                    </form>
                </td>
                <td class="center" align="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{url('admin/product/xoa/'.$item->sli_id) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a></td>
                <td class="center"  align="center"><a href="{{url('admin/sua/'.$item->sli_id) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <!-- /.row -->
</div>
</div>
@stop
