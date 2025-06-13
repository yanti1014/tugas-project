<?php

use App\Http\Controllers\Biodatacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return('hello guys');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/mahasiswa', function () {
    return view('welcome');
});
Route::get('biodata', [Biodatacontroller::class,'index']);
Route::post('biodata', [Biodatacontroller::class,'proses']);

