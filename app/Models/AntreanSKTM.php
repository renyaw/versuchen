<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntreanSKTM extends Model
{
    use HasFactory;
    protected $table = 'antrean_sktm';
    protected $guarded = [];

    public function akun(){
        return $this->belongsTo(Akun::class, 'username', 'username');
    }
}
