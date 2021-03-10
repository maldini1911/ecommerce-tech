@if(count($errors->all()) > 0))
<div class="alert alert-danger text-center"  style="margin-top:100px">
<ul>
    @foreach($errors->all() as $error)
        <li> {{$error}}</li>
    @endforeach
</ul>
</div>
@endif

@if(session()->has('success_add'))
<div class="alert alert-success" style="margin-top:100px">
    <h2 class="text-center">  {{session('success_add')}}</h2>
</div>
@endif
@if(session()->has('success_update'))
<div class="alert alert-success" style="margin-top:100px">
    <h2 class="text-center">  {{session('success_update')}}</h2>
</div>
@endif

@if(session()->has('success_reset'))
<div class="alert alert-success" style="margin-top:100px">
    <h2 class="text-center">  {{session('success_reset')}}</h2>
</div>
@endif

@if(session()->has('no_email'))
<div class="alert alert-danger " style="margin-top:100px">
    <h2 class="text-center">  {{session('no_email')}}</h2>
</div>
@endif


@if(session()->has('exsist_order'))
<div class="alert alert-danger " style="margin-top:100px">
    <h2 class="text-center">  {{session('exsist_order')}}</h2>
</div>
@endif