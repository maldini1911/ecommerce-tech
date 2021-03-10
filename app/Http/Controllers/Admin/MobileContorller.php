<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\MobileDatatables;
use App\Model\Mobile;
use Storage;

class MobileContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MobileDatatables $mobile)
    {
        return $mobile->render('admin.mobile.index', ['title' => trans('admin.mobile')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobile.create', ['title' => trans('admin.add')]);
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
            'name'          => 'required',
            'price'         => 'sometimes|nullable',
            'desc'          => 'sometimes|nullable',
            'cpu'           => 'sometimes|nullable',
            'ram'           => 'sometimes|nullable',
            'camera'        => 'sometimes|nullable',
            'memory'        => 'sometimes|nullable',
            'screen_size'   => 'sometimes|nullable',
            'parent_mob'    => 'sometimes|nullable',
            'offer_type'    => 'sometimes|nullable',
            'sale'          => 'sometimes|nullable',
            'mobile_image'  => validate_image(),
         ], [], [
            'name'            => trans('admin.name_protect'),
            'price'           => trans('admin.price_protect'),
            'desc'            => trans('admin.desc_protect'),
            'cpu'             => trans('admin.cpu'),
            'ram'             => trans('admin.ram'),
            'camera'          => trans('admin.battry'),
            'memory'          => trans('admin.wifi'),
            'screen_size'     => trans('admin.screen_size'),
            'parent_tap'      => trans('admin.parent'),
            'tablet_image'    => trans('admin.tablet_image'),
            'offer_type'      => trans('admin.offer_type'),
            'sale'            => trans('admin.sale'),
        ]);
 
        if(request()->hasFile('mobile_image')){
            $data['mobile_image'] = Up()->Upload([
                'file' => 'mobile_image',
                'path' => 'mobile',
                'upload_type' => 'single',
                'delete_file'=>''
            ]);
        }

        Mobile::create($data);
        session()->flash('success_add', trans('admin.success_add'));
        return redirect('mobile');
 
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
        $title = trans('admin.edit');
        $mob = Mobile::find($id);
        return view('admin.mobile.edit', compact('title', 'mob'));
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
            'name'          => 'required',
            'price'         => 'sometimes|nullable',
            'desc'          => 'sometimes|nullable',
            'cpu'           => 'sometimes|nullable',
            'ram'           => 'sometimes|nullable',
            'camera'        => 'sometimes|nullable',
            'memory'        => 'sometimes|nullable',
            'screen_size'   => 'sometimes|nullable',
            'parent_mob'    => 'sometimes|nullable',
            'offer_type'    => 'sometimes|nullable',
            'sale'          => 'sometimes|nullable',
            'mobile_image'  => validate_image(),
         ], [], [
            'name'            => trans('admin.name_protect'),
            'price'           => trans('admin.price_protect'),
            'desc'            => trans('admin.desc_protect'),
            'cpu'             => trans('admin.cpu'),
            'ram'             => trans('admin.ram'),
            'camera'          => trans('admin.battry'),
            'memory'          => trans('admin.wifi'),
            'screen_size'     => trans('admin.screen_size'),
            'parent_tap'      => trans('admin.parent'),
            'tablet_image'    => trans('admin.tablet_image'),
            'offer_type'      => trans('admin.offer_type'),
            'sale'            => trans('admin.sale'),
        ]);
 
        if(request()->hasFile('mobile_image')){
            $data['mobile_image'] = Up()->Upload([
                'file' => 'mobile_image',
                'path' => 'mobile',
                'upload_type' => 'single',
                'delete_file' => Mobile::find($id)->mobile_image,
            ]);   
        }

        Mobile::find($id)->update($data);
        session()->flash('success_update', trans('admin.success_update'));
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
        $del = Mobile::find($id);
        Storage::delete($del->mobile_image);
        $del->delete();
        return back();
    }

    public function multi_delete(){

        if(is_array(request('item'))){

            foreach(request('item') as $id){

                $del = Mobile::find($id);
                Storage::delete($del->mobile_image);
                $del->delete();
            }
           

        }else{

                $del = Mobile::find(request('item'));
                Storage::delete($del->mobile_image);
                $del->delete();

        }

        return back();
    }
}
