<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\LaptopDatatables;
use App\Model\Laptop;
use Storage;

class LaptopContorller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LaptopDatatables $laptop)
    {
        return $laptop->render('admin.laptop.index', ['title' => trans('admin.laptop')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laptop.create', ['title' => trans('admin.add')]);
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
            'name'                  => 'required',
            'price'                 => 'required',
            'desc'                  => 'sometimes|nullable',
            'cpu'                   => 'sometimes|nullable',
            'ram'                   => 'sometimes|nullable',
            'battry'                => 'sometimes|nullable',
            'wifi'                  => 'sometimes|nullable',
            'screen_size'           => 'sometimes|nullable',
            'hard_drive'            => 'sometimes|nullable',
            'parent_lap'            => 'sometimes|nullable',
            'laptop_image'          => 'sometimes|nullable',
            'processor_type'        => 'sometimes|nullable',
            'os_type'               => 'sometimes|nullable',
            'offer_type'            => 'sometimes|nullable',
            'sale'                   => 'sometimes|nullable',
         ], [], [
            'name'            => trans('admin.name_protect'),
            'price'           => trans('admin.price_protect'),
            'desc'            => trans('admin.desc_protect'),
            'cpu'             => trans('admin.cpu'),
            'ram'             => trans('admin.ram'),
            'battry'          => trans('admin.battry'),
            'wifi'            => trans('admin.wifi'),
            'screen_size'     => trans('admin.screen_size'),
            'hard_drive'      => trans('admin.hard'),
            'parent_lap'      => trans('admin.parent'),
            'laptop_image'    => trans('admin.laptop_image'),
            'processor_type'  => trans('admin.processor_type'),
            'os_type'         => trans('admin.os_type'),
            'offer_type'      => trans('admin.offer_type'),
            'sale'            => trans('admin.sale'),
        ]);
 
        if(request()->hasFile('laptop_image')){
            $data['laptop_image'] = Up()->Upload([
                'file' => 'laptop_image',
                'path' => 'laptop',
                'upload_type' => 'single',
                'delete_file'=>''
            ]);
        }

        Laptop::create($data);
        session()->flash('success_add', trans('admin.success_add'));
        return redirect('laptop');
 
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
        $lap = Laptop::find($id);
        return view('admin.laptop.edit', compact('title', 'lap'));
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
            'name'                  => 'required',
            'price'                 => 'required',
            'desc'                  => 'sometimes|nullable',
            'cpu'                   => 'sometimes|nullable',
            'ram'                   => 'sometimes|nullable',
            'battry'                => 'sometimes|nullable',
            'wifi'                  => 'sometimes|nullable',
            'screen_size'           => 'sometimes|nullable',
            'hard_drive'            => 'sometimes|nullable',
            'parent_lap'            => 'sometimes|nullable',
            'laptop_image'          => 'sometimes|nullable',
            'processor_type'        => 'sometimes|nullable',
            'os_type'               => 'sometimes|nullable',
            'offer_type'            => 'sometimes|nullable',
            'sale'                   => 'sometimes|nullable',
         ], [], [
            'name'            => trans('admin.name_protect'),
            'price'           => trans('admin.price_protect'),
            'desc'            => trans('admin.desc_protect'),
            'cpu'             => trans('admin.cpu'),
            'ram'             => trans('admin.ram'),
            'battry'          => trans('admin.battry'),
            'wifi'            => trans('admin.wifi'),
            'screen_size'     => trans('admin.screen_size'),
            'hard_drive'      => trans('admin.hard'),
            'parent_lap'      => trans('admin.parent'),
            'laptop_image'    => trans('admin.laptop_image'),
            'processor_type'  => trans('admin.processor_type'),
            'os_type'         => trans('admin.os_type'),
            'offer_type'      => trans('admin.offer_type'),
            'sale'            => trans('admin.sale'),
        ]);
 
        if(request()->hasFile('laptop_image')){
            $data['laptop_image'] = Up()->Upload([
                'file' => 'laptop_image',
                'path' => 'laptop',
                'upload_type' => 'single',
                'delete_file' => Laptop::find($id)->laptop_image,
            ]);   
        }

        Laptop::find($id)->update($data);
        session()->flash('success_update', trans('admin.success_update'));
        return redirect('laptop');
 
     }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Laptop::find($id);
        Storage::delete($del->laptop_image);
        $del->delete();
        return back();
    }

    public function multi_delete(){

        if(is_array(request('item'))){
            foreach(request('item') as $id){
                $del = Laptop::find($id);
                Storage::delete($del->laptop_image);
                $del->delete();
            }
          

        }else{
            
                $del = Laptop::find(request('item'));
                Storage::delete($del->laptop_image);
                $del->delete();
        }

        return back();
    }
}
