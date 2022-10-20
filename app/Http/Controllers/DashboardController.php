<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahWali = User::where('role', 'wali')->count();
        $jumlahAdmin = User::where('role', 'admin')->count();
        $jumlahSiswa = Siswa::count();
        $jumlahPertandingan = Post::where('category', 'match')->count();

        $greeting = "";
        if ("19:00:00" <= date("H:i:s")){
            $greeting = "Good Night";
        }else if("12:00:00" <= date("H:i:s")){
            $greeting = "Good Afternoon";
        }else if("05:00:00" <= date("H:i:s")){
            $greeting = "Good Morning";
        }else if("04:00:00" <= date("H:i:s")){
            $greeting = "Jangan Lupa Solat Subuh, yahh!";
        }else{
            $greeting = "Hayyo Jangan malam-malam, jaga kesehatan!";
        }
        $data = [
            "admin" => $jumlahAdmin,
            "wali" => $jumlahWali,
            "siswa" => $jumlahSiswa,
            "greeting" => $greeting,
            "pertandingan" => $jumlahPertandingan,
        ];
        return view('dashboard.index', ["data" => $data]);
    }
}
