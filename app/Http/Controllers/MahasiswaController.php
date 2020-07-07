<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        $data = DB::table('data')->get();
        return view('index',['mahasiswa' => $mahasiswa, 'data' => $data]);    
    }
}
