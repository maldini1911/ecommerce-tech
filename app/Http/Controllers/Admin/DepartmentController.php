<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use Storage;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = trans('admin.all_department');
        return view('admin.departments.index', compact('title'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create', ['title' => trans('admin.add')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       $data = $this->validate(request(), [
           'deb_name_ar'     => 'required',
           'deb_name_en'     => 'required',
           'description'     => 'sometimes|nullable',
           'keyword'         => 'sometimes|nullable',
           'parent'          => 'sometimes|nullable',
           'width'           => 'sometimes|nullable', 
           'height'          => 'sometimes|nullable', 
           'icon'            => validate_image()
        ], [], [
           'deb_name_ar'     => trans('admin.deb_name_ar'),
           'deb_name_en'     => trans('admin.deb_name_en'),
           'description'     => trans('admin.description'),
           'keyword'         => trans('admin.keyword'),
           'parent'          => trans('admin.parent'),
           'icon'            => trans('admin.icon_deb'),
           'width'           => trans('admin.width'),
           'height'          => trans('admin.height'),
       ]);

       if(request()->hasFile('icon')){
        $data['icon'] = Up()->Upload([
            'file' => 'icon',
            'path' => 'departments',
            'upload_type' => 'single',
            'delete_file'=>''
        ]);
    }
       Department::create($data);
       session()->flash('success', trans('admin.success_add'));
       return redirect('departments');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        $title = trans('admin.edit');
        return view('admin.departments.edit', compact('department', 'title'));
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
        $data = $this->validate(request(), [
            'deb_name_ar'     => 'required',
            'deb_name_en'     => 'required',
            'description'     => 'sometimes|nullable',
            'keyword'         => 'sometimes|nullable',
            'parent'          => 'sometimes|nullable',
            'width'           => 'sometimes|nullable', 
            'height'          => 'sometimes|nullable', 
            'icon'            => validate_image()
         ], [], [
            'deb_name_ar'     => trans('admin.deb_name_ar'),
            'deb_name_en'     => trans('admin.deb_name_en'),
            'description'     => trans('admin.description'),
            'keyword'         => trans('admin.keyword'),
            'parent'          => trans('admin.parent'),
            'icon'            => trans('admin.icon_deb'),
            'width'           => trans('admin.width'),
            'height'          => trans('admin.height'),
        ]);
 
        if(request()->hasFile('icon')){
         $data['icon'] = Up()->Upload([
             'file' => 'icon',
             'path' => 'departments',
             'upload_type' => 'single',
             'delete_file'=> Department::find($id)->icon
         ]);
     }

        Department::where('id', $id)->update($data);
        session()->flash('success', trans('admin.success_edit'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Department::find($id);
        Storage::delete($del->logo);
        $del->delete();
        return back();
    }




}
