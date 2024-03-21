<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telefon' => 'required',
            'pesan' => 'required'

        ]);

        tamu::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telefon' => $request->no_telefon,
            'pesan' => $request->pesan
        ]);
        return back();

    }
}
