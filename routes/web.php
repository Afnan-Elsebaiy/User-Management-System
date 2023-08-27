<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    
Route::get('/', function () { 
    return view('auth.login'); 
});
    // Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/profile','ProfileController@index')->name('profile.index');
    Route::get('/profile/{id}/edit','ProfileController@edit')->name('profile.edit');
    Route::put('/profile/{id}','ProfileController@profileUpdate')->name('profile.update');
    Route::delete('/profile/{id}','ProfileController@destroy')->name('profile.destroy');
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
