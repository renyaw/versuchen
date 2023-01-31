<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Masyarakat;
use App\Models\AntreanKredit;

class Akun extends Model
{
    use HasFactory;

    protected $table = 'akun';
    protected $guarded = [];
    protected $hidden = [
        'password'
    ];

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }

    public function antrean_kredit()
    {
        return $this->hasMany(AntreanKredit::class, 'username', 'username');
    }

    public function antrean_sktm()
    {
        return $this->hasMany(AntreanSKTM::class, 'username', 'username');
    }

    public function antrean_domisili()
    {
        return $this->hasMany(AntreanDomisili::class, 'username', 'username');
    }


}
