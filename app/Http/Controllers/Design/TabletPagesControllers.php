<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Tablet;
use App\Model\Ordar;
use Storage;

class TabletPagesControllers extends Controller
{

    public function huawei(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Tablet::whereIn('parent_tap', [9])->paginate(18);
        return view('design/tablet/huawei', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function samsung(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Tablet::whereIn('parent_tap', [11])->paginate(18);
        return view('design/tablet/samsung', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function lenovo(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Tablet::whereIn('parent_tap', [10])->paginate(18);
        return view('design/tablet/lenovo', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }


    public function apple(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Tablet::whereIn('parent_tap', [12])->paginate(18);
        return view('design/tablet/apple', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }


    public function tablet_buy($id){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $tablet = tablet::find($id);
        $ordars = Ordar::all();
        return view('design.desc_tablet', compact('ordars', 'tablet', 'departments_tap', 'departments_mob', 'departments_lap'));
     }

   
}
