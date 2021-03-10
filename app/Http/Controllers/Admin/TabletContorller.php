<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\TabletDatatables;
use App\Model\Tablet;
use Storage;

class TabletContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TabletDatatables $tablet)
    {
        return $tablet->render('admin.tablet.index', ['title' => trans('admin.tablet')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tablet.create', ['title' => trans('admin.add')]);
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
            'parent_tap'    => 'sometimes|nullable',
            'offer_type'    => 'sometimes|nullable',
            'sale'          => 'sometimes|nullable',
            'tablet_image'  => validate_image(),
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
 
        if(request()->hasFile('tablet_image')){
            $data['tablet_image'] = Up()->Upload([
                'file' => 'tablet_image',
                'path' => 'tablet',
                'upload_type' => 'single',
                'delete_file'=>''
            ]);
        }

        Tablet::create($data);
        session()->flash('success_add', trans('admin.success_add'));
        return redirect('tablet');
 
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
        $tap = Tablet::find($id);
        return view('admin.tablet.edit', compact('title', 'tap'));
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
            'parent_tap'    => 'sometimes|nullable',
            'offer_type'    => 'sometimes|nullable',
            'sale'          => 'sometimes|nullable',
            'tablet_image'  => validate_image(),
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
 
        if(request()->hasFile('tablet_image')){
            $data['tablet_image'] = Up()->Upload([
                'file' => 'tablet_image',
                'path' => 'tablet',
                'upload_type' => 'single',
                'delete_file' => Tablet::find($id)->tablet_image,
            ]);   
        }

        Tablet::find($id)->update($data);
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
        $del = Tablet::find($id);
        Storage::delete($del->tablet_image);
        $del->delete();
        return back();
    }

    public function multi_delete(){

        if(is_array(request('item'))){

            foreach(request('item') as $id){

                $del = Tablet::find($id);
                Storage::delete($del->tablet_image);
                $del->delete();
            }
           

        }else{

                $del = Tablet::find(request('item'));
                Storage::delete($del->tablet_image);
                $del->delete();

        }

        return back();
    }
}
