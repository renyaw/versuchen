<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Models\AntreanKredit;

class kreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $antrean_kredit = AntreanKredit::all();
        // return view('kelurahan/verifikasi',compact('antrean_kredit'));
        // Query Builder
        // $query = DB::table('antrean_kredit')
        //             ->select('antrean_kredit.*',"akun.nik as nik_u","masyarakat.*")
        //             ->leftJoin('akun',function($join) {
        //                 $join->on('antrean_kredit.username','=','akun.username');
        //             })
        //             ->leftJoin('masyarakat',function($join) {
        //                 $join->on('masyarakat.nik','=','akun.nik');
        //             })
        //             ->get();

        // $query = DB::table('antrean_kredit')->get();
        $query = AntreanKredit::all();




        // dd($query);
        return view('kelurahan/verifkredit',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $data = [
            'id_kredit' => $request->id_kredit,
            'sp_kel_kredit' => $request->sp_kel_kredit,
            'kk_kredit' => $request->kk_kredit,
            'ktp_kredit' => $request->ktp_kredit,
            'lain_kredit' => $request->lain_kredit,
            'tgl_antre_kredit' => $request->tgl_antre_kredit,
        ];
        domisili::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
