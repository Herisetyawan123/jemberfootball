<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WaliController extends Controller
{
    public function index(){
        $wali = User::where("role", "wali")->select("name", "domisili", "nowa", "email")->get();
        return view("dashboard.wali.index", ["walis" => $wali]);
    }

    public function create(){
        return view("dashboard.wali.tambah");
    }

    public function store(Request $request){
        $validated = $request->validate([
            "email" => 'email|unique:users'
        ]);
        $data = $request->all();
        $wali = User::create([
            "name" => $data["wali"],
            "nowa" => $data["nomor"],
            "email" => $data["email"],
            "domisili" => $data["domisili"],
            "password" => Hash::make("12345678"),
            "role" => "wali"
        ]);

        Siswa::create([
            "nama" => $data["siswa"],
            "sekolah" => $data["sekolah"],
            "wali_id" => $wali->id,
            "domisili" => $data["domisili"]
        ]);

        return redirect('/wali');

    }
}
