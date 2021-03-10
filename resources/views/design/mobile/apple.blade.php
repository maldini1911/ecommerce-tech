@extends('design/index')

@section('info')

<!--  Start Product Mobile Apple -->
<section class="product">
    <div class="container">
        <div class="text-center logo-category" style="margin-top:100px">
            <img src="{{url('/')}}/design/design/img/apple.png" style="width:100px">
        </div>
        <div class="row">
            @foreach($parents as $parent)
                @for($i = 0; $i <= 5; $i++)
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="product-img">
                            <img class="img-responsive" src="{{Storage::url($parent->mobile_image)}}" alt="picture mobile">

                            <div class="overlay">
                            <h4>{{$parent->name}}</h4>
                                <p>
                                    {{$parent->ram}} - {{$parent->memory}} - {{$parent->screen_size}} - {{$parent->camera}}
                                </p>
                                <span> {{$parent->price}} <span class="icon-price">EG</span></span>
                                <div class="more-data">
                                    <a href="{{url('mobile/buy/'.$parent->id)}}"> More...</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endfor
            @endforeach
        </div>
        {!! $parents->render() !!}
    </div>
</section>
<!--  End Product Mobile Apple -->

@endsection
