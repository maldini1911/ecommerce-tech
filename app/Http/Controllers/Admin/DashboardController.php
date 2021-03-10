<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class DashboardController extends Controller
{
    public function index(){

        $contacts = Contact::where('do_readed', 'No')->take(5)->latest()->get();
        $contact_count = Contact::where('do_readed', 'No')->count();

        return view('admin.home', compact('contacts', 'contact_count'));
    }

}
