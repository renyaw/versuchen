<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanKredit extends Model
{
    use HasFactory;

    protected $table = 'antrean_kredit';
    protected $guarded = [];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
}
