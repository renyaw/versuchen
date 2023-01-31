<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanKredit extends Model
{
    use HasFactory;

    protected $table = 'antrean_kredit';
    protected $guarded = [];

    public function pengajuan_kredit()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
    public function kredit()
    {
        return $this->belongsTo(Kredit::class, 'id_kredit', 'id_kredit');
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
