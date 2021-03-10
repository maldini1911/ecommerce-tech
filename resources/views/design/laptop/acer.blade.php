@extends('design/index')

@section('info')

<!-- Start Product Acer -->
<section class="product">
    <div class="container">

        <div class="text-center logo-category">
            <img src="{{url('/')}}/design/design/img/acer.png" style="width:200px">
        </div>

        <div class="row">
            @foreach($parents as $parent)
                @for($i = 0; $i <= 4; $i++)
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
                @endfor
            @endforeach
        </div>
        {!! $parents->render() !!}
    </div>
</section>
<!-- End Product Acer -->
@endsection
