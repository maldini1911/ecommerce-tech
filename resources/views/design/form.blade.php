@extends('design/index')

@section('info')
	
    <div class="container">
        
        <div class="login-page">

            <div class="form">

                    <form class="login-form" action="{{url('login/user')}}" method="post">
                      {!! csrf_field() !!}
                      <input type="text" placeholder="name" name="name" required="required"/>
                        
                      <input type="password" placeholder="password" name="password" required="required"/>
                        
                      <button class="hvr-sweep-to-top" type="submit">login</button>
                        
                      <p class="message">Not registered? <a href="{{url('login')}}">Create an account</a></p>
                      <a href="{{url('user/forget/password')}}" class="forget_password">Forget Password</a>
                    </form>
            </div>

        </div>
        
            <div class="up">
 
                <div class="up-login-page">
                     
                  <div class="up-form">
                   
                      
                    <form class="up-register-form" action="{{route('form.store')}}" method="POST">
                        {!! csrf_field() !!}
                      <input type="text" placeholder="name" name="name"/>
                        
                      <input type="password" placeholder="password" name="password"/>
                           
                      <input type="text" placeholder="email address" name="email"/>
                        
                        
                      <input type="text" placeholder="You Phone" name="mobile">
                        
                      <select id="poll" name="type">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                      </select>
                        
                      <button class="hvr-sweep-to-top">create</button>
                      <p class="back">To Login</p>
                        
                    </form>
                      
                  </div>
                    
                </div>

            </div>
   </div>



@endsection