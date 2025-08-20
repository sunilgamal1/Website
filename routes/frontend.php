<?php

use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'Home\HomeController@index');
    Route::get('/about', 'About\AboutController@index');
    Route::get('/contact', 'Contact\ContactController@index');
    Route::get('/blog', 'Blog\BlogController@index');
    Route::get('/art-design', 'ArtDesign\ArtDesignController@index');
    Route::get('/digital-design', 'DigitalDesign\DigitalDesignController@index');
    Route::get('/motion', 'Motion\MotionController@index');
    Route::get('/digital-design/{slug}', 'DigitalDesign\DigitalDesignController@show')->name('digital-design.show');
    Route::get('/motion/{slug}', 'Motion\MotionController@show')->name('motion.show');
    Route::post('/contact', 'Contact\ContactController@store')->name('contact.store');
    Route::get('/blogs', 'Blog\BlogController@index');
    Route::get('/blogs/{slug}', 'Blog\BlogController@show')->name('blog.show');
    Route::get('/art-design/{slug}', 'ArtDesign\ArtDesignController@show')->name('art-design.show');
});
