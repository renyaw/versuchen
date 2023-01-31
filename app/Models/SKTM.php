<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTM extends Model
{
    use HasFactory;
    protected $table = 'sktm';
    protected $guarded = [];

    //Antrean
    public function output_sktm()
    {
        return $this->belongsTo(AntreanSKTM::class, 'id_sktm', 'id_sktm');
    }
    //Kelurahan
    public function sktm_kel()
    {
        return $this->belongsTo(kelurahan::class, 'noreg_sktm', 'noreg_sktm');
    }

}
