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
    $banks = \App\Bank::where('is_active', '1')->get();
    return view('comparador', compact('banks'));
});

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/gracias', function () {
    return view('thankyou');
});

Route::post('contacto',function(){
   
    if(Request::ajax()){
        \App\Contact::create(['name' => Request::get('name'), 'phone' => Request::get('tel'),
            'email' => Request::get('email'), 'type' => 'contacto',
            'messages' => Request::get('msj')]);
        return ['response' => true];
    }

});

Route::post('eventoContacto',function(){

    if(Request::ajax()){
        \App\EventInscription::create(['name' => Request::get('name'), 'phone' => Request::get('tel'),
            'email' => Request::get('email'), 'event_id' => Request::get('event')]);
        return ['response' => true];
    }

});

Route::get('/soluciones', function () {
    return view('soluciones');
});

Route::get('/proyectos-de-inversion', function () {
    return view('proyectos-de-inversion');
});
Route::get('/inspecciones', function () {
    return view('inspecciones');
});
Route::get('/tasaciones', function () {
    return view('tasaciones');
});
Route::get('/gestoria', function () {
    return view('gestoria');
});

Route::get('/novedades', function () {
    $news = \App\News::where('is_approved','=','1')->where('is_active','=','1')->get();
    return view('novedades')->with('news',$news)->with('data', []);
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

Route::get('/eventos', function () {
    $events = \App\Event::where('active','=','1')->orderBy('date', 'desc')->get();
    return view('eventos')->with('events',$events)->with('data', []);
});

Route::get('evento/{id}', function ($id = null){
    $event = \App\Event::find($id);
    if($event!=null){
        return view('evento')->with('evento',$event);
    }else{
        $events = \App\Event::where('active','=','1')->orderBy('date','DESC')->get();
        return view('welcome')->with('events',$events);
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

/* ABM Eventos */
Route::get('inscripciones', 'EventsController@listInc');
Route::get('event/{id?}', 'EventsController@listEve');
Route::get('addEve', 'EventsController@getAddEve');
Route::post('addEve', 'EventsController@postAddEve');
Route::post('editEve', 'EventsController@postEditEve');
Route::get('deleteEve/{id}', 'EventsController@deleteEve');

Route::group(['prefix' => 'banks'], function(){

    Route::get('/', 'BanksController@index');
    Route::get('{id}/edit', 'BanksController@edit');
    Route::get('{id}/delete', 'BanksController@delete');
    Route::get('{id}/approve', 'BanksController@approve');
    Route::get('create', 'BanksController@create');
    Route::post('{id}/update', 'BanksController@update');
    Route::post('store', 'BanksController@store');
});


Route::group(['prefix' => 'cvs'], function(){

    Route::get('/', 'CvController@index');
    Route::get('{id}', 'CvController@show');
    Route::get('{id}/delete', 'CvController@delete');
});

Route::group(['prefix' => 'contacts'], function(){

    Route::get('/', 'ContactsController@index')->name('index.contacts');
    Route::get('{id}', 'ContactsController@show')->name('show.contacts');
    Route::get('{id}/delete', 'ContactsController@delete')->name('delete.contacts');
});

Route::post('sendcv', 'CvController@sendcv');

    Route::post('sendcotizacion', 'BanksController@sendcotizacion');