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
use App\Bank;
use App\Contact;

class BanksController extends Controller
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
        $banks = Bank::all();
        return view('banks.list', compact('banks'));
    }

    public function create()
    {
        return view('banks.add');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|max:100',
            'imagen' => 'required',
            'percentaje_cuota' => 'required',
            'time' => 'required',
            'finance' => 'required',
            'tasa_anual' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
        } else {

            $bank = new Bank();

            if (RequestFile::hasFile('imagen')){
                $imageName = RequestFile::file('imagen')->getClientOriginalName();
                RequestFile::file('imagen')->move('bancos', $imageName);
                $bank->imagen = $imageName;
            }

            $bank->name = Input::get('name');
            $bank->max_finance = Input::get('max_finance','');
            $bank->percentaje_cuota = Input::get('percentaje_cuota');
            $bank->time = Input::get('time');
            $bank->finance = Input::get('finance');
            $bank->tasa_anual = Input::get('tasa_anual');

            if(Auth::user()->roles_id==1){
                $bank->is_active = 1;
            }else{
                $bank->is_active = 0;
            }


            if($bank->save()){
                Session::flash('message', 'Banco creado correctamente!!');
                return Redirect::to('banks');
            }


        }
    }

    public function edit($id)
    {
        $bank = Bank::find($id);

        return view('banks.edit',compact('bank'));
    }

    public function update($bank, Request $request)
    {
        $rules = array(
            'name' => 'required|max:100',
            'percentaje_cuota' => 'required',
            'time' => 'required',
            'finance' => 'required',
            'tasa_anual' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        $id = Input::get('id');

        if ($validator->fails()) {
            return Redirect::to('banks/'.$bank.'/edit')
                ->withErrors($validator);
        } else {


            $bank = Bank::find($bank);

            if (RequestFile::hasFile('imagen')){
                $imageName = RequestFile::file('imagen')->getClientOriginalName();
                RequestFile::file('imagen')->move('bancos', $imageName);
                $bank->big_pic = $imageName;
            }

            $bank->name = Input::get('name');
            $bank->max_finance = Input::get('max_finance','');
            $bank->percentaje_cuota = Input::get('percentaje_cuota');
            $bank->time = Input::get('time');
            $bank->finance = Input::get('finance');
            $bank->tasa_anual = Input::get('tasa_anual');

            if(Auth::user()->roles_id==1){
                $bank->is_active = 1;
            }else{
                $bank->is_active = 0;
            }

            if($bank->save()){
                Session::flash('message', 'Banco actualizado correctamente!!');
                return Redirect::to('banks');
            }


        }
    }

    public function delete($id)
    {
        $bank = Bank::find($id);

        if($bank!=null){

            $bank->is_active = 0;
            if($bank->save()) {
                Session::flash('message', 'Banco deshabilitado correctamente!!');
                return Redirect::to('banks/');
            }
        }else{
            return view('home');
        }
    }

    public function approve($id)
    {
        $bank = Bank::find($id);

        if($bank!=null){

            $bank->is_active = 1;
            if($bank->save()) {
                Session::flash('message', 'Banco activado correctamente!!');
                return Redirect::to('banks/');
            }
        }else{
            return view('home');
        }
    }

    public function sendcotizacion(Request $request)
    {
        $bank = Bank::find($request->bank);
        $name = $request->name;
        $email = $request->email;

        Mail::send('mails.serinco-mailing-comparador-cliente', ['data' => $request->all(), 'bank' => $bank], function ($m) use($email, $name){
            $m->from('Serinco@clientship.com', 'Cotización de crédito');

            $m->to($email, $name)->subject('Crédito cotizado');
        });

        Mail::send('mails.serinco-mailing-comparador', ['data' => $request->all(), 'bank' => $bank], function ($m){
            $m->from('Serinco@clientship.com', 'Cotización de crédito');

            $m->to(env('MAIL_COMPANY'), env('MAIL_COMPANY_NAME'))->subject('Crédito cotizado');
        });
            Contact::create(['name' => $request->name, 'dni' => $request->dni, 'email' => $request->email,
                'phone' => $request->phone, 'type' => 'cotizacion']);
        Session::flash('message', 'Credito bancario solicitado correctamente!!');
        return Redirect::back();
    }
}
