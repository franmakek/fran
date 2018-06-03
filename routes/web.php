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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('{any}', function ($any = "/a6") {
    if($any == "chat")
    {
        return view('pusher');
    }
    elseif($any == "admin-chat")
    {
        return view('admin-chat');

    }
    else
    {
        return view('base');
    }
})->where('any', '.*');



Route::post('/send-message-admin', function(Request $request) {
    $pusher = App::make('pusher');
    $message = Input::get('message');
    $user = $request->get('user_id');


    $pusher->trigger('main-channel',
        'message',
        array('text' => $message, 'user_id' => $user));
});

Route::post('/admin-online', function() {


    $pusher = App::make('pusher');
    $pusher->trigger('main-channel',
        'admin-online',
        array('AdminOnline' => true));
});

Route::post('/user-online', function(Request $request) {

    $pusher = App::make('pusher');
    $user = $request->get('user_id');
    $country = $request->get('country');
    $city = $request->get('city');
    $wall = $request->get('wallImg');
    $wiki = $request->get('wikiTitle');
    $bug = $request->get('bug');

    $pusher->trigger('main-channel',
        'user-online',
        array( 'user_id' => $user, 'city' => $city, 'country' => $country, 'wallImg' => $wall, 'wiki' => $wiki, 'bug' => $bug ));
});

Route::post('/send-message', function(Request $request) {
    $pusher = App::make('pusher');
    $message = $request->get('message');
    $user = $request->get('user_id');
    $country = $request->get('country');
    $city = $request->get('city');
    $wall = $request->get('wallImg');
    $wiki = $request->get('wikiTitle');
    $bug = $request->get('bug');


    $pusher->trigger('main-channel',
        'message',
        array('text' => $message, 'user_id' => $user, 'city' => $city, 'country' => $country, 'wallImg' => $wall, 'wiki' => $wiki, 'bug' => $bug));
});