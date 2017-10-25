<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$news = \App\News::where('is_approved','=','1')->where('is_active','=','1')->orderBy('created_at','DESC')->get();
    return view('welcome')->with('news',$news);
});

Route::get('/comparador', function () {
    return view('comparador');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/gracias', function () {
    return view('thankyou');
});

Route::post('contacto',function(){
   
	if(Request::ajax()){
   
	$data['nombre'] = Request::get('name');

	$data['telefono'] = Request::get('tel');

	$data['email'] = Request::get('email');


	Mail::send('mails.contacto', $data, function($message)  use ($data)
{	
	$message->subject('Contacto desde sitio - Serinco.com.ar');

    $message->from('no-reply@serinco.com.ar', 'Serinco.com.ar');

    $message->to(' dcazorla@coffeetalk.com.ar');

});
    return $data;	
}

});

Route::get('/soluciones', function () {
    return view('soluciones');
});

Route::get('/novedades', function () {
	$news = \App\News::where('is_approved','=','1')->where('is_active','=','1')->get();
    return view('novedades')->with('news',$news);
});

Route::get('noticia/{id}', function ($id = null){
		$new = \App\News::find($id);
		if($new!=null){
					return view('noticia')->with('noticia',$new);
				}else{
					$news = \App\News::where('is_approved','=','1')->where('is_active','=','1')->orderBy('created_at','DESC')->get();
    				return view('welcome')->with('news',$news);
			}
});

Auth::routes();

Route::get('/privado', 'HomeController@index');

/* ABM Usuarios */
Route::get('/users', 'UserController@listUsers');
Route::get('/profile/{id}', 'UserController@getEditUser');
Route::post('/editUser', 'UserController@postEditUser');
Route::get('/adduser', 'UserController@getAddUser');
Route::post('/adduser', 'UserController@postAddUser');
Route::get('/deleteUser/{id}', 'UserController@deleteUser');

/* ABM Noticias */
Route::get('news/{id?}', 'NewsController@listNews');
Route::get('addNew', 'NewsController@getAddNew');
Route::post('addNew', 'NewsController@postAddNew');
Route::post('editNew', 'NewsController@postEditNew');
Route::get('deleteNew/{id}', 'NewsController@deleteNew');
Route::get('approveNew/{id}', 'NewsController@approveNew');

