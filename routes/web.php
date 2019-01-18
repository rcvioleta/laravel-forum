<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{provider}/auth', 'SocialController@auth')->name('social.auth');

Route::get('/{provider}/redirect', 'SocialController@auth_callback')->name('social.callback');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('channel', 'ChannelsController');
    Route::get('discussions/create', 'DiscussionController@create')->name('discussions.create');
    Route::post('discussions/store', 'DiscussionController@store')->name('discussions.store');
    Route::get('discussion/{slug}', 'DiscussionController@show')->name('discussions.show');
});