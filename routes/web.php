<?php


Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::group(['prefix' => 'blog'],function(){
	
	Route::get('/', 'BlogController@index')->name('blog.index');
	
	Route::get('/{post}/', 'BlogController@show')->name('blog.show');

});


