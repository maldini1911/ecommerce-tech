@extends('design/index')

@section('info')
	
    <div class="container">
        
        <div class="login-page">

            <div class="form">

                    <form class="login-form" method="post">
                      {!! csrf_field() !!}

                      <input type="email" placeholder="أدخال البريد الألكتروني" name="email" value="{{$data->email}}" autocomplete="off"/>
                      <input type="password" placeholder="Write Your password" name="password" required="required"/>
                        
                      <button class="hvr-sweep-to-top" type="submit">Reset Password</button>
                        
                      <a href="{{url('form')}}" class="forget_password">Login</a>
    
                    
                    </form>
            </div>

        </div>
        
   </div>



@endsection