<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AdminController extends Controller
{
 public function index(){
    $tamu = tamu::all();
    $date = tamu::whereDate('created_at', today())->get();

     // Mengambil tanggal awal dan akhir dari bulan ini
        $mulaiBulanIni = Carbon::now()->startOfMonth();
        $akhirBulanIni = Carbon::now()->endOfMonth();

     // Mendapatkan bulan dan tahun saat ini
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

     // Mengambil data tamu yang dibuat dalam bulan dan tahun ini
        $data = Tamu::whereYear('created_at', $thisYear)
                 ->whereMonth('created_at', $thisMonth)
                 ->get();
    // Mengambil jumlah tamu yang dibuat dalam tahun ini
        $jumlahTamuTahunIni = Tamu::whereYear('created_at', $thisYear)->count();

     return view('admin.dashboard', compact('tamu','date','data','jumlahTamuTahunIni'));
 }

 public function view_tambahTamu(){
    return view('admin.create');
}
}
