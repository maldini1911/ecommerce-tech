<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting;
use Storage;

class SettingController extends Controller
{
    public function setting(){
        
        return view('admin.settings', ['title' => trans('admin.settings')]);
    }

    public function setting_save(){
       
        $data = $this->validate(request(), [
            'sitename_ar'           => 'required',
            'sitename_en'           => 'required',
            'logo'                  => validate_image(),
            'icon'                  => validate_image(),
            'main_lang'             => 'sometimes|nullable',
            'description'           => 'sometimes|nullable',
            'keywords'              => 'sometimes|nullable',
            'status'                => 'sometimes|nullable',
            'message_mainenance'    => 'sometimes|nullable',
        ], [], [
            'sitename_ar'           => trans('admin.sitename_ar'),
            'sitename_en'           => trans('admin.sitename_en'),
            'logo'                  => trans('admin.logo'),
            'icon'                  => trans('admin.icon'),
            'main_lang'             => trans('admin.main_lang'),
            'description'           => trans('admin.description'),
            'keywords'              => trans('admin.keywords'),
            'status'                => trans('admin.status_site'),
            'message_mainenance'    => trans('admin.itename_ar'),
        ]);

        if(request()->hasFile('logo')){
            $data['logo'] = Up()->Upload([
                'file' => 'logo',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->logo,
            ]);   
        }

        if(request()->hasFile('icon')){
            $data['icon'] = Up()->Upload([
                'file' => 'icon',
                'path' => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->icon,
            ]);   
        }


        Setting::orderBy('id', 'desc')->update($data);
        session()->flash('update', trans('admin.success_edit'));
        return back();


    }
}
