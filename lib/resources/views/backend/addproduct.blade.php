@extends('backend.master')
@section('title','Them san pham');
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Thêm sản phẩm</div>
				<div class="panel-body">
					@include('errors.note')
					<form method="post"  enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" class="form-control">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
				                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
								</div>
								<div class="form-group" >
									<label>Phụ kiện</label>
									<input required type="text" name="accessories" class="form-control" value=".">
								</div>
								<div class="form-group" >
									<label>Số Lượng Còn</label>
									<input required type="text" name="soluongcon" class="form-control" value="20">
								</div>
								
								<div class="form-group" >
									<label>Bảo hành</label>
									<input required type="text" name="warranty" class="form-control" value="💯 Bảo Hành 12 Tháng">
								</div>
								<div class="form-group" >
									<label>Khuyến mãi</label>
									<input required type="text" name="promotion" class="form-control" value="Khuyến mãi một đôi tất">
								</div>
								<div class="form-group" >
									<label>Tình trạng</label>
									<input required type="text" name="condition" class="form-control" value="Mới 100%">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1">Còn hàng</option>
										<option value="0">Hết hàng</option>
				                    </select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea class="ckeditor" required name="description"></textarea>
								</div>
								<div class="form-group" >
									@foreach($size as $item)
									<label>Size: {{$item->numsize}}</label>
									<input type="number" min="10" max="1000" checked name="size{{$item->numsize}}" >
									@endforeach
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@foreach($catelist as $cate)
										<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
										@endforeach
				                    </select>
								</div>
								<div class="form-group" >
									<label>Danh Mục Sản Phẩm</label><br>
									<input type="radio" checked name="featured" value="1">
									Sản Phẩm Mới<br>
									<input type="radio" checked name="featured" value="0">
									Sản Phẩm Hot<br>
									<input type="radio" checked name="featured" value="2">
									Sản Phẩm Khuyến Mãi 
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="#" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop
	