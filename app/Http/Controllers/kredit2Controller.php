<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kredit2Controller extends Controller
{
    //

    public function index()
    {
        // $query = DB::table('antrean_kredit')->get();
        return view('/masyarakat/kredit');
    }

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
        kredit::create($data);
    }

}
