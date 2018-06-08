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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/approvals','AdminController@approvals')->name('approvals');
Route::get('/approve/{project}','AdminController@approve')->name('approve');
Route::get('/presented/{project}','AdminController@presented')->name('presented');
Route::get('/presentations','AdminController@presentations')->name('presentations');
Route::get('/reports','AdminController@reports')->name('reports');
Route::get('/details/{project}','AdminController@details')->name('details');
Route::get('/users','AdminController@users')->name('users');
Route::get('/list-users','AdminController@all_users')->name('all_users');
Route::get('/adminify/{user}','AdminController@adminify')->name('adminify');
Route::get('/deactivate/{user}','AdminController@deactivate')->name('deactivate');

Route::get('/new-project', 'HomeController@showNewProject')->name('new-project');
Route::get('/projects', 'HomeController@showProjects')->name('projects');
Route::get('/delete/{project}', 'HomeController@delete')->name('delete');
Route::post('/new-project', 'HomeController@saveProject')->name('save-project');
Route::get('/gallery/{project}', 'HomeController@gallery')->name('gallery');

/*Route::get('/send',function (){
    $data=[
        'title'=>'Hi there',
        'message'=>'This is my first message from laravel mailgun'
    ];
    Mail::send('emails.template',$data, function ($message){

        $message->to('walteranyika@gmail.com','Walter')->subject('Hello over there');
    });
});*/