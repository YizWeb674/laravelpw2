<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function hasil(Request $request)
    {
        $nama = $request->input('nama');
        $ttl = $request->input('ttl');
        $jenisKelamin = $request->input('jenis_kelamin');
        $hobi = $request->input('hobi');

        return view('hasil', compact('nama', 'ttl', 'jenisKelamin', 'hobi'));
    }
}
