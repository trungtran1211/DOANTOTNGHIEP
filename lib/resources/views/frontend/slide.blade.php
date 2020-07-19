 <div id="hero">
            
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <?php 
            $data = DB::table('vp_slide')->where('sli_status',0)->get();
            ?>
            @foreach ($data as $item)
            <div class="item" style="background-image: url({{asset('lib/storage/app/avatar/'.$item->sli_img)}});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">{{$item->sli_title}}</div>
                  <div class="big-text fadeInDown-1"> {{$item->sli_content}} </div>
                   <!-- <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                                      <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> --> 
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
           @endforeach
        </div>
      </div>
            
           