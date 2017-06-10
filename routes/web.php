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

Route::get('/*', function(){
    if (!Auth::check()){
        return redirect('login');
    }
});

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('/coming', function () {
    return view('coming');
});

route::get('/logout', function(){
    // session data wegdoen en redirecten naar login :)
    Session::flush();
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/**
 * PROFILE ROUTES
 **/
Route::get('/profiel', function(){
    if(Auth::check()){
        return view('profile')->with('title', 'Profile');
    }else{
        return redirect('login');
    }
});

Route::get('/profiel/instellingen', function(){
    return view('profile_settings')->with('title', 'Profile settings');
});
// profiel instellingen wijzigen
Route::post('/profiel/instellingen/avatar', 'ProfileController@UserAvatar');
Route::post('/profiel/instellingen/wachtwoord', 'ProfileController@UserPassword');
// user toevoegen
Route::post('/profiel/addUser', 'ProfileController@AddUser');
Route::post('/profiel/UpdateUser', 'ProfileController@UpdateUser');
Route::get('/profiel/DeleteUser/{id}', 'ProfileController@DeleteUser');

/*HERBEKIJK ROUTES*/
Route::get('/herbekijk/{video_id}', 'VideosController@showVideo');

/*CHAT ROUTES*/
Route::post('/herbekijk/{id}/chat', 'ChatController@Chat');