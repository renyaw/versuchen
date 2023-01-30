<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kredit2Controller extends Controller
{
    //

    public function index()
    {
        // $query = DB::table('antrean_kredit')->get();
        return view('kelurahan/verifikasi');
    }
}
