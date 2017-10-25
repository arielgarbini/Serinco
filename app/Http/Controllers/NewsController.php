<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Request;
use Session;
use Auth;
use App\Helpers\Helper;

class NewsController extends Controller {

	/**
	 * Create a new controller instance.
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


	public function listNews($id = null)
	{

	if($id==null){

		if(Auth::user()->roles_id==1){

			$news = \App\News::where('is_active','=','1')->get();

		}else{

			$news = \App\News::where('users_id','=',Auth::user()->id)->where('is_active','=','1')->get();

		}

		return view('news.list')->with('news',$news);

	}else{

		 $news = \App\News::find($id);

		 return view('news.edit')->with('news',$news);


		}

	}

	public function getAddNew()
	{	

		return view('news.add');
		
	}

	public function postAddNew()
	{	

		$rules = array(
			'title' => 'required|max:255',
			);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('addNew')
			->withErrors($validator);
		} else {

		$news = new \App\News;

        if (Request::hasFile('small_pic')){
        $imageName = Request::file('small_pic')->getClientOriginalName();
		Request::file('small_pic')->move('publicaciones', $imageName);
        $news->small_pic = $imageName;
        }
        if (Request::hasFile('big_pic')){
        $imageName = Request::file('big_pic')->getClientOriginalName();
		Request::file('big_pic')->move('publicaciones', $imageName);
        $news->big_pic = $imageName;
        }
                         
		$news->title = Input::get('title');
		$news->short_description = Input::get('short_description');	
		$news->url = Helper::friendlyURL($news->title);	
		$news->source = Input::get('source');
		$news->body = Input::get('body');
		$news->users_id = Input::get('users_id');

		if(Auth::user()->roles_id==1){
			$news->is_approved = 1;
		}else{
			$news->is_approved = 0;
		}
		
			
				if($news->save()){
				Session::flash('message', 'Publicación creada correctamente!!');
				return Redirect::to('addNew');
			}


		}
		
	}


	public function postEditNew()
	{	
		
		$rules = array(
				'title' => 'required|max:255',
				);

		$validator = Validator::make(Input::all(), $rules);
		
		$id = Input::get('id');
		
		if ($validator->fails()) {
			return Redirect::to('news/'.$id)
			->withErrors($validator);
		} else {


        $news = \App\News::find($id);
        
        if (Request::hasFile('small_pic')){
        $imageName = Request::file('small_pic')->getClientOriginalName();
		Request::file('small_pic')->move('publicaciones', $imageName);
        $news->small_pic = $imageName;
        }
        if (Request::hasFile('big_pic')){
        $imageName = Request::file('big_pic')->getClientOriginalName();
		Request::file('big_pic')->move('publicaciones', $imageName);
        $news->big_pic = $imageName;
        }
                         
		$news->title = Input::get('title');
		$news->url = Helper::friendlyURL($news->title);	
		$news->short_description = Input::get('short_description');		
		$news->source = Input::get('source');
		$news->body = nl2br(Input::get('body'));

		if(Auth::user()->roles_id==1){
			$news->is_approved = 1;
		}else{
			$news->is_approved = 0;
		}
			
			if($news->save()){
				Session::flash('message', 'Publicación actualizada correctamente!!');
				return Redirect::to('news/'.$id);	
			}


		}
	}




public function deleteNew( $id = null )
	{

		$news = \App\News::find($id);
				
		if($news!=null){

				$news->is_active = 0;			
				if($news->save()) {
					Session::flash('message', 'Publicación eliminada correctamente!!');
					return Redirect::to('news/');
				}
			}else{
				return view('home');
			}

	}

public function approveNew( $id = null )
	{

		$news = \App\News::find($id);
				
		if($news!=null){

				$news->is_approved = 1;			
				if($news->save()) {
					Session::flash('message', 'Publicación aprobada correctamente!!');
					return Redirect::to('news/');
				}
			}else{
				return view('home');
			}

	}



}
