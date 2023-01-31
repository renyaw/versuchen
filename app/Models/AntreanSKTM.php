<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanSKTM extends Model
{
    use HasFactory;
    protected $table = 'antrean_sktm';
    protected $guarded = [];

    public function sktm()
    {
        return $this->belongsTo(SKTM::class, 'id_sktm', 'id_sktm');
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
