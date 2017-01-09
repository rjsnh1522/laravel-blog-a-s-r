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




Route::group(['middlewareGroups'=>['web']],function(){


    Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
            ->where('slug','[\w\d\-\_]+');

    Route::get('/', ['as'=>'get.index', 'uses'=>'PagesController@getIndex']);

    Route::get('about', ['as'=>'get.about', 'uses'=>'PagesController@getAbout']);
    Route::get('contact', ['as'=>'get.contact', 'uses'=>'PagesController@getContact']);

    Route::post('update/{id}', ['as'=>'post.dataUpdate', 'uses'=>'PostController@postUpdate']);

    Route::post('delete/{id}',['as'=>'post.dataDelete', 'uses'=>'PostController@postDelete']);


    Route::resource('post','PostController');

});