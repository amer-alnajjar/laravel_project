<?php

use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Route;

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

//Middleware (auth)
Route::middleware('auth')->group(function () {
    Route::get('logout', function () {
        return "this is logout page";
    });
});

Route::get('login', function () {
    return "this is login page ";
})->name('login');


//Rate Limiting
Route::middleware('throttle:3,1')->group(function () {
    Route::get('test', function () {
        return "this is test page";
    });
});


//Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return "this is users page";
    });
    Route::get('clints', function () {
        return "this is clints page ";
    });
    Route::get('frinds', function () {
        return "this is frinds page ";
    });
});


//Named Routes
Route::get('home', function () {
    return redirect()->route('home');
});



//Optional Parameters
Route::get('user/{name?}', function ($name = 'amer') {
    return "this is user : " . $name;
});


//Route Parameters
Route::get('page{id}', function ($id) {
    return 'this is page number : (' . $id . ")";
});


//View Routes
Route::view('profile', 'my_profile', ['name' => 'amer alnajjar']);

//Redirect Routes
Route::redirect('my-site', 'new-my-site');
Route::get('new-my-site', function () {
    return "this is new site";
});


//Controller Route
Route::get('route_control', 'App\Http\Controllers\Controller@Route_Control');

//Basic Routing
Route::get('first', function () {
    return view('firstpage');
});


//Basic Routing
Route::get('/', function () {
    return view('welcome');
})->name('home');
