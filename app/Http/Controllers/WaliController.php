<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WaliController extends Controller
{
    public function index(){
        $wali = User::where("role", "wali")->select("id", "name", "domisili", "nowa", "email")->get();
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

    public function edit($id){
        $wali = User::where('id', $id)->first();
        return view('dashboard.wali.edit', ["wali" => $wali]);
    }

    public function update(Request $request){
        $wali = User::find($request->id);
        // dd($request->all());
        if(is_null($request->password)){
            $wali->update([
                "name" => $request->name,
                "email" => $request->email,
                "nowa" => $request->nowa,
                "domisili" => $request->domisili,
            ]);
        }else{
            // dd($request->all());
            $wali->update([
                "name" => $request->name,
                "email" => $request->email,
                "nowa" => $request->nowa,
                "password" => Hash::make($request->password),
                "domisili" => $request->domisili,
            ]);
        }
        return redirect()->route('wali.index');
    }

    public function delete($id){
        $user = User::where('id', $id)->select("id")->first();
        User::destroy($id);
        $siswa = Siswa::where('wali_id', $user->id)->delete();
        return back();

    }
}
