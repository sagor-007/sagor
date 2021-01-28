<?php

use Illuminate\Support\Facades\Route;
use App\Controller\FormController;

Route::get('/', 'HomeController@Home');

Route::get('/about', 'AboutController@About');

Route::get('/contact', 'ContactController@Contact');

Route::post('contactsubmit', 'ContactController@contactsubmit');

Route::get('contactshow', 'ContactController@contactshow');












Route::get('/form', 'FormController@form');

Route::post('formsubmit', 'FormController@formsubmit');

Route::get('Form/listshow', 'FormController@listshow');

Route::get('edit/{id}', 'FormController@eidit');

Route::post('update/{id}', 'FormController@update');

Route::get('delete/{id}', 'FormController@delete');