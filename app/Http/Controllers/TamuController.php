<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function store(Request $request)
    {
        $request->validate($request, [

            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'notelefon' => 'required',
            'pesan' => 'required',

        ]);

        tamu::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'notelefon' => $request->notelefon,
            'pesan' => $request->pesan,
        ]);
        return back();

    }
}
