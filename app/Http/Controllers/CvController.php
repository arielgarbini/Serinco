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
use App\Cv;
use Mail;


class CvController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $cvs = Cv::orderBy('created_at', 'desc')->get();
        return view('cvs.list', compact('cvs'));
    }

    public function show($id)
    {
        $cv = Cv::find($id);

        return view('cvs.show',compact('cv'));
    }

    public function delete($id)
    {
        $cv = Cv::find($id);

        if($cv!=null){
            $cv->delete();
            Session::flash('message', 'Curriculum vitae eliminado correctamente!!');
            return Redirect::to('cvs/');
        }else{
            return view('home');
        }
    }

    public function sendcv(Request $request)
    {

        $rules = array(
            'name' => 'required|max:100',
            'cv' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
        } else {

            $cv = new Cv();

            if (RequestFile::hasFile('cv')){
                $imageName = RequestFile::file('cv')->getClientOriginalName();
                RequestFile::file('cv')->move('cv', $imageName);
                $cv->cv = $imageName;
            }

            $cv->name = Input::get('name');
            $cv->email = Input::get('email');
            $cv->phone = Input::get('number');

            if($cv->save()){
                Mail::send('mails.cv', ['data' => $request->all()], function ($m){
                    $m->from('Serinco@clientship.com', 'Cv recibido');

                    $m->to(env('MAIL_COMPANY'), env('MAIL_COMPANY_NAME'))->subject('Cv recibido');
                });
                Session::flash('message', 'Cv enviado correctamente!!');
                return Redirect::back();
            }


        }
    }
}
