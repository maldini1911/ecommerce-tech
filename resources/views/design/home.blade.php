@extends('design/index')

@section('info')

<!-- Start header-->
<header>
     <div class="header-slider">
          <ul class="bxslider">
               <li><img class="img-responsive" src="{{url('/')}}/design/design/img/bc1250085d8263031b8f7905a0a23b54.jpg" /></li>
               <li><img class="img-responsive" src="{{url('/')}}/design/design/img/0c058426c74ce0a82d79e9c9c652e54e.jpg" /></li>
               <li><img class="img-responsive" src="{{url('/')}}/design/design/img/91d781c75866dddd0281c9a74741c9a2.jpg" /></li>
               <li><img class="img-responsive" src="{{url('/')}}/design/design/img/maxresdefault.jpg" /></li>
          </ul>
     </div>

     <div  class="header-img hidden">
          <img class="img-responsive" src="{{url('/')}}/design/design/img/maxresdefault.jpg" />
     </div>

     <i class="fa fa-long-arrow-down fa-4x "></i>

     <div class="scroll">
          <div class="overlay">
               <p>Our collection revolves around functional footwear with a great design and great quality for both women and men. Our timeless shoes, made to last, fit within a modern lifestyle.</p>
          </div>
     </div>
</header>

<!-- End Header -->

<!--    under-scroll        -->
<section class="under-scroll"></section>
<!--    end under-scroll        -->

<!-- Start Highlights-->
<section class="highlights text-center">
     <div class="container">
          <h2 class="h1">HIGHLIGHTS</h2>
          <a id="prev">&lt;</a>
          <a id="next">&gt;</a>
          <!-- Start Show Products -->
          <div class="stack">
               <!-- Start Laptop -->
                @foreach($lights_lap as $light)
                    <div class="sheet" style="padding:5px 0!important">
                         <div class="img">
                              <img class="img-responsive" src="{{Storage::url($light->laptop_image)}}" width="250px" height="180px" />
                         </div>
                         <h4 class="main-color"> {{ $light->name }}</h4>
                         <h4 class="main-color"> {{ $light->price }} EGP <del style="color:red"> {{ $light->sale}} EGP </del></h4>
                         <a href="{{url('laptop/buy/' . $light->id)}}"> More...</a>

                    </div>
               @endforeach
               <!-- End Laptop -->

               <!-- Start Tablet -->
               @foreach($lights_tap as $light)
                    <div class="sheet" style="padding:5px 0!important">
                         <div class="img">
                              <img class="img-responsive" src="{{Storage::url($light->tablet_image)}}" width="250px" height="180px" />
                         </div>
                         <h4 class="main-color"> {{ $light->name }}</h4>
                         <h4 class="main-color"> {{ $light->price }} EGP <del style="color:red"> {{ $light->sale}} EGP </del></h4>
                         <a href="{{url('tablet/buy/' . $light->id)}}" style="font-weight:bolder; color:orang"> More <i class="fa fa-plus"> </i></a>

                    </div>
               @endforeach
               <!-- End Tablet -->


               <!-- Start Mobile -->
               @foreach($lights_mob as $light)
                    <div class="sheet" style="padding:5px 0!important">
                         <div class="img">
                              <img class="img-responsive" src="{{Storage::url($light->mobile_image)}}" width="250px" height="180px" />
                         </div>
                         <h4 class="main-color"> {{ $light->name }}</h4>
                         <h4 class="main-color"> {{ $light->price }} EGP <del style="color:red"> {{ $light->sale}} EGP </del></h4>
                         <a href="{{url('tablet/buy/' . $light->id)}}" style="font-weight:bolder; color:orang"> More <i class="fa fa-plus"> </i></a>

                    </div>
               @endforeach
               <!-- End Mobile -->
          </div>
          <!-- End Show Products -->
     </div>
</section>
<!-- End Highlights-->

<!-- Start Most Popular -->
<section class="popular responsive">
     <div class="container">
          <h2>Most Popular</h2>
          <span class="see-more"><a href="#">See More</a></span>
          <!-- Start Silder -->
          <div class="slider">
               <ul class="bxslider">
                    <!-- Start Laptop -->
                    @foreach($mosts_lap as $laptop)
                         <li>
                              <div class="product-img">
                                   <img class="img-responsive" src="{{Storage::url($laptop->laptop_image)}}" alt="picture of lenovo">

                                   <div class="box-data">
                                             <h4>{{$laptop->name}}</h4>
                                             <span class="price"> {{$laptop->price}} <span class="icon-price">EG</span></span>
                                             <div class="more-data">
                                                  <a href="{{url('laptop/buy/'.$laptop->id)}}"> More...</a>
                                             </div>
                                   </div>
                              </div>
                         </li>
                    @endforeach
                    <!-- End Laptop -->

                    <!-- Start Tablet -->
                    @foreach($mosts_tap as $tablet)
                         <li>
                              <div class="product-img">
                                   <img class="img-responsive" src="{{Storage::url($tablet->tablet_image)}}" alt="picture of lenovo">

                                   <div class="box-data">
                                             <h4>{{$tablet->name}}</h4>
                                             <span class="price"> {{$tablet->price}} <span class="icon-price">EG</span></span>
                                             <div class="more-data">
                                                  <a href="{{url('tablet/buy/'.$tablet->id)}}"> More...</a>
                                             </div>
                                   </div>
                              </div>
                         </li>
                    @endforeach
                    <!-- End Tablet -->

                    <!-- Start Mobile -->
                    @foreach($mosts_mob as $mobile)
                         <li>
                              <div class="product-img">
                                   <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                   <div class="box-data">
                                             <h4>{{$mobile->name}}</h4>
                                             <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                             <div class="more-data">
                                                  <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                             </div>
                                   </div>
                              </div>
                         </li>
                    @endforeach
                    <!-- End Mobile -->
               </ul>
          </div>
          <!-- End Slider -->
     </div>
</section>
<!-- Start Most Popular -->


<!-- Start Most Recent -->
<section class="product">
     <div class="container">
          <h2>Most Recent</h2>
          <span class="see-more"><a href="#">See More</a></span>

          <div class="row">
               <!-- Start Laptop -->
               @foreach($recent_lap as $parent)
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                         <div class="product-img">
                              <img class="img-responsive" src="{{Storage::url($parent->laptop_image)}}" alt="picture of lenovo">

                              <div class="overlay">
                                        <h4>{{$parent->name}}</h4>
                                        <p>
                                             {{$parent->ram}} - {{$parent->hard_drive}} - {{$parent->screen_size}} - {{$parent->wifi}}
                                        </p>
                                        <span> {{$parent->price}} <span class="icon-price">EG</span></span>
                                        <div class="more-data">
                                             <a href="{{url('laptop/buy/'.$parent->id)}}"> More...</a>
                                        </div>
                              </div>

                         </div>
                    </div>
               @endforeach
               <!-- End Laptop -->

               <!-- Start Tablet -->
               @foreach($recent_tap as $parent)
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                         <div class="product-img">
                              <img class="img-responsive" src="{{Storage::url($parent->tablet_image)}}" alt="picture of lenovo">

                              <div class="overlay">
                                        <h4>{{$parent->name}}</h4>
                                        <p>
                                             {{$parent->ram}} - {{$parent->memory}} - {{$parent->screen_size}} - {{$parent->camera}}
                                        </p>
                                        <span> {{$parent->price}} <span class="icon-price">EG</span></span>
                                        <div class="more-data">
                                             <a href="{{url('laptop/buy/'.$parent->id)}}"> More...</a>
                                        </div>
                              </div>

                         </div>
                    </div>
               @endforeach
               <!-- End Tablet -->

               <!-- Start Mobile -->
               @foreach($recent_mob as $parent)
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                         <div class="product-img">
                              <img class="img-responsive" src="{{Storage::url($parent->mobile_image)}}" alt="{{$parent->name}}">
                              <div class="overlay">
                                    <h4>{{$parent->name}}</h4>
                                    <p>
                                            {{$parent->ram}} - {{$parent->memory}} - {{$parent->screen_size}} - {{$parent->camera}}
                                    </p>
                                    <span> {{$parent->price}} <span class="icon-price">EG</span></span>
                                    <div class="more-data">
                                            <a href="{{url('laptop/buy/'.$parent->id)}}"> More...</a>
                                    </div>
                              </div>
                         </div>
                    </div>
               @endforeach
               <!-- End Mobile -->
          </div>
     </div>
</section>
<!-- End Most Recent -->

<!--  Start Slider Show -->
<section class="more-products">
     <ul class="pgwSlider">
          <li><img src="{{url('/')}}/design/design/images/slider 1.jpg" alt=" " data-description="lap-top"></li>
          <li>
               <img src="{{url('/')}}/design/design/images/slider 2.jpg">
               <span>Mobile</span>
          </li>
          <li>
               <img src="{{url('/')}}/design/design/images/slider 4.jpg">
               <span>tablet</span>
          </li>
          <li>
               <a href="http://www.nyc.gov" target="_blank">
                    <img src="{{url('/')}}/design/design/images/slider 5.jpg">
               <span>mobile</span>
               </a>
          </li>
     </ul>
     <div class="clearfix"></div>
</section>

<!-- End Slider Show -->

@endsection
