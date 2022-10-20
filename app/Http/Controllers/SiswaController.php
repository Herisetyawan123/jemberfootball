<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::with('wali')->get();
        // dd($siswa);
        return view('dashboard.pemain.index', ["siswas" => $siswa]);
    }
}
