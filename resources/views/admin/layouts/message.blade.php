@if(count($errors->all()) > 0))
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li> {{$error}}</li>
    @endforeach
</ul>
</div>
@endif

@if(session()->has('success_add'))
<div class="alert alert-success">
    <h2 class="text-center">  {{session('success_add')}}</h2>
</div>
@endif
@if(session()->has('success_update'))
<div class="alert alert-success">
    <h2 class="text-center">  {{session('success_update')}}</h2>
</div>
@endif