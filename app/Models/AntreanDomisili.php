<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanDomisili extends Model
{
    use HasFactory;

    protected $table = 'antrean_domisili';
    protected $guarded = [];

    public function pengajuan_domisili()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
    public function domisili()
    {
        return $this->belongsTo(domisili::class, 'id_dom', 'id_dom');
    }
    public function status()
    {
        return $this->hasMany(status::class, 'id_status', 'id_status');
    }
    public function Akun()
    {
        return $this->hasMany(Akun::class, 'username', 'username');
    }
}
