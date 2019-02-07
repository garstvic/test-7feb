<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'AppController@getIndex',
    'as' => 'app.index'
]);

Route::group(['middleware' => 'guest'], function() {
    Route::get('/signin', [
        'uses' => 'AppController@getSignIn',
        'as' => 'app.signin'
    ]);
    
    Route::post('/signin', [
        'uses' => 'AppController@postSignIn',
        'as' => 'app.signin'
    ]);
    
    Route::get('/signup', [
        'uses' => 'AppController@getSignUp',
        'as' => 'app.signup'
    ]);
    
    Route::post('/signup', [
        'uses' => 'AppController@postSignUp',
        'as' => 'app.signup'
    ]);     
});

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        
        Route::get('/logout', [
            'uses' => 'AppController@getLogout',
            'as' => 'app.logout'
        ]);        
    });
});
