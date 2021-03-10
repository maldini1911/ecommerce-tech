<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\ContactDatatables;
use App\DataTables\ContactNotReadDatatables;
use App\Model\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContactDatatables $contact)
    {
        $contacts = Contact::where('do_readed', 'No')->take(5)->latest()->get();
        $contact_count = Contact::where('do_readed', 'No')->count();
        $title = trans('admin.contact');
        return $contact->render('admin.contact.index', compact('title', 'contacts', 'contact_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create', ['title' => trans('admin.add')]);
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
            'email'                 => 'required',
            'message'               => 'required',
            'do_readed'             => 'required',
         ], [], [
            'name'                  => trans('admin.name'),
            'email'                 => trans('admin.email'),
            'message'               => trans('admin.message'),
            'do_readed'               => trans('admin.do_readed'),
        ]);
 
        Contact::create($data);
        session()->flash('success_add', trans('admin.success_add'));
        return redirect('admin/contact');
 
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
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact('title', 'contact'));
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
            'email'                 => 'required',
            'message'               => 'required',
            'do_readed'             => 'required',
         ], [], [
            'name'                  => trans('admin.name'),
            'email'                 => trans('admin.email'),
            'message'               => trans('admin.message'),
            'do_readed'             => trans('admin.do_readed'),
        ]);
 
        Contact::find($id)->update($data);
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
        $del = Contact::find($id);
        $del->delete();
        return back();
    }

    public function multi_delete(){

        if(is_array(request('item'))){
            foreach(request('item') as $id){
                $del = Contact::find($id);
                $del->delete();
            }
          
            return back();
        }else{
            
                $del = Contact::find(request('item'));
                $del->delete();
                return back();
        }
  
    }

    public function contact_not_read(ContactNotReadDatatables $contact)
    {
        $contacts = Contact::where('do_readed', 'No')->take(5)->latest()->get();
        $contact_count = Contact::where('do_readed', 'No')->count();
        $title = trans('admin.contact');
        return $contact->render('admin.contact.contact_not_read', compact('title', 'contacts', 'contact_count'));
    }
}
