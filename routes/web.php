<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example;
use App\Http\Controllers\Web;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Forms;
use App\Http\Controllers\DbOperations;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test',function(){
  return view('example');
});*/

Route::get('/poem/{author}',[Example::class, 'lookUp']);

Route::get('/web',[Web::class,'initSite'])->name('self');

Route::get('/home',[Homepage::class,'initSite'])->name('home');

Route::get('/form',[Forms::class,'postForm']);

Route::middleware('check')->get('/formResult',[Forms::class,'postIt'])->name('postIt');

Route::get('/add',[DbOperations::class,'add']);
Route::get('/update',[DbOperations::class,'update']);
Route::get('/delete',[DbOperations::class,'delete']);
Route::get('/list',[DbOperations::class,'getRecords']);
