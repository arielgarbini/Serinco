<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventInscription;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Request;
use Session;
use Auth;
use App\Helpers\Helper;

class EventsController extends Controller
{

    /**
     * Create a event controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */


    public function listInc()
    {
        $list = EventInscription::all();
        return view('events.list_inc', compact('list'));
    }

    public function listEve($id = null)
    {

        if($id==null){
            $events = \App\Event::where('active','=','1')->get();
            return view('events.list')->with('events',$events);

        }else{

            $event = \App\Event::find($id);

            return view('events.edit')->with('event',$event);


        }

    }

    public function getAddEve()
    {

        return view('events.add');

    }

    public function postAddEve()
    {

        $rules = array(
            'name' => 'required|max:50',
            'type' => 'required',
            'date' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'place' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('addEve')
                ->withErrors($validator);
        } else {

            $event = new Event();

            if (Request::hasFile('image')){
                $imageName = Request::file('image')->getClientOriginalName();
                Request::file('image')->move('events', $imageName);
                $event->image = $imageName;
            }

            $event->name = Input::get('name');
            $event->type = Input::get('type');
            $event->date = Input::get('date');
            $event->start_hour = Input::get('start_hour');
            $event->end_hour = Input::get('end_hour');
            $event->url = Helper::friendlyURL($event->name);
            $event->place = Input::get('place');
            $event->price = Input::get('price');
            $event->link = Input::get('link', '');
            $event->description = Input::get('description');

            if($event->save()){
                Session::flash('message', 'Evento creado correctamente!!');
                return Redirect::to('event');
            }


        }

    }


    public function postEditEve()
    {

        $rules = array(
            'name' => 'required|max:50',
            'type' => 'required',
            'date' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'place' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        $id = Input::get('id');

        if ($validator->fails()) {
            return Redirect::to('event/'.$id)
                ->withErrors($validator);
        } else {


            $event = Event::find($id);

            if (Request::hasFile('image')){
                $imageName = Request::file('image')->getClientOriginalName();
                Request::file('image')->move('events', $imageName);
                $event->image = $imageName;
            }

            $event->name = Input::get('name');
            $event->type = Input::get('type');
            $event->date = Input::get('date');
            $event->start_hour = Input::get('start_hour');
            $event->end_hour = Input::get('end_hour');
            $event->url = Helper::friendlyURL($event->name);
            $event->place = Input::get('place');
            $event->price = Input::get('price');
            $event->link = Input::get('link', '');
            $event->description = Input::get('description');

            if($event->save()){
                Session::flash('message', 'Evento actualizado correctamente!!');
                return Redirect::to('event/');
            }

        }
    }




    public function deleteEve( $id = null )
    {

        $events = \App\Event::find($id);

        if($events!=null){

            $events->active = 0;
            if($events->save()) {
                Session::flash('message', 'Evento eliminado correctamente!!');
                return Redirect::to('event/');
            }
        }else{
            return view('home');
        }

    }




}
