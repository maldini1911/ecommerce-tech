@extends('design/index')

@section('info')
	
    <div class="container">
        
        <div class="login-page">

            <div class="form">

                    <form class="login-form" action="{{url('user/forget/password')}}" method="post">
                      {!! csrf_field() !!}

                      <input type="email" placeholder="Write Your Email" name="email" required="required"/>
                        
                      <button class="hvr-sweep-to-top" type="submit">Reset Password</button>
                        
                      <a href="{{url('form')}}" class="forget_password">Login</a>
    
                    
                    </form>
            </div>

        </div>
        
   </div>



@endsection