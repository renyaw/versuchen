<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanDomisili extends Model
{
    use HasFactory;

    protected $table = 'antrean_domisili';
    protected $guarded = [];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
}
