<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Laptop;
use App\Model\Ordar;

use Storage;


class LaptopPagesController extends Controller
{

    public function acer(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [2])->paginate(18);
    
        return view('design/laptop/acer', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function hp(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [3])->paginate(18);
        return view('design/laptop/hp', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function dell(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [4])->paginate(18);
        return view('design/laptop/dell', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }


    public function lenovo(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [5])->paginate(18);
        return view('design/laptop/lenovo', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function toshiba(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [6])->paginate(18);
        return view('design/laptop/toshiba', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function apple(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $parents = Laptop::whereIn('parent_lap', [7])->paginate(18);
        return view('design/laptop/apple', compact('departments_lap', 'departments_tap', 'departments_mob', 'parents'));
    }

    public function laptop_buy($id){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $laptop = Laptop::find($id);
        return view('design.desc_laptop', compact('laptop', 'departments_tap', 'departments_mob', 'departments_lap'));
     }
   
}
