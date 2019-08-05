<?php

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services','HomeController@services')->name('services');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact/store', 'HomeController@contactStore')->name('contact.store');
Route::get('/about/pastor', 'AboutController@aboutPastor')->name('about.pastor');
Route::post('/about/pastor/store', 'AboutController@storePastorMessage')->name('about.pastor.store');
Route::get('/about/church', 'AboutController@aboutChurch')->name('about.church');
Route::get('/ministries', 'MinistriesController@index')->name('ministries');
Route::get('/events', 'EventsController@index')->name('events');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
