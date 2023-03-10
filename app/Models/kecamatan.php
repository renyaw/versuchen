<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $guarded = [];

    public function kec_kel()
    {
        return $this->hasMany(kelurahan::class, 'id_kec', 'id_kec');
    }
}
