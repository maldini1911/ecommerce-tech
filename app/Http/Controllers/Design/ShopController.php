<?php

namespace App\Http\Controllers\Design;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Laptop;
use App\Model\Tablet;
use App\Model\Mobile;
use Storage;

class ShopController extends Controller
{

    public function shop(){
        $departments_lap = Department::get()->whereIn('parent', 1);
        $departments_tap = Department::get()->whereIn('parent', 8);
        $departments_mob = Department::get()->whereIn('parent', 13);
        $laptops = Laptop::paginate(12);
        $tablets = Tablet::paginate(12);
        $mobiles = Mobile::paginate(12);
        //===========================================
        $lap_count = Laptop::get()->count(); //----> Count All Laptop
        $tab_count = Tablet::get()->count(); //----> Count All Tablet
        $mob_count = Mobile::get()->count(); //----> Count All Mobile
        //------------------------------------------- //-----------> Count Brand Laptop
        $acer_count = Laptop::whereIn('parent_lap', [2])->count();
        $hp_count = Laptop::whereIn('parent_lap', [3])->count();
        $dell_count = Laptop::whereIn('parent_lap', [4])->count();
        $lenovo_lap_count = Laptop::whereIn('parent_lap', [5])->count();
        $toshiba_count = Laptop::whereIn('parent_lap', [6])->count();
        $apple_count = Laptop::whereIn('parent_lap', [7])->count();
        //-------> Count Brand Tablet
        $samsung_tap_count = Tablet::where('parent_tap', [11])->count();
        $apple_tap_count = Tablet::where('parent_tap', [12])->count();
        $huawei_tap_count = Tablet::where('parent_tap', [9])->count();
        $lenovo_tap_count = Tablet::where('parent_tap', [10])->count();
        //-------> Count Brand Mobile
        $samsung_mob_count = Mobile::where('parent_mob', [15])->count();
        $apple_mob_count = Mobile::where('parent_mob', [19])->count();
        $huawei_mob_count = Mobile::where('parent_mob', [14])->count();
        $lenovo_mob_count = Mobile::where('parent_mob', [17])->count();
        $oppo_mob_count = Mobile::where('parent_mob', [16])->count();
        $infinix_mob_count = Mobile::where('parent_mob', [18])->count();
        //---------> Count OS Type For Laptop 
        $doc_count = Laptop::whereIn('os_type', [1])->count();
        $mac_count = Laptop::whereIn('os_type', [2])->count();
        $windows_count = Laptop::whereIn('os_type', [3])->count();
        //---------> Count Processor Type
        $corei3_count = Laptop::whereIn('processor_type', ['Core i3'])->count();
        $corei5_count = Laptop::whereIn('processor_type', ['Core i5'])->count();
        $corei7_count = Laptop::whereIn('processor_type', ['Core i7'])->count();
        //--------> Count Price Laptop
        $count_price_lap_1 = Laptop::where('price', '<=', [2000])->count();
        $count_price_lap_2 = Laptop::where('price', '>', [2000])->where('price', '<=', [4000])->count();
        $count_price_lap_3 = Laptop::where('price', '>', [4000])->where('price', '<=', [6000])->count();
        $count_price_lap_4 = Laptop::where('price', '>', [6000])->where('price', '<=', [8000])->count();
        $count_price_lap_5 = Laptop::where('price', '>', [8000])->count();
        //----------> Count Price Tablet
        $count_price_tap_1 = Tablet::where('price', '<=', [2000])->count();
        $count_price_tap_2 = Tablet::where('price', '>', [2000])->where('price', '<=', [4000])->count();
        $count_price_tap_3 = Tablet::where('price', '>', [4000])->where('price', '<=', [6000])->count();
        $count_price_tap_4 = Tablet::where('price', '>', [6000])->where('price', '<=', [8000])->count();
        $count_price_tap_5 = Tablet::where('price', '>', [8000])->count();
        //-----------> Count Price Mobile
        $count_price_mob_1 = Mobile::where('price', '<=', [2000])->count();
        $count_price_mob_2 = Mobile::where('price', '>', [2000])->where('price', '<=', [4000])->count();
        $count_price_mob_3 = Mobile::where('price', '>', [4000])->where('price', '<=', [6000])->count();
        $count_price_mob_4 = Mobile::where('price', '>', [6000])->where('price', '<=', [8000])->count();
        $count_price_mob_5 = Mobile::where('price', '>', [8000])->count();
        //============================================= //---------> Get Brand Laptop
        $acer = Laptop::whereIn('parent_lap', [2])->paginate(12);
        $hp = Laptop::whereIn('parent_lap', [3])->paginate(12);
        $dell = Laptop::whereIn('parent_lap', [4])->paginate(12);
        $lenovo = Laptop::whereIn('parent_lap', [5])->paginate(12);
        $toshiba = Laptop::whereIn('parent_lap', [6])->paginate(12);
        $apple = Laptop::whereIn('parent_lap', [7])->paginate(12);
        //---------> Get Brand Tablet
        $samsung_tap = Tablet::where('parent_tap', [11])->paginate(12);
        $apple_tap = Tablet::where('parent_tap', [12])->paginate(12);
        $huawei_tap = Tablet::where('parent_tap', [9])->paginate(12);
        $lenovo_tap = Tablet::where('parent_tap', [10])->paginate(12);
        //---------> Get Brand Mobile
        $samsung_mob = Mobile::where('parent_mob', [15])->paginate(12);
        $apple_mob = Mobile::where('parent_mob', [19])->paginate(12);
        $huawei_mob = Mobile::where('parent_mob', [14])->paginate(12);
        $lenovo_mob = Mobile::where('parent_mob', [17])->paginate(12);
        $oppo_mob = Mobile::where('parent_mob', [16])->paginate(12);
        $infinix_mob = Mobile::where('parent_mob', [18])->paginate(12);
        //=================================================== 
        //----> Get OS Laptop
        $doc = Laptop::whereIn('os_type', [1])->paginate(12);
        $mac = Laptop::whereIn('os_type', [2])->paginate(12);
        $windows = Laptop::whereIn('os_type', [3])->paginate(12);
        //==============================================
        //-----> Price Laptop
        $prcie_lap_1 = Laptop::where('price', '<=', [2000])->paginate(16);
        $prcie_lap_2 = Laptop::where('price', '>', [2000])->where('price', '<=', [4000])->paginate(16);
        $prcie_lap_3 = Laptop::where('price', '>', [4000])->where('price', '<=', [6000])->paginate(16);
        $prcie_lap_4 = Laptop::where('price', '>', [6000])->where('price', '<=', [8000])->paginate(16);
        $prcie_lap_5 = Laptop::where('price', '>', [8000])->paginate(16);
        //------> Price Tablet
        $price_tap_1 = Tablet::where('price', '<=', [2000])->paginate(16);
        $price_tap_2 = Tablet::where('price', '>', [2000])->where('price', '<=', [4000])->paginate(16);
        $price_tap_3 = Tablet::where('price', '>', [4000])->where('price', '<=', [6000])->paginate(16);
        $price_tap_4 = Tablet::where('price', '>', [6000])->where('price', '<=', [8000])->paginate(16);
        $price_tap_5 = Tablet::where('price', '>', [8000])->paginate(16);
        //-----> Price Mobile
        $price_mob_1 = Mobile::where('price', '<=', [2000])->paginate(16);
        $price_mob_2 = Mobile::where('price', '>', [2000])->where('price', '<=', [4000])->paginate(16);
        $price_mob_3 = Mobile::where('price', '>', [4000])->where('price', '<=', [6000])->paginate(16);
        $price_mob_4 = Mobile::where('price', '>', [6000])->where('price', '<=', [8000])->paginate(16);
        $price_mob_5 = Mobile::where('price', '>', [8000])->paginate(16);
        //==============================================
        //------> processor_type
        $coreI3 = Laptop::where('processor_type', ['Core i3'])->paginate(16);
        $coreI5 = Laptop::where('processor_type', ['Core i5'])->paginate(16);
        $coreI7 = Laptop::where('processor_type', ['Core i7'])->paginate(16);

        return view('design/shop', compact(
            'departments_lap', 'departments_tap', 'departments_mob',
            'laptops', 'tablets','mobiles',
            'lap_count', 'tab_count','mob_count',
            'acer_count', 'hp_count', 'dell_count', 'lenovo_lap_count', 'toshiba_count', 'apple_count',
            'samsung_tap_count', 'apple_tap_count', 'huawei_tap_count', 'lenovo_tap_count',
            'samsung_mob_count', 'apple_mob_count', 'huawei_mob_count', 'lenovo_mob_count', 'oppo_mob_count', 'infinix_mob_count',
            'doc_count', 'mac_count', 'windows_count',
            'count_price_lap_1', 'count_price_lap_2', 'count_price_lap_3', 'count_price_lap_4', 'count_price_lap_5',
            'count_price_tap_1', 'count_price_tap_2', 'count_price_tap_3', 'count_price_tap_4', 'count_price_tap_5',
            'count_price_mob_1', 'count_price_mob_2', 'count_price_mob_3', 'count_price_mob_4', 'count_price_mob_5',
            'corei3_count', 'corei5_count', 'corei7_count',
            'acer', 'hp', 'dell', 'lenovo', 'toshiba', 'apple',
            'samsung_tap', 'apple_tap', 'huawei_tap', 'lenovo_tap',
            'samsung_mob', 'apple_mob', 'huawei_mob', 'lenovo_mob', 'oppo_mob', 'infinix_mob',
            'doc', 'mac', 'windows',
            'coreI3', 'coreI5', 'coreI7',
            'prcie_lap_1', 'prcie_lap_2', 'prcie_lap_3', 'prcie_lap_4', 'prcie_lap_5',
            'price_tap_1', 'price_tap_2', 'price_tap_3', 'price_tap_4', 'price_tap_5',
            'price_mob_1', 'price_mob_2', 'price_mob_3', 'price_mob_4', 'price_mob_5',
            ));
    }


 

  
}
