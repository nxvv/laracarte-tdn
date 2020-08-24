<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;


Route::get('/test-email', function () {
    return new ContactMessageCreated('Newton','boconewton01@gmail.com','Great!!');
});

Route::get('/','PagesController@index')->name('home');

Route::get('/about','PagesController@about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact.create');

Route::post('/contact','ContactsController@store')->name('contact.store');

Route::get('/register', 'RegisterController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('homeLogin');
