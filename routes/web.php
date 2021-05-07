<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example;
use App\Http\Controllers\Web;
use App\Http\Controllers\Homepage;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test',function(){
  return view('example');
});*/

Route::get('/poem/{author}',[Example::class, 'lookUp']);

Route::get('/web',[Web::class,'initSite'])->name('self');

Route::get('/home',[Homepage::class,'initSite'])->name('home');
