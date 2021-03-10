<div class="bulb">

				<div class="container">

					<i class="fa fa-lightbulb-o fa-2x"></i>

				</div>

			</div>

            <div class="nav-bar">

                <div class="container">

<!--                    for laptops-->
                    <ul class="nav">

                        <li class="user">
                            <a href="{{url('form')}}"><i class="fa fa-user"></i></a>
                            @if(Auth::check())
							<ul class="option">
								<li><a href="{{url('logout')}}">{{trans('admin.logout')}}</a></li>
                            </ul>
                            @endif
                        </li>

                        <li> <a href="#">Laptop</a>
                            <ul class="categ">
                                <li>
                    @foreach($departments_lap as $dep)
                        <a href="{{url($dep->deb_name_en)}}"><img src="{{Storage::url($dep->icon)}}" alt="laptop" width="{{$dep->width}}" height="{{$dep->height}}" /></a>
                    @endforeach
                                </li>
                            </ul>
                        </li>

                        <li> <a href="#">Tablet</a>

                            <ul class="categ">
                            <li>

                            @foreach($departments_tap as $dep)
                             <a href="{{url('tablet/'.$dep->deb_name_en)}}"><img src="{{Storage::url($dep->icon)}}" alt="tablt" width="{{$dep->width}}" height="{{$dep->height}}" /></a>
                            @endforeach

                            </li>
                            </ul>

                        </li>

                        <li> <a href="#">Mobile</a>

                            <ul class="categ">
                                <li>

                                @foreach($departments_mob as $dep)
                                     <a href="{{url('mobile/'.$dep->deb_name_en)}}"><img src="{{Storage::url($dep->icon)}}" alt="tablt" width="{{$dep->width}}" height="{{$dep->height}}" /></a>
                               @endforeach

                                </li>
                            </ul>

                        </li>

                        <li id="logo">
                            <a href="{{url('/')}}">
                                <span class="main-bgcolor">SKY</span>
                                <span>TECH</span>
                            </a>
                        </li>

                        <li>

                           <a href="{{url('about')}}">About</a>

                        </li>


                        <li>

                            <a href="{{url('shop')}}">Shop</a>

                        </li>

                        <li>

                            <a href="{{url('contact')}}">Contact</a>

                        </li>

                        <li class="cart img">

                            <img src="{{url('/')}}/design/design/img/online-shop.svg" width="30px" />
                            <span></span>

                        </li>

                    </ul>

<!--                    end for laptops-->

<!--                    for mobile and tablets-->

                    <div class="toggle-menu">

                        <i class=" menu fa fa-bars fa-2x"></i>

						<a href="form.html"><i class=" toggle user fa fa-user"></i></a>

                        <img class=" toggle img cart" src="{{url('/')}}/design/design/img/online-shop.svg" width="30px" />
                    </div>


<!--                    end for mobile and tablets-->

                </div>

            </div>
<!-- end nav-bar-->

<!--            start view-cart-->

            <section class="view-cart">

                <div class="container">

                    <div class="close"><i class="fa fa-window-close"></i> </div>
                    <img class="fl-right img" src="{{url('/')}}/design/design/img/online-shop.svg" width="50px"  />
                    <div class="clearfix"></div>
                    <!-- Start In Cart -->
                    <div class="in-cart">
                            <div id="success-delete">
                                <h4 class="alert alert-success text-center">
                                    {{trans('admin.success_delete')}}
                                    <i class="fa fa-trash" style="color:red"> </i>
                                </h4>
                            </div>


                            @if(Auth::check())
                                @foreach(items() as $item)
                                <div class="row item_order" order-id="{{$item->id}}"> <!-- This Div -->
                                    @include('design.row_shops')
                                </div>
                                @endforeach
                            @endif
                    </div>
                    <!-- End In Cart -->

                    <div class="check">

                        <span>Total</span>
                        @if(Auth::check())

                        <span class="fl-right price" id="total-price">
                           @if(session()->has('total'))
                           {{session()->get('total')}} USD
                           @else
                            0 USD
                           @endif
                        </span>

                        <div class="clearfix"></div>

                        <button class="btn hvr-sweep-to-top" data-toggle="modal" data-target="#exampleModal">Check Out</button>
                        <br/>
                        <button class="btn paypal"><img src="{{url('/')}}/design/design/img/2000px-PayPal_logo.svg.png" /></button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                                <h4 class="alert" id="message_checkout" style="color:blue">
                                    Total Coast Is: <span style="color:red">{{session()->get('total')}} USD</span>
                                </h4>

                                <h4 class="alert" id="message_checkout" style="color:blue">
                                    Total Coast After charging : <span style="color:red">{{session()->get('total') + 40}} USD</span>
                                </h4>
                            </div>
                            <div class="modal-footer">
                            <button class="btn hvr-sweep-to-top" data-toggle="modal" data-target="#exampleModal" id="checkout" data-url="{{url('checkout')}}" data-token="{{csrf_token()}}">CheckOut</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        @else
                        <span class="fl-right price total-price"> 0 USD</span>
                        <div class="clearfix"></div>

                        <button class="btn hvr-sweep-to-top">Check Out</button>
                        <br/>
                        <button class="btn paypal"><img src="{{url('/')}}/design/design/img/2000px-PayPal_logo.svg.png" /></button>
                        @endif


                    </span>

                </div>

            </section>

<!--            end view-cart-->

<!--        start pop up-->

<div class="pop">

            <nav>

                <h2 class="h1">Menu</h2>
                <ul>

                    <li><a class="main-color" href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="contacts.html">Contact</a></li>

                </ul>

            </nav>

        </div>

<!--        end pop up-->
