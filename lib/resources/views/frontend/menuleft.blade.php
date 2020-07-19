<div id="sidebar" class="col-md-3">
          <nav id="menu" style="background: #62aba7">
            <ul>
              
              <li class="menu-item">danh mục sản phẩm</li>
              @foreach($categories as $cate)
              <li class="menu-item"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="" ><img src="{{asset('lib/storage/app/avatar/'.$cate->img)}}" style="margin-left: 10px; width: 40px">  {{$cate->cate_name}}</a></li>
              
               @endforeach         
            </ul>
            <!-- <a href="#" id="pull">Danh mục</a> -->
          </nav>
          <h5 style="margin-top: 19px;text-align: center;    text-shadow: 0px 0px 20px black;    color: #033046;">CÁC NHÀ PHÂN PHỐI CHÍNH HÃNG</h5>
          <div id="banner-l" class="text-center">
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-6.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-2.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-3.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-4.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-5.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-1.jpg" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-7.png" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            <div class="banner-l-item">
              <a href="#"><img src="img/home/banner-l-8.png" alt="" class="img-thumbnail" style="margin-top: 50px"></a>
            </div>
            
          </div><!-- cái ni xíu nữa xóa -->
        </div>