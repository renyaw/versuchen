<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;
    protected $table = 'kredit';
    protected $guarded = [];


    public function kelurahan()
    {
        return $this->hasMany(kelurahan::class, 'noreg_kredit', 'noreg_kredit');
    }
    public function antrean_kredit()
    {
        return $this->belongsTo(AntreanKredit::class, 'id_kredit', 'id_kredit');
    }
}
