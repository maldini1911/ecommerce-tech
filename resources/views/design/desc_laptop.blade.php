@extends('design/index')

@section('info')
            
            <section class="details details-laptop">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-6 view-product text-center">
                            
                            <h1>{{$laptop->name}}</h1>
                            
                            <div class="img">
                                
                                <img class="image-responsive" src="{{Storage::url($laptop->laptop_image)}}" width="100%" height="100%" />
                                
                            </div>
                                     
                        </div>
                        
                        <div class="col-md-6 txt">
                            
                            <div class="row">
                                
                                <div class="col-md-12 buy">
                                    
                                    <h2>buy now</h2>
                                    
                                    <span class="main-color price">{{$laptop->price}} EGP</span>
                                    
                                    @if(Auth::check())
                                    
                                    <form action="{{url('order/store')}}" method="post" id="create_order">
                                    {!! csrf_field() !!}
                                    <input class="amount" type="number" value="1" min="1" name="count_shop" required="required"/>
                                    <input type="hidden" name="id_user" value="{{Auth()->guard('web')->user()->id}}">
                                    <input type="hidden" name="id_laptop" value="{{$laptop->id}}">
                                    <input type="hidden" name="price" value="{{$laptop->price}}">
                                    <button class="btn hvr-sweep-to-top" type="submit" id="add_shop">ADD TO CART</button>
                                    </form>

                                        
                                    <div class="alert alert-danger hidden match_product">
                                        <h4 class="text-center">Sorry This Order Added Before In Basket</h4>
                                        <h4 class="text-center">Please Check Your Basket</h4>
                                    </div>
                                     
                                    <div class="alert alert-success success-add">
                                        <h4 class="text-center">  {{trans('admin.success-add')}} </h4>
                                    </div>
                                      
                                    @else
                                   
                                    <button class="btn hvr-sweep-to-top no-login" >ADD TO CART</button>
                                    <div class="alert alert-danger not-login">
                                        <h4 class="text-center">  {{trans('admin.not-login')}} </h4>
                                    </div>

                                    @endif
                                    
                                </div>
                                
                                <div class="col-md-12 overview">
                                    
                                    <h4 class="main-color">Quick Overview</h4>
                                    
                                    <ul>
                                        
                                        <li class="cpu">
                                            
                                            <span>CPU :</span>  {{$laptop->cpu}}
                                            
                                        </li>
                                        
                                        <li class="ram">
                                            
                                            <span>RAM :</span>  {{$laptop->ram}}
                                            
                                        </li>
                                        
                                        <li class="battery">
                                            
                                            <span>Battery :</span>  {{$laptop->battry}}
                                            
                                        </li>
                                        
                                        <li class="wifi">
                                            
                                            <span>Internal Wifi :</span>  {{$laptop->wifi}} 
                                            
                                        </li>
                                        
                                        <li class="screen">
                                            
                                            <span>Screen Size :</span> {{$laptop->screen_size}}
                                            
                                        </li>
                                        
                                        <li class="Hard">
                                            
                                            <span>Hard Drive :</span>  {{$laptop->hard_drive}}
                                            
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                


@endsection