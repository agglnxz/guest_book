<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index(){
     return view('admin.dashboard');
 }
 public function view_tambahTamu(){
    return view('admin.create');
}
}
