<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanSKTM extends Model
{
    use HasFactory;
    protected $table = 'antrean_sktm';
    protected $guarded = [];

    // User
    public function pengajuan_sktm()
    {
        return $this->hasMany(Akun::class, 'username', 'username');
    }
    // Status
    public function sktm_status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id_status');
    }
    // Layanan
    public function sktm()
    {
        return $this->belongsTo(SKTM::class, 'id_sktm', 'id_sktm');
    }



}
