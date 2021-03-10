<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\UserResetPassword;
use App\Model\Department;
use App\Model\User;
use DB;
use Carbon\Carbon;
use Mail;

class LoginUserController extends Controller
{
    public function login()
    {
        return view('design/form');
    }


    public function login_post(){
        $remember = request('remember') == 1 ? true : false;

        if(auth()->guard('web')->attempt(['name' => request('name'), 'password' => request('password')],$remember)){

            return redirect('/');
        }else{

            return back();
        }

    }

    public function logout(){
        auth()->guard('web')->logout();
        return redirect('form');
    }

    public function forget_password()
    {
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);

        return view('design/forget_password', compact('departments_lap', 'departments_tap', 'departments_mob'));
    }

    public function forget_password_post(){
        $user = User::where('email', request('email'))->first();
        if(!empty($user)){
            $token = app('auth.password.broker')->createToken($user);
            $data = DB::table('password_resets')->insert([
                'email' => $user->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            Mail::to($user->email)->send(new UserResetPassword(['data' => $user, 'token' => $token]));
            session()->flash('success_reset', 'تم ارسال تعديل لينك اعادة كلمة السر الي الايميل الخاص بك');
            return back();

        }else{
            session()->flash('no_email', 'هذا البريد ليس مسجلا . من فضلة قم بالتأكد منه !!');

            return back();
        }
        return back();
    }

    public function reset_password($token){

        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);


        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($check_token)){

            return view('design.reset_password', ['departments_lap' => $departments_lap, 'departments_tap' => $departments_tap, 'departments_mob' => $departments_mob, 'data' => $check_token]);
        }else{

            return redirect('forget/password');
        }
                    
    }

    public function reset_password_post($token){

        $this->validate(request(), [
            'password' => 'required',
        ], [],[
            'password' => 'password'
        ]);
        
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if(!empty($check_token)){

           $user = User::where('email', $check_token->email)->update([
               'email'  =>  $check_token->email,
               'password' => bcrypt(request('password'))
               ]);

               DB::table('password_resets')->where('email', request('email'))->delete();
               Auth()->guard('web')->attempt(['email' => $check_token->email, 'password'=> request('password')], true);
               return redirect('/');
        }else{

            return redirect('forget/password');
        }
    }
}
