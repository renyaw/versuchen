<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;


    protected $table = 'kelurahan';
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->hasMany(kecamatan::class, 'id_kec', 'id_kec');
    }
    public function kredit()
    {
        return $this->hasMany(Kredit::class, 'noreg_kredit', 'noreg_kredit');
    }
    public function SKTM()
    {
        return $this->hasMany(SKTM::class, 'noreg_sktm', 'noreg_sktm');
    }

    public function domisili()
    {
        return $this->hasMany(Domisili::class, 'noreg_dom', 'noreg_dom');
    }
}
