@extends('design/index')

@section('info')

<!--start shop-->
<section class="shop">
     <div class="container">
          <div class="row">   <!-- Start Row -->
               <!-- Start Menu Navbar -->
               <div class="col-md-3 sort">

                    <h3>Sort By</h3>

                    <div class="type">

                         <h6>Item Type <i class="fa fa-chevron-down"></i> </h6>
                         <p>
                         <label>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="all">
                                   All Protecteds
                         </label>
                         </p>

                         <p>
                         <label>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="laptop">
                                   Laptop
                         </label>
                         </p>

                         <p>
                         <label>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="tablet">
                              Tablet
                         </label>
                         </p>

                         <p>
                         <label>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="mobile">
                              Mobile
                         </label>
                         </p>


                    </div>

                    <div>

                         <h6>Brand <i class="fa fa-chevron-down"></i></h6>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="toshiba">
                              Toshiba - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="hp">
                              Hp - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="acer">
                              Acer - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="dell">
                              Dell - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="lenovo-lap">
                              Lenovo - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="apple-lap">
                              Apple - Laptop
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="samsung-tap">
                              Samsung - Tablet
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="apple-tap">
                              Apple - Tablet
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="huawei-tap">
                              Huawei - Tablet
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="lenovo-tap">
                              Lenovo - Tablet
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="huawei-mob">
                              Huawei - Mobile
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="samsung-mob">
                              Samsung - Mobile
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="lenovo-mob">
                              Lenovo - Mobile
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="oppo-mob">
                              Oppo - Mobile
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="infinix-mob">
                              Infinix - Mobile
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="apple-mob">
                              Apple - Mobile
                         </label>
                         </p>

                    </div>

                    <div>

                         <h6>os <i class="fa fa-chevron-down"></i></h6>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="doc">
                              Doc
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="mac">
                              Mac
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="windows">
                              Windows
                         </label>
                         </p>

                    </div>

                    <div>

                         <h6>Processor Type <i class="fa fa-chevron-down"></i></h6>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="corei3">
                              Core i3
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="corei5">
                              Core i5
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="corei7">
                              Core i7
                         </label>
                         </p>


                    </div>

                    <div class="price">

                         <h6>Price <i class="fa fa-chevron-down"></i></h6>
                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="price1">
                              0 EGP - 2000 EGP
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="price2">
                         0 EGP -  4000 EGP
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="price3">
                              0 EGP -  6000 EGP
                         </label>
                         </p>

                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="price4">
                         0 EGP -  8000 EGP
                         </label>
                         </p>
                         <p>
                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-filter="price5">
                         8000 EGP -  Up
                         </label>
                         </p>

                    </div>

                    <div class="ad ad1">
                         <i class="fa fa-window-close fa-lg"></i>
                         <a href="https://www.rayashop.com/" target="_blank"></a>
                    </div>

                    <div class="ad ad2">
                         <i class="fa fa-window-close fa-lg"></i>
                         <a href="https://www.rayashop.com/" target="_blank"></a>
                    </div>

               </div>
               <!-- End Menu Navbar -->

               <!-- Start Show Products -->
               <div class="col-lg-9 col-md-12  products">

                    <h2 class="text-center shop-title">Shop Sidebar</h2>

                    <!-- ########################## Start Items ##################### -->
                    <div class="clearfix"></div>

                    <!-- Start All productes -->
                    <section class="product shop" id="all">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Products</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-laptop-all" data-toggle="tab" href="#nav-laptop-all1" role="tab" aria-controls="nav-laptop" aria-selected="false">Laptop</a>
                         <a class="nav-item nav-link" id="nav-tablet-all" data-toggle="tab" href="#nav-tablet-all2" role="tab" aria-controls="nav-tablet" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-mobile-all" data-toggle="tab" href="#nav-mobile-all3" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start All Laptop -->
                              <div class="tab-pane active" id="nav-laptop-all1" role="tabpanel" aria-labelledby="nav-laptop-all">
                                   <p class="text-center"> we found <span class="selected">{{$lap_count}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($laptops as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $laptops->render() !!}
                              </div>
                              <!-- End All Laptop -->

                              <!-- Start All Tablet -->
                              <div class="tab-pane fade" id="nav-tablet-all2" role="tabpanel" aria-labelledby="nav-tablet-all">
                                   <p class="text-center"> we found <span class="selected">{{$tab_count}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($tablets as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $tablets->render() !!}
                              </div>
                              <!-- End All Tablet -->

                               <!-- Start All Mobile -->
                               <div class="tab-pane fade" id="nav-mobile-all3" role="tabpanel" aria-labelledby="nav-mobile-all">
                                   <p class="text-center"> we found <span class="selected">{{$mob_count}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($mobiles as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $mobiles->render() !!}
                              </div>
                              <!-- End All Mobile -->

                         </div>
                    </section>
                    <!-- End All productes -->

                    <!-- Start All Laptop -->
                    <section class="product" id="laptop">
                                   <p class="text-center"> shop  <span> > </span> <span class="selected"> Laptop</span></p>
                                   <p class="text-center"> we found <span class="selected">{{$lap_count}} products</span> for you </p>
                                   <div class="row">

                                        @foreach($laptops as $laptop)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($laptop->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$laptop->name}}</h4>
                                                            <p>
                                                                 {{$laptop->ram}} - {{$laptop->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$laptop->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$laptop->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach

                                   </div>
                                   {!! $laptops->render() !!}
                    </section>
                    <!-- End All Laptop -->

                    <!-- Start All Tablet -->
                    <section class="product" id="tablet">
                              <p class="text-center"> shop  <span> > </span> <span class="selected"> Tablet</span></p>
                              <p class="text-center"> we found <span class="selected">{{$tab_count}} products</span> for you </p>
                              <div class="row">
                                        @foreach($tablets as $tablet)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($tablet->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$tablet->name}}</h4>
                                                            <p>
                                                                 {{$tablet->ram}} - {{$tablet->memory}} - {{$tablet->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$tablet->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$tablet->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                              </div>
                              {!! $tablets->render() !!}
                    </section>
                    <!-- End All Tablet -->

                    <!-- Start All Mobile -->
                    <section class="product" id="mobile">
                              <p class="text-center"> shop  <span> > </span> <span class="selected"> Mobile</span></p>
                              <p class="text-center"> we found <span class="selected">{{$mob_count}} products</span> for you </p>
                              <div class="row">
                                   @foreach($mobiles as $mobile)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                   @endforeach
                              </div>
                              {!! $mobiles->render() !!}
                    </section>
                    <!-- End All Mobile -->
                    <!-- ########################## End Items ##################### -->

                    <!-- ########################## Start Brand ##################### -->
                    <!-- Start Toshiba -->
                    <section class="product" id="toshiba">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Toshiba</span></p>
                         <p class="text-center"> we found <span class="selected">{{$toshiba_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($toshiba as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach

                         </div>
                         {!! $toshiba->render() !!}
                    </section>
                    <!-- End Toshiba -->

                    <!-- Start Hp -->
                    <section class="product" id="hp">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Hp</span></p>
                         <p class="text-center"> we found <span class="selected">{{$hp_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($hp as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                               @endforeach
                         </div>
                         {!! $hp->render() !!}
                    </section>
                    <!-- End Hp -->

                    <!-- Start Acer -->
                    <section class="product" id="acer">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Acer</span></p>
                         <p class="text-center"> we found <span class="selected">{{$acer_count}} products</span> for you </p>
                              <div class="row">
                                   @foreach($acer as $info)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                             <div class="product-img" style="height:300px">
                                                  <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                  <div class="overlay">
                                                       <h4>{{$info->name}}</h4>
                                                       <p>
                                                            {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                       </p>
                                                       <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                       <div class="more-data">
                                                            <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                       </div>
                                                  </div>

                                             </div>
                                        </div>
                              @endforeach
                         </div>
                         {!! $acer->render() !!}
                    </section>
                    <!-- End Acer -->

                    <!-- Start Dell -->
                    <section class="product" id="dell">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Dell</span></p>
                         <p class="text-center"> we found <span class="selected">{{$dell_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($dell as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $dell->render() !!}
                    </section>
                    <!-- End Dell -->

                    <!-- Start Lenovo LapTop-->
                    <section class="product" id="lenovo-lap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Lenovo - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$lenovo_lap_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($lenovo as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $lenovo->render() !!}
                    </section>
                    <!-- End Lenovo LapTop -->

                    <!-- Start Apple LapTop-->
                    <section class="product" id="apple-lap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Apple - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$apple_count}} products</span> for you </p>
                              <div class="row">
                                   @foreach($apple as $info)
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                             <div class="product-img" style="height:300px">
                                                  <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                  <div class="overlay">
                                                       <h4>{{$info->name}}</h4>
                                                       <p>
                                                            {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                       </p>
                                                       <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                       <div class="more-data">
                                                            <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                       </div>
                                                  </div>

                                             </div>
                                        </div>
                              @endforeach
                         </div>
                         {!! $apple->render() !!}
                    </section>
                    <!-- End Lenovo LapTop -->

                    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

                    <!-- Start Samsung Tablet-->
                    <section class="product" id="samsung-tap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Samsung - Tablet</span></p>
                         <p class="text-center"> we found <span class="selected">{{$samsung_tap_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($samsung_tap as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $samsung_tap->render() !!}
                    </section>
                    <!-- End Samsung Tablet -->

                    <!-- Start Apple Tablet-->
                    <section class="product" id="apple-tap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Apple - Tablet</span></p>
                         <p class="text-center"> we found <span class="selected">{{$apple_tap_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($apple_tap as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $apple_tap->render() !!}
                    </section>
                    <!-- End Apple Tablet -->

                    <!-- Start Huawei Tablet-->
                    <section class="product" id="huawei-tap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Huawei - Tablet</span></p>
                         <p class="text-center"> we found <span class="selected">{{$huawei_tap_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($huawei_tap as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $huawei_tap->render() !!}
                    </section>
                    <!-- End Huawei Tablet -->

                    <!-- Start Lenovo Tablet-->
                    <section class="product" id="lenovo-tap">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Lenovo - Tablet</span></p>
                         <p class="text-center"> we found <span class="selected">{{$lenovo_tap_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($lenovo_tap as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $lenovo_tap->render() !!}
                    </section>
                    <!-- End Lenovo Tablet -->

                    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@ -->

                    <!-- Start Huawei Mobile -->
                    <section class="product" id="huawei-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Huawei - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$huawei_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($huawei_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                          </div>
                         {!! $huawei_mob->render() !!}
                    </section>
                    <!-- End Huawei Mobile -->

                    <!-- Start Samsung Mobile -->
                    <section class="product" id="samsung-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Samsung - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$samsung_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($samsung_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $samsung_mob->render() !!}
                    </section>
                    <!-- End Samsung Mobile -->

                    <!-- Start Lenovo Mobile -->
                    <section class="product" id="lenovo-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Lenovo - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$lenovo_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($lenovo_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $lenovo_mob->render() !!}
                    </section>
                    <!-- End Lenovo Mobile -->

                    <!-- Start Oppo Mobile -->
                    <section class="product" id="oppo-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Oppo - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$oppo_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($oppo_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $oppo_mob->render() !!}
                    </section>
                    <!-- End Oppo Mobile -->

                    <!-- Start Infinix Mobile -->
                    <section class="product" id="infinix-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Infinix - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$infinix_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($infinix_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $infinix_mob->render() !!}
                    </section>
                    <!-- End Infinix Mobile -->

                    <!-- Start Apple Mobile -->
                    <section class="product" id="apple-mob">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Apple - Mobile</span></p>
                         <p class="text-center"> we found <span class="selected">{{$apple_mob_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($apple_mob as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$mobile->name}}</h4>
                                                  <p>
                                                       {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $apple_mob->render() !!}
                    </section>
                    <!-- End Apple Mobile -->

                    <!-- ########################## End Brand ##################### -->

                    <!-- ########################## Start Os Laptop ################## -->
                    <!-- Start Doc -->
                    <section class="product" id="doc">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Doc - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$doc_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($doc as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $doc->render() !!}
                    </section>
                    <!-- End Doc -->

                    <!-- Start Mac -->
                    <section class="product" id="mac">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Mac - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$mac_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($mac as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $mac->render() !!}
                    </section>
                    <!-- End Mac -->

                    <!-- Start windows -->
                    <section class="product" id="windows">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Doc - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$windows_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($windows as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $windows->render() !!}
                    </section>
                    <!-- End Windows -->
                    <!-- ########################## End Os Laptop ################## -->

                    <!-- #################### Start Processor Type ############## -->
                    <!-- Start Core I3 -->
                    <section class="product" id="corei3">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Core I3 - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$corei3_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($coreI3 as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $coreI3->render() !!}
                    </section>
                    <!-- End Core I3 -->

                    <!-- End Core I5 -->
                    <section class="product" id="corei5">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Core I5 - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$corei5_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($coreI5 as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $coreI5->render() !!}
                    </section>
                    <!-- End Core I5 -->

                    <!-- Start Core I7 -->
                    <section class="product" id="corei7">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> Core I7 - Laptop</span></p>
                         <p class="text-center"> we found <span class="selected">{{$corei7_count}} products</span> for you </p>
                         <div class="row">
                              @foreach($coreI7 as $info)
                                   <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="product-img" style="height:300px">
                                             <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                             <div class="overlay">
                                                  <h4>{{$info->name}}</h4>
                                                  <p>
                                                       {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                  </p>
                                                  <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                  <div class="more-data">
                                                       <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                  </div>
                                             </div>

                                        </div>
                                   </div>
                              @endforeach
                         </div>
                         {!! $coreI7->render() !!}
                    </section>
                    <!-- End Core I7 -->
                    <!-- #################### End Processor Type ############## -->

                    <!-- #################### Start Price To All Protecteds ################ -->
                    <!-- Start From 0 EGP To 2000 EGP -->
                    <section class="product" id="price1">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Protectes From 0 EGP To 2000 EGP</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Laptop</a>
                         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start Laptop -->
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_lap_1}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($prcie_lap_1 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $prcie_lap_1->render() !!}
                              </div>
                              <!-- End Laptop -->

                              <!-- Start Tablet -->
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_tap_1}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_tap_1 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                       <div class="product-img" style="height:300px">
                                                            <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                            <div class="overlay">
                                                                 <h4>{{$info->name}}</h4>
                                                                 <p>
                                                                      {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                                 </p>
                                                                 <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                                 <div class="more-data">
                                                                      <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                                 </div>
                                                            </div>

                                                       </div>
                                                  </div>
                                        @endforeach
                                   </div>
                                   {!! $price_tap_1->render() !!}
                              </div>
                              <!-- End Tablet -->

                              <!-- Start Mobile -->
                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_mob_1}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_mob_1 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_mob_1->render() !!}
                              </div>
                              <!-- End Mobile -->

                         </div>
                    </section>
                    <!-- End From 0 EGP To 2000 EGP -->

                    <!-- Start From 0 EGP To 4000 EGP -->
                    <section class="product" id="price2">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Protectes From 0 EGP To 4000 EGP</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-laptop-tab2" data-toggle="tab" href="#nav-laptop2" role="tab" aria-controls="nav-laptop" aria-selected="true">Laptop</a>
                         <a class="nav-item nav-link" id="nav-tablet-tab2" data-toggle="tab" href="#nav-tablet2" role="tab" aria-controls="nav-tablet" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-mobile-tab2" data-toggle="tab" href="#nav-mobile2" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start Laptop -->
                              <div class="tab-pane fade show active" id="nav-laptop2" role="tabpanel" aria-labelledby="nav-laptop-tab2">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_lap_2}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($prcie_lap_2 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $prcie_lap_2->render() !!}
                              </div>
                              <!-- End Laptop -->

                              <!-- Start Tablet -->
                              <div class="tab-pane fade" id="nav-tablet2" role="tabpanel" aria-labelledby="nav-tablet-tab2">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_tap_2}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_tap_2 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>

                                        @endforeach
                                   </div>
                                   {!! $price_tap_2->render() !!}
                              </div>
                              <!-- End Tablet -->

                              <!-- Start Mobile -->
                              <div class="tab-pane fade" id="nav-mobile2" role="tabpanel" aria-labelledby="nav-mobile-tab2">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_mob_2}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_mob_2 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_mob_2->render() !!}
                              </div>
                              <!-- End Mobile -->

                         </div>
                    </section>
                    <!-- End From 0 EGP To 4000 EGP -->

                    <!-- Start From 0 EGP To 6000 EGP -->
                    <section class="product" id="price3">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Protectes From 0 EGP To 6000 EGP</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-laptop-tab3" data-toggle="tab" href="#nav-laptop3" role="tab" aria-controls="nav-laptop" aria-selected="true">Laptop</a>
                         <a class="nav-item nav-link" id="nav-tablet-tab3" data-toggle="tab" href="#nav-tablet3" role="tab" aria-controls="nav-tablet" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-mobile-tab3" data-toggle="tab" href="#nav-mobile3" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start Laptop -->
                              <div class="tab-pane fade show active" id="nav-laptop3" role="tabpanel" aria-labelledby="nav-laptop-tab3">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_lap_3}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($prcie_lap_3 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $prcie_lap_3->render() !!}
                              </div>
                              <!-- End Laptop -->

                              <!-- Start Tablet -->
                              <div class="tab-pane fade" id="nav-tablet3" role="tabpanel" aria-labelledby="nav-tablet-tab3">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_tap_3}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_tap_3 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_tap_3->render() !!}
                              </div>
                              <!-- End Tablet -->

                              <!-- Start Mobile -->
                              <div class="tab-pane fade" id="nav-mobile3" role="tabpanel" aria-labelledby="nav-mobile-tab3">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_mob_3}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_mob_3 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                        @endforeach
                                   </div>
                                   {!! $price_mob_3->render() !!}
                              </div>
                              <!-- End Mobile -->

                         </div>
                    </section>
                    <!-- End From 0 EGP To 6000 EGP -->

                    <!-- Start From 0 EGP To 8000 EGP -->
                    <section class="product" id="price4">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Protectes From 0 EGP To 8000 EGP</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-laptop-tab4" data-toggle="tab" href="#nav-laptop4" role="tab" aria-controls="nav-laptop" aria-selected="true">Laptop</a>
                         <a class="nav-item nav-link" id="nav-tablet-tab4" data-toggle="tab" href="#nav-tablet4" role="tab" aria-controls="nav-tablet" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-mobile-tab4" data-toggle="tab" href="#nav-mobile4" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start Laptop -->
                              <div class="tab-pane fade show active" id="nav-laptop4" role="tabpanel" aria-labelledby="nav-laptop-tab4">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_lap_4}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($prcie_lap_4 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $prcie_lap_4->render() !!}
                              </div>
                              <!-- End Laptop -->

                              <!-- Start Tablet -->
                              <div class="tab-pane fade" id="nav-tablet4" role="tabpanel" aria-labelledby="nav-tablet-tab4">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_tap_4}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_tap_4 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_tap_4->render() !!}
                              </div>
                              <!-- End Tablet -->

                              <!-- Start Mobile -->
                              <div class="tab-pane fade" id="nav-mobile4" role="tabpanel" aria-labelledby="nav-mobile-tab4">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_mob_4}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_mob_4 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_mob_4->render() !!}
                              </div>
                              <!-- End Mobile -->

                         </div>
                    </section>
                    <!-- End From 0 EGP To 8000 EGP -->

                    <!-- Start From 0 EGP To 8000 EGP -->
                    <section class="product" id="price5">
                         <p class="text-center"> shop  <span> > </span> <span class="selected"> All Protectes From 8000 EGP To Up EGP</span></p>

                         <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link active" id="nav-laptop-tab5" data-toggle="tab" href="#nav-laptop5" role="tab" aria-controls="nav-laptop" aria-selected="true">Laptop</a>
                         <a class="nav-item nav-link" id="nav-tablet-tab5" data-toggle="tab" href="#nav-tablet5" role="tab" aria-controls="nav-tablet" aria-selected="false">Tablet</a>
                         <a class="nav-item nav-link" id="nav-mobile-tab5" data-toggle="tab" href="#nav-mobile5" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
                         </div>
                         </nav>

                         <div class="tab-content" id="nav-tabContent">

                              <!-- Start Laptop -->
                              <div class="tab-pane fade show active" id="nav-laptop5" role="tabpanel" aria-labelledby="nav-laptop-tab5">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_lap_5}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($prcie_lap_5 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->laptop_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->hard_drive}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('laptop/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $prcie_lap_5->render() !!}
                              </div>
                              <!-- End Laptop -->

                              <!-- Start Tablet -->
                              <div class="tab-pane fade" id="nav-tablet4" role="tabpanel" aria-labelledby="nav-tablet-tab4">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_tap_4}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_tap_5 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($info->tablet_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$info->name}}</h4>
                                                            <p>
                                                                 {{$info->ram}} - {{$info->memory}} - {{$info->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$info->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('tablet/buy/'.$info->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_tap_5->render() !!}
                              </div>
                              <!-- End Tablet -->

                              <!-- Start Mobile -->
                              <div class="tab-pane fade" id="nav-mobile4" role="tabpanel" aria-labelledby="nav-mobile-tab4">
                                   <p class="text-center"> we found <span class="selected">{{$count_price_mob_5}} products</span> for you </p>
                                   <div class="row">
                                        @foreach($price_mob_5 as $info)
                                             <div class="col-md-4 col-sm-6 col-xs-6">
                                                  <div class="product-img" style="height:300px">
                                                       <img class="img-responsive" src="{{Storage::url($mobile->mobile_image)}}" alt="picture of lenovo">

                                                       <div class="overlay">
                                                            <h4>{{$mobile->name}}</h4>
                                                            <p>
                                                                 {{$mobile->ram}} - {{$mobile->memory}} - {{$mobile->screen_size}}
                                                            </p>
                                                            <span class="price"> {{$mobile->price}} <span class="icon-price">EG</span></span>
                                                            <div class="more-data">
                                                                 <a href="{{url('mobile/buy/'.$mobile->id)}}"> More...</a>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                                   {!! $price_mob_5->render() !!}
                              </div>
                              <!-- End Mobile -->

                         </div>
                    </section>
                    <!-- End From 8000 EGP To Up EGP -->
                    <!-- #################### End Price To All Protecteds ################ -->

               </div>
               <!-- End Show Products -->

         </div>    <!-- End Row -->
     </div>
</section>
<!-- End Shop -->

@endsection
