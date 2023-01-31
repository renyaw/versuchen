<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $guarded = [];

    public function kelurahan()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }

    public function antrean_kredit()
    {
        return $this->hasMany(Masyarakat::class, 'username', 'username');
    }
}
