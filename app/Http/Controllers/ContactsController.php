<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Request as RequestFile;
use Session;
use Auth;
use Mail;
use App\Contact;


class ContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::where('type', '!=', 'cv')
            ->orderBy('created_at', 'desc')->get();
        return view('contacts.list', compact('contacts'));
    }

    public function show($id)
    {
        $cv = Contact::find($id);

        return view('contacts.show',compact('cv'));
    }

    public function delete($id)
    {
        $contact = Contact::find($id);

        if($contact!=null){
            $contact->delete();
            Session::flash('message', 'Mensaje de contacto eliminado correctamente!!');
            return Redirect::to('contacts/');
        }else{
            return view('home');
        }
    }
}
