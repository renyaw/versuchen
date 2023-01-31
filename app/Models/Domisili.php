<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;
    protected $table = 'domisili';
    protected $guarded = [];
    //Antrean
    public function output_domisili()
    {
        return $this->belongsTo(AntreanDomisili::class, 'id_dom', 'id_dom');
    }
    //Kelurahan
    public function dom_kel()
    {
        return $this->belongsTo(kelurahan::class, 'noreg_dom', 'noreg_dom');
    }

}
