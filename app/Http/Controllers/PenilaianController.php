<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = DB::table('siswas')
        ->join('users', 'users.id', '=', 'siswas.wali_id')
        ->select('siswas.id', 'siswas.nama as nama', 'users.name as wali')
        ->get();

        $data = [];

        foreach($siswas as $siswa){
        $nilais = DB::table('nilais')
                ->where('bulan', date("m"))
                ->where('tahun', date("Y"))
                ->where('siswa_id', $siswa->id)
                ->select('path', 'siswa_id')
                ->first();
        if(!$nilais){
            array_push($data, [
                "id"    => $siswa->id,
                "nama" => $siswa->nama,
                "wali" => $siswa->wali,
                "nilai" => null
            ]);
        }else{
            array_push($data, [
                "id"    => $siswa->id,
                "nama" => $siswa->nama,
                "wali" => $siswa->wali,
                "nilai" => $nilais->path
            ]);
        }
        }
        $bulan = ["null", "januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember"];
        return view('dashboard.penilaian.index', ["data" => $data, "bulan" => $bulan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $evaluasi = $request->file('evaluasi');
        $timeMd5 = md5(date("HismdY"));
        $newName = Str::slug(explode(".", $evaluasi->getClientOriginalName())[0]).$timeMd5.".".$evaluasi->getClientOriginalExtension();
        $path = $evaluasi->storeAs('public/evaluasi', $newName);
        $link = Storage::url($path);
        Nilai::create([
            "siswa_id" => $request->id,
            "bulan" => date('m'),
            "tahun" => date('Y'),
            "path" => $link
        ]);
        // dd($link);
        return redirect()->route('penilaian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.penilaian.add', ["id" => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
