<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WaliController extends Controller{

    public function index(){
        
        $wali = Auth::user()->id;
        $data = DB::table('siswas')
                    ->join('nilais', 'siswas.id', '=', 'nilais.siswa_id')
                    ->join('users', 'users.id', '=', 'siswas.wali_id')
                    ->where('users.id', '=', $wali) 
                    ->selectRaw("CONCAT(`bulan`, '/', `tahun`) as tanggal, nilais.path")
                    ->orderByDesc('tanggal')
                    ->get();

        return response()->json([
            "status" => true,
            "message"=> "Berhasil login.",
            "data" => $data
    
        ]);
    }

}
