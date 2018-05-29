<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: get('/', 'PagesController@gethome');

Route:: get('/database', 'fileController@parser');

Route:: get('/obecdetail/{id?}', 'VillagesController@index');

Route:: get('/getdata', 'fileController@getData');
