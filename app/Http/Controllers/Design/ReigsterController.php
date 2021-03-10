<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Department;
use App\Model\User;

class ReigsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        return view('design/form', compact('departments_lap', 'departments_tap', 'departments_mob'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('design/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'name'        => 'required',
            'email'       => 'required|email|unique:users',
            'password'    => 'required',
            'type'        => 'required',
            'mobile'      => 'required', 
      ], [], [
            'name'        => trans('admin.name'),
            'email'       => trans('admin.email'),
            'password'    => trans('admin.password'),
            'type'        => trans('admin.type'),
            'mobile'      => trans('admin.mobile'), 
      ]);

        $email = request('email');
        $password = request('password');
        $data['password'] = bcrypt(request('password'));

        User::create($data);
        session()->flash('success_add', trans('admin.success_add'));

        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            return redirect('/');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
