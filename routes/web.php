<?php

use Illuminate\Support\Facades\Route;


Route::get('/','PagesController@index')->name('home');

Route::get('/about','PagesController@about')->name('about');

Route::get('/contact', 'MessagesController@create')->name('contact');