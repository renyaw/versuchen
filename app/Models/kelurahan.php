<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;


    protected $table = 'kelurahan';
    protected $guarded = [];

    //Layanan
    public function kel_kredit()
    {
        return $this->hasMany(Kredit::class, 'noreg_kredit', 'noreg_kredit');
    }
    public function kel_SKTM()
    {
        return $this->hasMany(SKTM::class, 'noreg_sktm', 'noreg_sktm');
    }

    public function kel_dom()
    {
        return $this->hasMany(Domisili::class, 'noreg_dom', 'noreg_dom');
    }
    //Kecamatan
    public function kel_kec()
    {
        return $this->belongsTo(kecamatan::class, 'id_kec', 'id_kec');
    }

}
