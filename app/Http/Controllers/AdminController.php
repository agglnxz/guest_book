<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index(){
    $tamu = tamu::all();
     return view('admin.dashboard', compact('tamu'));
 }

 public function view_tambahTamu(){
    return view('admin.create');
}
}
