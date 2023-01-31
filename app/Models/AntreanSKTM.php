<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanSKTM extends Model
{
    use HasFactory;
    protected $table = 'antrean_sktm';
    protected $guarded = [];

    public function Akun()
    {
        return $this->hasMany(Akun::class, 'username', 'username');
    }
    public function sktm_status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id_status');
    }
    public function pengajuan_sktm()
    {
        return $this->belongsTo(Akun::class, 'id_sktm', 'id_sktm');
    }
    public function pengajuan_domisili()
    {
        return $this->belongsTo(Akun::class, 'id_dom', 'id_dom');
    }
    public function pengajuan_kredit()
    {
        return $this->belongsTo(Akun::class, 'id_dom', 'id_dom');
    }



}
