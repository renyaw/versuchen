<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTM extends Model
{
    use HasFactory;
    public function kelurahan()
    {
        return $this->hasMany(kelurahan::class, 'noreg_sktm', 'noreg_sktm');
    }
    public function antrean_sktm()
    {
        return $this->belongsTo(AntreanDomisili::class, 'id_sktm', 'id_sktm');
    }
}
