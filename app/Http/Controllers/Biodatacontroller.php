<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodatacontroller extends Controller
{
    public function index(){
            return view('biodata');
}
    public function proses(Request $request){
        // untuk Debugging
        dd($request);
        //
        $request->validate([
            'nama'=>'required',
            'gender'=>'required',
            'email'=>'required|email:dns',
            'ponsel'=>'required'
        ],[
            'nama.required'=>"Nama Harus Diisi",
            'gender.required'=>"Jenis Kelamin Harus Diisi",
            'email.required'=>"Email Anda Salah !",
            'ponsel.required'=>"No HP Harus Diisi",
        ]);
        echo "Nama :$request->nama <br>";
        echo "Jenis Kelamin :$request->gender <br>";
        echo "Email :$request->email <br>";
        echo "No HP :$request->ponsel <br>";

}
}