<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($bulan, $tahun)
    {
        $time = date("m/Y");
        $siswas = DB::table('siswas')
                    ->join('users', 'users.id', '=', 'siswas.wali_id')
                    ->select('siswas.id', 'siswas.nama as nama', 'users.name as wali')
                    ->get();

        $data = [];
        foreach($siswas as $siswa){
            $nilais = DB::table('nilais')
                    ->where('bulan', $bulan)
                    ->where('tahun', $tahun)
                    ->where('siswa_id', $siswa->id)
                    ->select('path', 'siswa_id')
                    ->first();
            if(!$nilais){
                array_push($data, [
                    "nama" => $siswa->nama,
                    "wali" => $siswa->wali,
                    "nilai" => null
                ]);
            }else{
                array_push($data, [
                    "nama" => $siswa->nama,
                    "wali" => $siswa->wali,
                    "nilai" => $nilais->path
                ]);
            }
        }
        return response()->json([
            "status" => true,
            "message" => "Berhasil mendapatkan data.",
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show($bulan, $tahun)
    {

        $siswas = DB::table('siswas')
                    ->join('users', 'users.id', '=', 'siswas.wali_id')
                    ->select('siswas.id', 'siswas.nama as nama', 'users.name as wali')
                    ->get();

        $data = [];
        foreach($siswas as $siswa){
            $nilais = DB::table('nilais')
                    ->where('bulan', $bulan)
                    ->where('tahun', $tahun)
                    ->where('siswa_id', $siswa->id)
                    ->select('path', 'siswa_id')
                    ->first();
            if(!$nilais){
                array_push($data, [
                    "id" => $siswa->id,
                    "nama" => $siswa->nama,
                    "wali" => $siswa->wali,
                    "nilai" => null
                ]);
            }else{
                array_push($data, [
                    "id" => $siswa->id,
                    "nama" => $siswa->nama,
                    "wali" => $siswa->wali,
                    "nilai" => $nilais->path
                ]);
            }
        }
        return response()->json([
            "status" => true,
            "message" => "Berhasil mendapatkan data.",
            "data" => $data
        ]);
    }

   
}
