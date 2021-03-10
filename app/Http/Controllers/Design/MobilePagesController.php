<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Mobile;
use Storage;

class MobilePagesController extends Controller
{

    public function huawei(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [14])->paginate(18);
        return view('design/mobile/huawei', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function samsung(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [15])->paginate(18);
        return view('design/mobile/samsung', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function lenovo(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [17])->paginate(18);
        return view('design/mobile/lenovo', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }


    public function apple(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [19])->paginate(18);
        return view('design/mobile/apple', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function oppo(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [16])->paginate(18);
        return view('design/mobile/oppo', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function infinx(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Mobile::whereIn('parent_mob', [18])->paginate(18);
        return view('design/mobile/infinx', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function mobile_buy($id){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $mobile = Mobile::find($id);
        return view('design.desc_mobile', compact('departments_lap', 'departments_tap', 'departments_mob', 'mobile'));
     }

   
}
