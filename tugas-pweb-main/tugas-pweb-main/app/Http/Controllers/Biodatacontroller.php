<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodatacontroller extends Controller
{
    public function index()
    {
        return view('biodata');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'ponsel' => 'required'
        ], [
            'nama.required' => 'Nama Lengkap Harus Diisi!',
            'gender.required' => 'Jenis Kelamin harus Dipilih',
            'email.required' => "Email Harus Diisi!",
            'email.email' => 'Format Email Masih Salah!',
            'ponsel.required' => 'Nomor Ponsel Wajib Diisi!'
        ]);
        return view('hasil', [
            'nama' => $request->nama,
            'gender' => $request->gender,
            'email' => $request->email,
            'ponsel' => $request->ponsel
        ]);
    }
    public function biodata()
    {
        return view('biodata');
    }
    public function mahasiswa()
    {
        return view('mahasiswa');
    }
}
