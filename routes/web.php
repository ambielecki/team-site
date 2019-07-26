<?php

Auth::routes();

Route::get('/', 'SitePages\HomeController@getIndex')->name('home');
