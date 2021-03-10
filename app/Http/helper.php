<?php

//== Function Langs
if(!function_exists('lang')){

    function lang(){

        if(session()->has('lang')){

            return session('lang');

        }else{

            session()->put('lang', setting()->main_lang);
            return setting()->main_lang;
        }
    }
}

//== Function Dir
if(!function_exists('direction')){

    function direction(){

        if(session()->has('lang')){

            if(session('lang') == 'ar'){

                return 'ltr';

            }else{

                return 'rtl';
                
            }

        }else{

            return "rtl";
        }
    }
}


//== Validate Image
if(!function_exists('validate_image')){

    function validate_image($ext = null){
      if($ext === null){

        return "sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg";

      }else{

        return 'sometimes|nullable|image|mimes:' . $ext;
      }
    }
}

//== Fetch Uploade Controller
if(!function_exists('Up')){

    function Up(){
        return new \App\Http\Controllers\Admin\Upload;
    }
}


//== Jstree
if(!function_exists('load_dep')){

    function load_dep($select = null, $dep_hide = null){

        $departments = \App\Model\Department::selectRaw('deb_name_'.session('lang').' as text')
        ->selectRaw('id as id')
        ->selectRaw('parent as parent')
        ->get(['text', 'parent', 'id']);
        $dep_arr = [];
        foreach($departments as $department){
            $list_arr = [];
            $list_arr['icon']           = '';
            $list_arr['li-attr']        = '';
            $list_arr['a_attr']         = '';
            $list_arr['children']       = [];

            if($select !== null and $select == $department->id){

                $list_arr['state']          = [
                'opened'    => true,
                'selected'  => true,
                'disabled'  => false,
            ];
          
        }

        if($dep_hide !== null and $dep_hide == $department->id){

            $list_arr['state']          = [
            'opened'    => false,
            'selected'  => false,
            'disabled'  => true,
            'hidden'    => true
        ];
      
    }

        $list_arr['id'] = $department->id;
        $list_arr['parent'] = $department->parent != null?$department->parent:'#';
        $list_arr['text'] = $department->text;
        array_push($dep_arr, $list_arr);

        }

        return json_encode($dep_arr, JSON_UNESCAPED_UNICODE);
    }
}

//----> Get Data For Settings 
if(!function_exists('setting')){

    function setting(){
        return \App\Model\Setting::orderBy('id', 'desc')->first();
    }
}

if(!function_exists('items')){

    function items(){
        return \App\Model\Ordar::where('order_state', 'new')->where('buy_state', 'no')->where('finsh', 'no')->get();
    }
}


if(!function_exists('match_product')){

    function match_product(){
        return 'Sorry This Order Added Before In Basket';
    }
}