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

Route::get('/', 'Project_Controller@getIndex'); 
Route::post('/overview', 'Project_Controller@getIndex'); 
Route::post('/klasgenoot', 'Project_Controller@klasgenootInfo'); 
Route::get('/add', 'Project_Controller@addklasgenoot'); 
Route::post('/verwijder', 'Project_Controller@verwijder'); 
Route::post('/addnew', 'Project_Controller@addnew');
route::get('/ajax', 'Project_Controller@ajax');
