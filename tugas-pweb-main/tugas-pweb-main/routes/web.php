<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;

// Route::get('/', function () {
    // return view('welcome');
// });
// 
// Route::get('/hello', function () {
    // return "Haiii ini damee";
// });
// 
// Route::get('/home', function () {
//    return view('index');
// });
// 
// Route::get('/belajar/{x}',function($x){
    // return "isi parameter : $x";
// });
// 
// Route::get('/belajar2/{a}/{b}',function($a,$b){
    // return "isi parameter 1 : $a, isi parameter 2 : $b";
// });

// Route::get('/mahasiswa',function(){
    // $data['mahasiswa'] = ["Anto", "Budi", "Erni", "Dohan"];
    // return view('mahasiswa', $data);
// });

// Route::get('/',function(){
// return view('welcome');
// });
Route::get('biodata',[Biodatacontroller::class,'index'])->name('biodata');
Route::post('biodata',[Biodatacontroller::class,'PROSES'])->name('biodata.proses');
Route::get('mahasiswa', [BiodataController::class, 'mahasiswa'])->name('mahasiswa');