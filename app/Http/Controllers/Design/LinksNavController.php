<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Laptop;
use App\Model\Tablet;
use App\Model\Mobile;
use App\Model\Ordar;
use App\Model\Contact;
use App\Model\Vistor;
use Storage;
use App\Mail\ContactMail;
use Mail;
class LinksNavController extends Controller
{

    public function home(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $lights_lap = Laptop::get()->whereIn('offer_type', 1);
        $mosts_lap = Laptop::get()->whereIn('offer_type', 2);
        $recent_lap = Laptop::get()->whereIn('offer_type', 3);

        $lights_tap = Tablet::get()->whereIn('offer_type', 1);
        $mosts_tap = Tablet::get()->whereIn('offer_type', 2);
        $recent_tap = Tablet::get()->whereIn('offer_type', 3);

        $lights_mob = Mobile::get()->whereIn('offer_type', 1);
        $mosts_mob = Mobile::get()->whereIn('offer_type', 2);
        $recent_mob = Mobile::get()->whereIn('offer_type', 3);

        $vistor = Vistor::where('ip', '=', $_SERVER['REMOTE_ADDR'])->first();
        if($vistor == null)
        {
            $add = new Vistor;
            $add->ip = $_SERVER['REMOTE_ADDR'];
            $add->save();
        }
        return view('design/home', compact(
            'departments_lap', 'departments_tap', 'departments_mob',
            'lights_lap', 'mosts_lap', 'recent_lap',
            'lights_tap', 'mosts_tap', 'recent_tap',
            'lights_mob', 'mosts_mob', 'recent_mob',
            ));
    }


    public function about(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        return view('design/about', compact('departments_lap', 'departments_tap', 'departments_mob'));
    }

    public function contact(){

        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        return view('design/contacts', compact('departments_lap', 'departments_tap', 'departments_mob'));
    }

    public function create_contact(Request $request){

        $data = $this->validate(request(), [
            'name'          => 'required',
            'email'         => 'required',
            'message'       => 'required',
        ], [], [
            'name'          => trans('admin.name'),
            'email'         => trans('admin.email'),
            'message'       => trans('admin.message'),
        ]);
        
       Contact::create($data);
       $request->session()->put('message', request('message'));
       $request->session()->put('name', request('name'));
       Mail::to(request('email'))->send(new \App\Mail\ContactMail());
       return back();
    }

  
}
