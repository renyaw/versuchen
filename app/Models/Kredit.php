<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table = 'kredit';
    protected $guarded = [];

    //Antrean
    public function output_kredit()
    {
        return $this->belongsTo(AntreanKredit::class, 'id_kredit', 'id_kredit');
    }
    //Kelurahan
    public function kredit_kel()
    {
        return $this->belongsTo(kelurahan::class, 'noreg_kredit', 'noreg_kredit');
    }

}
