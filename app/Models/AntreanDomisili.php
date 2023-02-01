<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanDomisili extends Model
{
    use HasFactory;

    protected $table = 'antrean_domisili';
    protected $guarded = [];

    //User
    public function pengajuan_domisili()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
    //Status
    public function dom_status()
    {
        return $this->belongsTo(status::class, 'status', 'id_status');
    }
    //Layanan
    public function input_dom()
    {
        return $this->belongsTo(Domisili::class, 'id_dom', 'id_dom');
    }
}
