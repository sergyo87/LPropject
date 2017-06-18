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
    return view('welcome');
});

Route::get('foo', function(){
    return "asdad";
})->middleware(App\Http\Middleware\CheckAge::class);

Route::get('user/{id}', function($id){
   return 'User'.$id; 
});

Route::get('post/{post}/comment/{comment}', function($postid, $commentid){
    return $postid." ".$commentid;
});

Route::get('user/{id?}', function($id = null){
    return $id;
});

Route::get('user/profile', function(){
   return "asdad"; 
})->name('profile');

Route::get('user/profile', 'UserController@Profile')->name('profile');

Route::get('api/users/{user}', function(App\User $user){
   return $user->email; 
});

Route::get('post/{id}', function($id){
    
})->middleware('role:editor');

Route::get('user/{id}', 'UserController@show');

Route::get('fooo', 'Photos\PhotoController@method');

Route::resource('photos', 'PepeController');

Route::put('user/{id}', 'UserController@update');

Route::get('/', function(){
    return view('greetings', [
        'name' => 'Sergio'
    ]);
});

Route::get('blade', function(){
    return view('child');
});

Route::get('showUsers', 'UserController@showUsers');

Route::get('contact', 'AboutController@create')->name('contact');
Route::post('contact', 'AboutController@store')->name('contact_store');



